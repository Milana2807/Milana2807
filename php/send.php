<?php  
$fio = $_POST['fio'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];

require "sql.php";

$mysq1->query("INSERT INTO `back_sv` (`fio`, `mail`, `phone`) VALUES('$fio', '$mail', '$phone')");

$mysq1->close();

header('Location: ../svyaz.php');

?>