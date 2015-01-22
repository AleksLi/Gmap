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
<?php


require('main_page.php');
?>
	<!-- 	  	-	-//-	-			-->

<table border="0" cellspacing="1"  cellpadding="4" class="new_user_t" >

	<form action="#" method="POST">
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
				<input type="text" name="user_name" size="35">
			</td>
			<td>
				<?php 
					if(isset($_POST['user_submit_btn']) ) 
					{
						if(empty($_POST['user_name']) ) 
						{
							echo "<div id='wrong_data'>";
							echo  "Incorrect name";	
							echo "</div>";
						}
						else
						{
							echo "<div id='wright_data'>";
							echo "Correct";
							echo "</div>";
						}
					}
				?>
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
				<input type="text" name="user_address" size="35">
			</td>
			<td>
				<?php 
					// if(isset($_POST['user_submit_btn']) ) 
					// {
						if(empty($_POST['user_address']) ) 
						{
							echo "<div id='wrong_data'>";
							echo  "Incorrect address ";	
							echo "</div>";
						}
						else
						{
							echo "<div id='wright_data'>";
							echo "Correct";
							echo "</div>";
						}
					// }
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

if($_GET["".$about_user['id'].""] ==2 )
{
	echo "переменная существует";
}

?>
<!--  Разобраться с занесением в базу данных -->
 <div id='wr_data'>
 	Enter your password
 </div>
	</body>
</html>
