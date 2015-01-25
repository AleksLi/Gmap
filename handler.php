<?php require_once('config.php');

// ===============  add user  ===============

if(isset($_POST['addUser'])){
	$userName = $_POST['userName'];
	$address = $_POST['address'];

	if(!empty($userName) && !empty($address)){
		mysql_query("INSERT INTO users (name, address) VALUES ('$userName', '$address')");
		header('Location: index.php?q=users');
	} else {
		header("Location: index.php?q=users");
	}
}

// ===============  edit user  ===============

if(isset($_POST['editUser'])) {
	$userID = $_POST['editUser'];
	$userName = $_POST['userName'];
	$address = $_POST['address'];

	mysql_query("UPDATE users SET name='$userName', address='$address' WHERE id=$userID");
	header("Location: index.php?q=users");
}

// ===============  delete user  ===============

if(isset($_GET['deleteUser'])){
	$userID = $_GET['deleteUser'];
	
	mysql_query("DELETE FROM users WHERE id=$userID");
	header('Location: index.php?q=users');
}