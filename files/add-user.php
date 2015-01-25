<button type="button" class="backButton" onclick="history.go(-1);">Back</button>
<span class="textRight">Add new user</span>

<form class="userForm add" method="POST" action="handler.php">
	
	<div class="userName">
		<label>User name:</label>
		<input type="text" name="userName">
	</div>

	<div class="address">
		<label>Address:</label>
		<input type="text" name="address">
	</div>

	<button class="subBtn" name="addUser" type="submit">Add User</button>
</form>