<?php require_once('config.php');

// return JSON 
$sql = mysql_query("SELECT * FROM users");
$arrAll = array();

	for($i = 0; $i < mysql_num_rows($sql); $i++) {
		$row = mysql_fetch_array($sql, MYSQL_ASSOC);
		$arrAll[] = $row;
	}

echo json_encode($arrAll); 