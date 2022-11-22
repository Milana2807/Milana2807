<?php 
	$login = $_POST['login'];

	$pass = $_POST['pass'];

	/*хэширование пароля*/
	$pass = md5($pass."sji28bgk1kbv4f");

	/*подключение к БД*/
	require "sql.php";
	
	/*выборка из БД*/
	$result = $mysq1->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' ");

	/*конвертация в массив*/
	$user = $result->fetch_assoc();

	/*Если длина массива равна 0*/
	if(empty($user) or count($user) == 0) {
		header('Location: error.php');
		exit();
	}

	setcookie('user', $user['login'], time() + 3600 * 24 * 30, "/");

	$mysq1->close();

	/*перенаправление на вход*/
	header('Location: ../index.php');
?>


