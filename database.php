<?php
// вписываем данные для работы с SQL
$user_name = "root" ;
$user_pass = "";
$db_name = "task_1";
$sdb_name = "localhost";

// работа с базой данных
if(!$link=mysql_connect($sdb_name, $user_name, $user_pass)) {
	echo "не удалось подключиться к базе данных<br>";
	exit();
}
if(!mysql_select_db($db_name, $link)){
	echo "не удальлось выбрать базу данных<>";
	exit();
}
// данные ниже нужны на всякий случай, для создания таблицы.
// $str_sql_query = "CREATE TABLE new_user (id INT NOT NULL AUTO_INCREMENT,
// 	PRIMARY KEY(id),
// 	name VARCHAR(50),
// 	address VARCHAR(100) )";
// для внесения данных в базу данных 
// $str_sql_query_2 = 'INSERT INTO new_user (id, name, address) VALUES ("", "", "")';
// if(!mysql_query($str_sql_query, $link)){
// 	echo "Запрос не удался<br>";
// 	exit();
// }
// else {
// 	echo "Таблица введена успешно";
// }

?>