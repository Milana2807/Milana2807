<?php
require 'sql.php';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (isset($_POST["title"]) && isset($_POST["discription"])) {
     
	if($mysq1->connect_error){
		die("Ошибка: " . $mysq1->connect_error);
	}
	$title = $mysq1->real_escape_string($_POST["title"]);
	$discription = $mysq1->real_escape_string($_POST["discription"]);
	$price = $mysq1->real_escape_string($_POST["price"]);
	$img = $mysq1->real_escape_string($_POST["img"]);
	$sql = "INSERT INTO products (title, discription, price, img) VALUES ('$title', '$discription', '$price', '$img')";
	if($mysq1->query($sql)){
		header('Location: ../ctovar.php');
	} else{
		echo "Ошибка: " . $mysq1->error;
	}
	$mysq1->close();
}
?>