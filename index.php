<?php require_once('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Yandex map users</title>
	<script type="text/javascript" src="http://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

	<div id="wrapper">
		<?php
			$page = $_GET['q'];
			$manageUsers = '<a href="index.php?q=users">Manage users</a>';

			if ($page == 'users') {
				include 'views/list-users.php';
			} else if ($page == 'edit') {
				include 'views/edit-user.php';
			} else if ($page == 'add') {
				include 'views/add-user.php';
			} else {
			echo $manageUsers;
		?>

		<h1>Yandex map</h1>
		<div id="map"></div>

		<?php } ?>
	</div>

</body>
</html>