<?php

//Удаление продукта

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'sql.php';

/*
 * Получаем ID продукта из адресной строки
 */

$id = $_GET['id'];

/*
 * Делаем запрос на удаление строки из таблицы products
 */

mysqli_query($mysq1, "DELETE FROM `zakaz` WHERE `zakaz`.`id_zakaz` = '$id'");

/*
 * Переадресация на главную страницу
*/

header('Location: ../czakaz.php');