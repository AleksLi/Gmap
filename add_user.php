<html>
	<head>
		<title> Новый пользователь </title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
<table>
		<tr>
			<td width="80px">
				<a  href="manage_users.php"> <h3>Back</h3></a>
			</td>
		</tr>
	</table>

	<!-- 	  	-	-//-	-			-->

<table border="0" cellspacing="1"  cellpadding="4" class="new_user_t" >

	<form action="main_page.php" method="POST">
		<tr bgcolor="#CCCCFF">
			<td>
				<h2>Add user</h2>
			</td>
		</tr>
		<tr >
			<td width="280px" bgcolor="#CCCCFF">
				Enter your name:
			</td>
		</tr>
		<tr bgcolor="#FFCC33">
			<td>
				<input type="text" name="user_name" value='<?php echo $_GET['name_db']; ?>'	size="35">
			</td>
			<td>
				<input type="hidden" name="user_id" value='<?php echo $_GET['edit_id_db']; ?>'>
			</td>
		</tr>
		<tr >
			<td colspan="2" bgcolor="#CCCCFF">
			<br>
				Address example: вул. Будівельників, 38/14, Київ, місто Київ 
			</td>
		</tr>
		<tr bgcolor="#FFCC33">
			<td > 
				<input type="text" name="user_address" value='<?php echo $_GET['address_db']; ?>' size="35">
			</td>
			<td>
				
			</td>
		</tr>
		<tr>
			<td >
			<br>
			<div align="right">
			<input id="edit_btn" type="submit" name="edit_user_btn" value="Edit">&nbsp;&nbsp;&nbsp;
				<input type="submit" name="user_submit_btn" value="Submit">
			</div>
			</td>
			<td>
			</td>
		</tr>
	</form>
</table>

<?

$edit_id_db = $_GET['edit_id_db'];
$name_db = $_GET['name_db'];
$address_db = $_GET['address_db'];

// echo $edit_id_db." ".$name_db." ".$address_db ;
// запрос на обновление в базу данных
// $edit_by_id = "UPDATE new_user SET name='".$name_db."', address='".$name_db."'  WHERE id='".$edit_id_db."' ";

?>

	</body>
</html>
