<html>
	<head>
		<title> Новый пользователь </title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
<table>
		<tr>
			<td width="80px">
				<a  href="index.html"> <h3>Back</h3></a>
			</td>
		</tr>
	</table>
<?php
require('main_page.php');
?>
	<!-- 						//-					 -->

<table border="0"  cellpadding="3" class="new_user_t" >

	<form action="#" method="POST">
		<tr bgcolor="#FFCC33">
			<td>
				<h2>Add user</h2>
			</td>
		</tr>
		<tr >
			<td width="280px">
				Enter your name:
			</td>
		</tr>
		<tr bgcolor="#336699">
			<td>
				<input type="text" name="user_name" size="35">
			</td>
			<td>
				<?php 
					if(isset($_POST['user_submit_btn']) ) 
					{
						if(empty($_POST['user_name']) ) 
						{
							echo  "Uncorrect name";	
						}
					}
				?>
			</td>
		</tr>
		<tr bgcolor="#FFCC33">
			<td colspan="2">
			<br>
				Address example: вул. Будівельників, 38/14, Київ, місто Київ 
			</td>
		</tr>
		<tr bgcolor="#FFCC33">
			<td > 
				<input type="text" name="user_address" size="35">
			</td>
			<td>
				<?php 
					if(isset($_POST['user_submit_btn']) ) 
					{
						if(empty($_POST['user_address']) ) 
						{
							echo  "Uncorrect address ";	
						}
					}
				?>
			</td>
		</tr>
		<tr>
			<td>
			<br>
			<div align="right">
				<input type="submit" name="user_submit_btn" value="Submit">
			</div>
			</td>
			<td>
				
			</td>
		</tr>
	</form>
</table>

<?php
// 	if(isset($_POST['user_submit_btn']) )
// {
// 	add_user(); 
// 	echo "I love U baby";
// }
?>
 
	</body>
</html>
