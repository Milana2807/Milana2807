<?php
require_once "db.php";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$polz=$_COOKIE['user'];
$id_z=$_POST["id_z"];

 mysqli_query($connection, "DELETE FROM `korzina` WHERE `id_korzina` = '$id_z' AND `login`='$polz'");


if (isset($_POST["surname"]) && isset($_POST["name"])) {
     
	if($connection->connect_error){
		die("Ошибка: " . $connection->connect_error);
	}
	$log = $connection->real_escape_string($_POST["log"]);
	$age = $connection->real_escape_string($_POST["id"]);
	$price = $connection->real_escape_string($_POST["price"]);
	$sur = $connection->real_escape_string($_POST["surname"]);
	$nam = $connection->real_escape_string($_POST["name"]);
	$addr = $connection->real_escape_string($_POST["address"]);
	$pay = $connection->real_escape_string($_POST["payment"]);
	$del = $connection->real_escape_string($_POST["delivery"]);
	$sql = "INSERT INTO `zakaz` (`login`, `id_tov`, `name`, `surname`, `address`, `payment`, `delivery`, `price_zakaz`) VALUES ('$log', '$age', '$nam', '$sur', '$addr', '$pay', '$del', '$price')";
	if($connection->query($sql)){
		header('Location: cart.php');
		/*echo "Данные успешно добавлены  <a href=/cms/ctovar.php> Вернуться обратно</a>";*/
	} else{
		echo "Ошибка: " . $connection->error;
	}
	$connection->close();
}
?>