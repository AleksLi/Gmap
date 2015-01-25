<button type="button" class="backButton" onclick="history.go(-1);">Back</button>
<a href="index.php?q=add" class="textRight"> Add new user </a>

<table class="manageUsers">
	<thead>
		<tr>
			<th>Image</th>
			<th>Name</th>
			<th>Address</th>
			<th colspan="2">Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$result = mysql_query("SELECT * FROM users");
		while ($row = mysql_fetch_assoc($result)) {
		echo '<tr>
				<td>image</td >
				<td>'.$row['name'].'</td >
				<td>'.$row['address'].'</td>
				<td><a href="index.php?q=edit&id='.$row['id'].'" > Edit </a></td>
				<td><a href="handler.php?deleteUser='.$row['id'].'" > Delete </a></td>	
			</tr>';
		}
	?>
	</tbody>
</table>