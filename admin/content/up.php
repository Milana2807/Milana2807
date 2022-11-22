 <?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require 'php/sql.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $product_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $product = mysqli_query($mysq1, "SELECT * FROM `products` WHERE `id` = '$product_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $product = mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/ctovar.css">
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактирование товара</title>
</head>
<body style="background-color: #e8e8e8;">

        		<form class="upup" action="php/update.php" method="post">

					<input type="hidden" class="input_dob" name="id" placeholder="id" value="<?= $product['id'] ?>">

					<input type="text" class="input_dob" name="img" placeholder="image.png/jpg" value="<?= $product['img'] ?>">

					<input type="text" class="input_dob" name="title" placeholder="Название" value="<?= $product['title'] ?>">
                    
					<input type="text" class="input_dob" name="price" placeholder="Стоимость" value="<?= $product['price'] ?>">

					<button type="submit" class="dob">Редактировать</button>
				</form>
	
	