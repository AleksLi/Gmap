<?php
require_once('config.php');

if(isset($_POST['cssArea'])) file_put_contents('../css/custom.css', $_POST['cssArea']);

if(isset($_POST['editpage'])) {
	$page = $_POST['editpage'];
	$pagetitle = base64_encode($_POST['pagetitle']);
	$urltitle = $_POST['urltitle'];
	$keywords = base64_encode($_POST['keywords']);
	$description = base64_encode($_POST['description']);
	$textarea = base64_encode($_POST['textarea']);

	$link = $_POST['link'];
	$sqltwo = "UPDATE menu SET link='$urltitle' WHERE link='$link'";
	mysql_query($sqltwo);

	$update = "UPDATE pages
			SET pagetitle='$pagetitle',urltitle='$urltitle', keywords='$keywords', description='$description', textarea='$textarea'
			WHERE pageID='$page'";
	mysql_query($update);

	header('Location: index.php?q=pages&p='.$page);
}

if(isset($_POST['editlink'])) {
	$menuID = $_POST['editlink'];
	$idparent = $_POST['idparent'];
	$linkurl = $_POST['linkurl'];
	$menutitle = $_POST['menutitle'];

	$update = "UPDATE menu SET parent_id='$idparent', link='$linkurl', title='$menutitle' WHERE menuID=$menuID";
	mysql_query($update);
	header("Location: index.php?q=menu");
}

if(isset($_POST['editarticle'])) {
	$postID = $_POST['editarticle'];
	$postTitle = base64_encode($_POST['postTitle']);
 	$postDesc = base64_encode($_POST['postDesc']);
  	$postCont = base64_encode($_POST['postCont']);

	$update = "UPDATE blog SET postTitle='$postTitle', postDesc='$postDesc', postCont='$postCont' WHERE postID=$postID";
	mysql_query($update);
	header('Location: index.php?q=blog&b='.$postID);
}

if(isset($_POST['editblock'])) {
	$blockID = $_POST['editblock'];
	$blockname = $_POST['blockname'];
 	$description = base64_encode($_POST['description']);

	$update = "UPDATE blocks SET blockname='$blockname', description='$description' WHERE blockID=$blockID";
	mysql_query($update);
	header('Location: index.php?q=blocks&z='.$blockID);
}

if(isset($_POST['edituser'])) {
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$skype = $_POST['skype'];

	if($password != "" && $confirm != "") {
		if($password == $confirm) {
			$update = "UPDATE user SET username='$username', password='$password', email='$email', phone='$phone', skype='$skype' WHERE userID=1";
			mysql_query($update);
		} 
	} else {
		$update = "UPDATE user SET username='$username', email='$email', phone='$phone', skype='$skype' WHERE userID=1";
		mysql_query($update);
	} 
	header('Location: index.php?q=settings');
}

if(isset($_POST['tuning'])) {
	$id = $_POST['startpage'];
	$sqlone = "UPDATE pages SET startpage=0 WHERE startpage=1"; 
	mysql_query($sqlone);
	$sqltwo = "UPDATE pages SET startpage=1 WHERE pageID=$id"; 
	mysql_query($sqltwo);
//===========================
	$numsArt = $_POST['numsArt'];
	$imginrow = $_POST['imginrow'];
	$imginpage = $_POST['imginpage'];
	$sitename = $_POST['sitename'];
	$imgwidth = $_POST['imgwidth'];
	$imgheight = $_POST['imgheight'];
	$masonry = $_POST['masonry'];

	$update = "UPDATE tuning SET numsArt=$numsArt, imginrow=$imginrow, imginpage=$imginpage, 
	sitename='$sitename', imgWidth=$imgwidth, imgHeight=$imgheight, masonry=$masonry";
	mysql_query($update);

	header('Location: index.php?q=settings');
}

if(isset($_POST['oldname'])) {
	$oldName = $_POST['oldname'];
	$newName = $_POST['newname'];

	$updFolder = "UPDATE imgfolder SET category='$newName' WHERE category='$oldName'";
	mysql_query($updFolder);

	$updImg = "UPDATE images SET category='$newName' WHERE category='$oldName'";
	mysql_query($updImg);

	$albumPath = '../albums/';
	foreach (scandir($albumPath) as $fName) {
	 	if($fName == $oldName) {
			rename($albumPath.$oldName, $albumPath.$newName);
	 	}
	}
	header('Location: index.php?q=gallery&album='.$newName);
}

if(isset($_POST['savecaption'])) {
	$imgID = $_POST['savecaption'];
	$caption = base64_encode($_POST['caption']);
	$update = "UPDATE images SET caption='$caption' WHERE imgID=$imgID";
	mysql_query($update);
}