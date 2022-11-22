<?php  
$name = $_POST['name'];
$phone = $_POST['phone'];

require "sql.php";

$mysq1->query("INSERT INTO `zvonok` (`name`, `phone`) VALUES('$name', '$phone')");

$mysq1->close();

$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");
?>