<?php require_once('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Yandex map users</title>
	 <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	
	<script type="text/javascript">
 
ymaps.ready(init);
var myMap, myPlacemark;


function init(){

    myMap = new ymaps.Map("map", {
            center: [50.00, 36.24], 
            zoom: 10
        });
    myPlacemark = new ymaps.Placemark([50.00, 36.24], { 
        hintContent:'Харьков', 
        balloonContent: 'Моё жилище'
    });

    myMap.geoObjects.add(myPlacemark);
}

// var jsonArray = <?php  echo $arrAll;  ?>

</script>


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

 
<div id="map" style="width: 800px; height: 500px"></div>
<br>
<br>
<?php 
// Create array for JSON 
echo "NEW PART : CHECKOUT <br>";

echo "<br>";

$sql = mysql_query("SELECT * FROM users");
$arrAll = array();
	for($i = 0; $i < mysql_num_rows($sql); $i++) 
		{
			$row = mysql_fetch_array($sql, MYSQL_ASSOC);
			$arrAll[] = $row;
		}
		// print_r($arrAll);

$arrAll = json_encode($arrAll);

print_r($arrAll);
echo "<br>";

?>

		<?php } ?>
	</div>

</body>
</html>