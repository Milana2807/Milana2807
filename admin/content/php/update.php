<?php
	require 'sql.php';


	$id = $_POST["id"];
	$title = $_POST["title"];
	$discription = $_POST["discription"];
	$img = $_POST["img"];
	$price = $_POST["price"];

	mysqli_query($mysq1, "UPDATE `products` SET `title` = '$title', `discription` = '$discription', `img` = '$img', `price` = '$price' WHERE `products`.`id` = '$id'");
	
	header('Location: ../ctovar.php');
?>