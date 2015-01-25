<?php 
	$id = $_GET['id'];
    $query = mysql_query("SELECT * FROM users WHERE id=$id");
    $row = mysql_fetch_assoc($query);
?>

<button type="button" class="backButton" onclick="history.go(-1);">Back</button>
<span class="textRight">Edit user</span>

<form class="userForm edit" method="POST" action="handler.php">

	<div class="userName">
		<label>User name:</label>
		<input type="text" name="userName" value="<?php echo $row['name'] ?>">
	</div>

	<div class="address">
		<label>Address:</label>
		<input type="text" name="address" value="<?php echo $row['address'] ?>">
	</div>

	<button class="subBtn" name="editUser" type="submit" value="<?php echo $row['id'] ?>">Edit user</button>
</form>