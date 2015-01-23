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
// подключаем базу данных
require('database.php');

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
// в цикле создаем часть таблицы, которая заполняется при введении данных в форму. Работает через базу данных.
		while ($about_user=mysql_fetch_array($result)) 
		{
			// <input type='text' name='num_".$about_user['id']."' value='num_".$about_user['id']."'>

			echo" <form action='#' method='GET'>
				<tr>
					<td id='total_column'>  </td>
					
					<td id='total_column'>
						".$about_user['name']."
					</td >
					<td id='total_column'>
						".$about_user['address']." 
					</td>
					<td id='del_edit_col'>
						<a href='".get_str($str)."add_user.php?name_db=".$about_user['name']."&address_db=".$about_user['address']."&edit_id_db=".$about_user['id']."' > edit </a>
					</td>	
					<td id='del_edit_col'>
						<a href='".get_str($str)."main_page.php?id_db=".$about_user['id']."' > delete </a>
					</td>	
				</tr>
				</form>
			";
			$id_num[] ="".$about_user['id']."";
		}

echo "</table>";
echo "<hr align='center' width='1200px'>";

print_r($id_num);
echo "<br>";
echo DIR." ---- исходная строка";

	echo "<br>";
// функция для преобразования URL запроса, замена \ на /  . 
function get_str($str)
{
	$str_change = explode('\\' ,$str); 
	$str = implode('/', $str_change);
	return $str;
}
	print_r(get_str(DIR));



?>
	


</body>
</html>