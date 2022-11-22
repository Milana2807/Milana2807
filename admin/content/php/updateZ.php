<?php
require 'sql.php';


	$ID = $_POST["id"];
	$name = $_POST["id_users"];
	$usl = $_POST["id_usl"];
	$im = $_POST["im"];
	$fam = $_POST["fam"];
	$addres = $_POST["addres"];
	$pay = $_POST["pay"];
	$deliv = $_POST["deliv"];
	$price_zak = $_POST["price_zak"];
	
	mysqli_query($mysq1, "UPDATE `zakaz` SET `id_users` = '$name', `id` = '$usl', `name` = '$im', `surname` = '$fam', `address` = '$addres', `payment` = '$pay', `delivery` = '$deliv', `price_zakaz` = '$price_zak' WHERE `zakaz`.`id_zakaz` = '$ID'");
	
		header('Location: ../czakaz.php');

?>