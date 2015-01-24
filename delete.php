<?php
require_once('config.php');

if(isset($_GET['pageID'])){
    $pageID = $_GET['pageID'];
	$sql = "DELETE FROM pages WHERE pageID=$pageID;";
	mysql_query($sql);
}

if(isset($_GET['nameImg']) && isset($_GET['album'])){
	$nameImg = $_GET['nameImg'];
	$album = $_GET['album'];
	$sql = "DELETE FROM images WHERE category='$album' AND imgname='$nameImg'";
	mysql_query($sql);
	unlink('../albums/'.$album.'/thumb/'.$nameImg);
	unlink('../albums/'.$album.'/orign/'.$nameImg);
	unlink('../albums/'.$album.'/front/'.$nameImg);
}

if(isset($_GET['menuID'])){
	$menuID = $_GET['menuID'];
	mysql_query("DELETE FROM menu WHERE menuID=$menuID");
}

if(isset($_GET['fileID'])){
	$fileID = $_GET['fileID'];
	unlink('../files/'.$fileID);
}

if(isset($_GET['imgFileID'])){
	$imgFileID = $_GET['imgFileID'];
	unlink('../images/'.$imgFileID);
}

if(isset($_GET['postID'])){
    $postID = $_GET['postID'];
	$sql = "DELETE FROM blog WHERE postID=$postID;";
	mysql_query($sql);
}

if(isset($_GET['blockID'])){
    $blockID = $_GET['blockID'];
	$sql = "DELETE FROM blocks WHERE blockID=$blockID;";
	mysql_query($sql);
}

if(isset($_GET['dirName'])){
	$dirName = $_GET['dirName'];
		$dirdel = "DELETE FROM imgfolder WHERE category='$dirName'";
		mysql_query($dirdel);
		$imgdel = "DELETE FROM images WHERE category='$dirName'";
		mysql_query($imgdel);
 	function rmFolder($dir) {
	 	foreach(scandir($dir) as $file) {
	 		if ('.' == $file || '..' == $file) continue;
	 		if (is_dir($dir.$file)) rmFolder($dir.$file);
	 		else unlink($dir.$file);
	 	}
	 	rmdir($dir);
	 return true;
 	}
	 	rmFolder('../albums/'.$dirName.'/thumb/');
		rmFolder('../albums/'.$dirName.'/front/');
		rmFolder('../albums/'.$dirName.'/orign/');
	rmdir('../albums/'.$dirName);
	header('Location: index.php?q=gallery');
}