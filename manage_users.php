<html>
	<head>
		<title> Manage users </title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
<body>
	<table>
		<tr>
			<td width="80px">
				<a  href="index.php"> <h3>Back</h3></a>
			</td>
			<td>
				<a  href="add_user.php"> <h3>Add New user</h3></a>
			</td>
		</tr>
	</table>
 <?php
require('database.php');

// $sql_fetch = "SELECT * FROM new_user WHERE `id`=3";
 $sql_fetch2 = "SELECT * FROM new_user";
$result2 = mysql_query($sql_fetch2, $link);
// пoпробуем вывести наших пользователей
while ($user_info=mysql_fetch_array($result2) ) 
{
	echo "
	".$user_info['id']."
	".$user_info['name']."
	".$user_info['address']." <br>
	";

}
// $user_info = mysql_fetch_array($result2);
echo "<br>";
?>
<table class="manage_users_t" cellspacing="0">
	<tr id="row1">
		<td id="column1">
			Image
		</td>
		<td id="column2">
			Name
		</td>
		<td id="column3">
			Address
		</td>
		<td colspan="2" id="column4">
			Action
		</td>
	</tr>

<?php
	 $sql_fetch = "SELECT * FROM new_user";
	$result = mysql_query($sql_fetch, $link);

		while ($about_user=mysql_fetch_array($result)) 
		{
		// <input type='hidden' name='".$about_user['id']."'>
			// $about_user['id'];
			echo" <form action='#' method='GET'>
				<tr>
					<td id='total_column'>  </td>
					
					<td id='total_column'>
						".$about_user['name']."
					</td >
					<td id='total_column'>
						".$about_user['address']." 
					</td>
					<td>
					<input type='text' name='num_1".$about_user['id']."' value='num_".$about_user['id']."'>
						
					</td>	
					<td></td>	
				</tr>
				</form>
			";
			$id_num[] = $about_user['id'];
		}

echo "</table>";

// $id_num =array($_GET["".$about_user['id']."'"]);

// print_r($id_num); 

// $id_num= $_GET["".$about_user['id']."'"];

print_r($id_num);
?>
	


</body>
</html>