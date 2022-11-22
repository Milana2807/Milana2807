 <?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require 'php/sql.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $klient_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $klient = mysqli_query($mysq1, "SELECT * FROM `users` WHERE `id_users` = '$klient_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $klient = mysqli_fetch_assoc($klient);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/ctovar.css">
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактирование покупателя</title>
</head>
<body style="background-color: #e8e8e8;">
  				<form class="upup" action="php/updateK.php" method="post">
			  		<input type="hidden" class="input_dob" name="id" placeholder="id" 
					value="<?= $klient['id_users'] ?>">
					<input type="text" class="input_dob" name="login" placeholder="Логин" 
					value="<?= $klient['login'] ?>">
					<input type="text" class="input_dob" name="mail" placeholder="Эл. почта"
					value="<?= $klient['mail'] ?>">
					<input type="text" class="input_dob" name="phone" placeholder="Телефон" value="<?= $klient['phone'] ?>">
					<input type="text" class="input_dob" name="pass" placeholder="Пароль"
					value="<?= $klient['pass'] ?>">
			
					<button type="submit" class="dob">Редактировать</button>
				</form>
	
	