<?php

// Пару констант для работы
define("DIR", __DIR__);

// 
$host = "localhost";
$user = "root" ;
$pass = "";
$db   = "gmap";

// работа с базой данных
if(!$link = mysql_connect($host, $user, $pass)) {
	echo "не удалось подключиться к базе данных<br>";
	exit();
}

if(!mysql_select_db($db, $link)){
	echo "не удальлось выбрать базу данных<>";
	exit();
}
