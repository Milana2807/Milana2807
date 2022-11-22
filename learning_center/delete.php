<?php

//Удаление продукта

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require 'db.php';

/*
 * Получаем ID продукта из адресной строки
 */

$id = $_GET['id'];

/*
 * Делаем запрос на удаление строки из таблицы products
 */

mysqli_query($mysq1, "DELETE FROM `products` WHERE `products`.`id` = '$id'");

/*
* Переадресация на главную страницу
*/

header('Location: /cart.php');