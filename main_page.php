<?php

// подключаем файл для работы с базой данных
require('database.php');

// присваеваем удобные имена переменным формы
$user_name = $_POST["user_name"];
$user_address = $_POST["user_address"];

$insert_t = "INSERT INTO new_user SET 
			name='".$user_name."', 
			address='".$user_address."'
	 		";

	if(isset($_POST['user_submit_btn']) )
	{
		if(!empty($_POST["user_name"]) && !empty($_POST["user_address"]) )	
		{
			mysql_query($insert_t, $link) ;
		}
	}
	
	function add_user() {
		mysql_query($insert_t, $link) ;
	}
		
	 		//строка запроса в базу данных
 		

 			// echo "system query fail";
 			
 	
 	 	// echo "NINKSYA";


// if(isset($_POST['user_submit_btn']))
// {
// 	$insert_t = "INSERT INTO new_user SET 
// 			name='".$user_name."', 
// 			address='".$user_address."' 
// 	 		";
// 	 		if(!mysql_query($insert_t, $link)) 
// 	 		{
// 	 			echo "не корректно введены данные";
// 	 		}
// 	 		else echo "Correct";
// }



// Идея такова, что при нажатии на кнопку user_submit_btn будет ссылатся на страницу index.html,
// а там уже будет выводится наши данные, т.е то что мы добавили здесь. Думаю надо будет проходиться массивом 
// foreach по данным в таблице SQL, вытаскивать всё оттуда каждый раз и записывать в файл index.html

// может прийдётся переименовать index.html в index.php для корректной работы и чтобы больше создавать файлов. 
// Иначе прийдётся создать еще один файл который будет тесно работать с index.html

?>