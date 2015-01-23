<html>
	<head>
		<title>
			EMPTY PAGE
		</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
<body>

<table>
	<tr>
		<td width="200px">
			<a href="add_user.php"> <h3>Add user</h3></a>
		</td>
		<td>
		
		</td>
	</tr>
</table>
<?php
	
echo"<table border='0' class='new_user_t'>
		<tr>
		<td>
	";
	if(empty($_POST["user_name"]) )
	{
		echo "<div id='wrong_data'>";
		echo  "enter your name";	
		echo "</div>";
	}
	else
 	{
		echo "<div id='wright_data'>";
		echo "Correct";
		echo "</div>";
	}	
	echo"
		</td>
		</tr>";
	echo"<tr>
		<td>";
	if(empty($_POST["user_address"]) )
	{
		echo "<div id='wrong_data'>";
		echo "enter your address";	
		echo "</div>";
	}
	else
	{
		echo "<div id='wright_data'>";
		echo "Correct";
		echo "</div>";
	}	
	echo"
		</td>
		</tr>";
echo"</table>";
echo "<hr>";

$id_db = $_GET['id_db'];
$name_db = $_GET['name_db'];
$address_db = $_GET['address_db'];

echo "<h2>ID from database: ".$user_id_db."</h2>";
echo "<h2>ID from database: ".$name_db."</h2>";
echo "<h2>ID from database: ".$address_db."</h2>";



?>		
</body>
</html>

		