<?php

// подключаем файл для работы с базой данных
require('database.php');

// присваеваем удобные имена переменным формы
$user_name = $_POST["user_name"];
$user_address = $_POST["user_address"];
$user_id = $_POST["user_id"];

$insert_t = "INSERT INTO new_user SET 
			name='".$user_name."', 
			address='".$user_address."'
	 		";

$edit_t = "UPDATE new_user SET name='$user_name', address='$user_address' WHERE id='$user_id' ";




// заносим в базу данных значения при нажатии на кнопку
if(isset($_POST['user_submit_btn']) )
{
	if(!empty($user_address) && !empty($user_name) )	  
	{		
		mysql_query($insert_t, $link) ;
		header("Location: manage_users.php");
	}
	if(empty($_POST["user_name"]) || (empty($_POST["user_address"]) ) )
	{
		header("Location: empty_page.php");
	}
}

// редактирование пользователя
if(isset($_POST['edit_user_btn']) )
{
	if(!empty($user_address) && !empty($user_name) )	  
	{		
		mysql_query($edit_t, $link) ;
		header("Location: manage_users.php");
	}
	if(empty($_POST["user_name"]) || (empty($_POST["user_address"]) ) )
	{
		header("Location: empty_page.php");
	}
}
// Удаление при нажатии на ссылку DELETE, которая находится на странице manage_users.php
$id_db = $_GET['id_db'];
$delete_by_id = "DELETE FROM new_user WHERE id='".$id_db."' ";
			
if(!empty($id_db)) 
{
	mysql_query($delete_by_id, $link) ;
	header("Location: manage_users.php");
}
	
	// Обновление записей в базе данных
// значения при нажатии на ссылку EDIT на manage_users.php приходят сюда


// function replace_function() 
// {
	// mysql_query($edit_by_id, $link) ;
	// 	header("Location: manage_users.php");
// }

		// Сложная идея с поиском и заменой!! Надеюсь не понадобится
// редактрирование и сравнение со значениями в базе данных при введении значений
// на странице add_user после нажатия на кнопку EDIT на странице manage_users.php

// Это уже существующие данные которые надо изменить.
// $name_db = $_GET['name_db'];
// $address_db = $_GET['address_db'];

// надо бы делать это внутри функции чтобы потом не переводить её обратно
// делаем все строчными
// $name_db = mb_strtolower($name_db, 'UTF-8');
// $address_db = mb_strtolower($address_db, 'UTF-8');

// strcmp(str1, str2)
// str_replace(search, replace, subject)





// условие при нажатии на кнопку user_submit_btn с ним всё работает
	// if(!empty($_POST["user_name"]) && !empty($_POST["user_address"]) )	
	// {
	// 		mysql_query($insert_t, $link) ;
	// 		header("Location: manage_users.php");
	// }




//  ------------------------------------ Всё что не понадобилось еще-----------------------------

	// $query_t = "SELECT * FROM new_user";
	// 	$query_result = mysql_query($query_t, $link);

	// 	while($get_array = mysql_fetch_array($query_result) )
	// 	{
	// 		$get_array_id = $get_array['id'] ;
	// 		$get_array_name = $get_array['name'] ;
	// 		$get_array_address = $get_array['address'] ;
	// 	}


	// if(isset($_POST['user_submit_btn']) && mysql_query($insert_t, $link) == true ) {
// 	if(!headers_sent()){	
// 		header('Location: manage_users.php');
// 	}
// }

	// if(isset($_POST['user_submit_btn']) ) {}

	
	// function add_user() {
	// 	mysql_query($insert_t, $link) ;
	// }
		
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