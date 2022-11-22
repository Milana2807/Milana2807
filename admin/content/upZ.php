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

    $klient = mysqli_query($mysq1, "SELECT * FROM `zakaz` WHERE `id_zakaz` = '$klient_id'");

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
	<title>Редактирование заказа</title>
</head>
<body style="background-color: #e8e8e8;">
  				<form class="upup" action="php/updateZ.php" method="post">

			  		<input type="hidden" class="input_dob" name="id" placeholder="id" 
					value="<?= $klient['id_zakaz'] ?>">

					<input type="text" class="input_dob" name="id_users" placeholder="id покупателя"
					value="<?= $klient['id_users'] ?>">

					<input type="hidden" class="input_dob" class="input_dob" name="id_usl" placeholder="id" value="<?= $klient['id'] ?>">

					<input type="text" class="input_dob" class="input_dob" name="im" placeholder="Имя" value="<?= $klient['name'] ?>">

					<input type="text" class="input_dob" class="input_dob" name="fam" placeholder="Фамилия" value="<?= $klient['surname'] ?>">

					<input type="text" class="input_dob" class="input_dob" name="addres" placeholder="Адрес" value="<?= $klient['address'] ?>">

					<input type="text" class="input_dob" class="input_dob" name="pay" placeholder="Оплата" value="<?= $klient['payment'] ?>">

					<input type="text" class="input_dob" class="input_dob" name="deliv" placeholder="Доставка" value="<?= $klient['delivery'] ?>">

					<input type="text" class="input_dob" class="input_dob" name="price_zak" placeholder="Общая сумма заказа" value="<?= $klient['price_zakaz'] ?>">

					<button type="submit" class="dob">Редактировать</button>
				</form>
	
	