<?php

	$host = 'localhost'; // адрес сервера
	$database = 'flowers'; // имя базы данных
	$user = 'root'; // имя пользователя
	$password = ''; // пароль

	$mysq1 = mysqli_connect($host, $user, $password, $database);

	/* проверка соединения */
	if(!$mysq1) {
    	die('Соединение не удалось: Код ошибки: '.mysqli_connect_errno().' - '.mysqli_connect_error());
	}

?>