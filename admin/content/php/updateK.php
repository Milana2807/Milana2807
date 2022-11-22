<?php
require 'sql.php';


	$ID = $_POST["id"];
	$login = $_POST["login"];
	$mail = $_POST["mail"];
	$phone = $_POST["phone"];
	$pass = $_POST["pass"];
	
	mysqli_query($mysq1, "UPDATE `users` SET `login` = '$login', `mail` = '$mail', `phone` = '$phone', `pass` = '$pass' WHERE `users`.`id_users` = '$ID'");
	
		header('Location: ../klients.php');

?>