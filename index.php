<?php require_once('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Yandex map users</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

	<div id="wrapper">
		<?php
			$page = $_GET['q'];
			$manageUsers = '<a href="index.php?q=users">Manage users</a>';

			if ($page == 'users') {
				include 'files/list-users.php';
			} else if ($page == 'edit') {
				include 'files/edit-user.php';
			} else if ($page == 'add') {
				include 'files/add-user.php';
			} else {
				echo $manageUsers;
		?>

			<div><h1>MAP</h1></div>

		<?php } ?>
	</div>

</body>
</html>