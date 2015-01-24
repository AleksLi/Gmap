<?php
require_once('config.php');

if(isset($_POST['submitarticle'])){
	$postTitle = base64_encode($_POST['postTitle']);
	$postDesc = base64_encode($_POST['postDesc']);
	$postCont = base64_encode($_POST['postCont']);
	if(!empty($postTitle) && !empty($postDesc) && !empty($postCont)){
		$postDate = date('Y-m-d');
		$stmt = "INSERT INTO blog (postTitle, postDesc, postCont, postDate) 
				VALUES ('$postTitle', '$postDesc', '$postCont', '$postDate')";
		mysql_query($stmt);
		header('Location: index.php?q=blog');
	} else {
		header("Location: index.php?q=blog");
	}
}

if(isset($_POST['submitpage'])){
	$description = base64_encode($_POST['description']);
	$pagetitle = base64_encode($_POST['pagetitle']);
	$urltitle = $_POST['urltitle'];
	if(!empty($pagetitle) && !empty($description) && !empty($urltitle)){
		$keywords = base64_encode($_POST['keywords']);
		$textarea = base64_encode($_POST['textarea']);
		$insert = "INSERT INTO pages (pagetitle, urltitle, keywords, textarea, description) 
				   VALUES ('$pagetitle', '$urltitle', '$keywords', '$textarea', '$description')";
		mysql_query($insert);
		header("Location: index.php?q=pages");
	} else {
		header("Location: index.php?q=pages");
	}
}

if(isset($_POST['submitblock'])){
	$blockname = $_POST['blockname'];
	$description = base64_encode($_POST['description']);
	if(!empty($blockname) && !empty($description)){
		$insert = "INSERT INTO blocks (blockname, description) 
				   VALUES ('$blockname', '$description')";
		mysql_query($insert);
		header("Location: index.php?q=blocks");
	} else {
		header("Location: index.php?q=blocks");
	}
}

if(isset($_POST['submitlink'])){
  	$menutitle = $_POST['menutitle'];
  	if(!empty($menutitle)){
		$idparent = $_POST['idparent'];
	 	$linkurl = $_POST['linkurl'];
		$insert = "INSERT INTO menu (parent_id, title, link) 
				   VALUES ('$idparent', '$menutitle', '$linkurl')";
		mysql_query($insert);
		header("Location: index.php?q=menu");
	} else {
		header("Location: index.php?q=menu");
	}
}

if(isset($_POST['createdir'])){
	$album = $_POST['albumname'];
	if(!empty($album)){
		$newAlbum = '../albums/'.$album;
		mkdir($newAlbum);
		mkdir($newAlbum.'/orign');
		mkdir($newAlbum.'/front');
		mkdir($newAlbum.'/thumb');
		$insert = "INSERT INTO imgfolder (category) VALUES ('$album')";
		mysql_query($insert);
		header('Location: index.php?q=gallery&album='.$album);
	} else {
		header('Location: index.php?q=gallery&album='.$album);
	}
}