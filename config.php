<?php

// constant
define("DIR", __DIR__);

// database connect
$host = "localhost";
$user = "root" ;
$pass = "";
$db   = "gmap";

// check database connect
if(!$link = mysql_connect($host, $user, $pass)) {
	echo "не удалось подключиться к базе данных<br>";
	exit();
}

if(!mysql_select_db($db, $link)) {
	echo "не удальлось выбрать базу данных";
	exit();
}