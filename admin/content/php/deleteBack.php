<?php

//Удаление продукта

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require 'sql.php';

/*
 * Получаем ID продукта из адресной строки
 */

$id = $_GET['id'];

/*
 * Делаем запрос на удаление строки из таблицы products
 */

mysqli_query($mysq1, "DELETE FROM `back_sv` WHERE `back_sv`.`id_users` = '$id'");

/*
* Переадресация на главную страницу
*/

header('Location: ../glav.php');