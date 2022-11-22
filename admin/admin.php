<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

require "content/php/sql.php";

$result = $mysq1->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `pass` ='$pass' ");
$user = $result->fetch_assoc();


if(empty($user) or count($user) == 0) {
	header('Location: ../php/error.php');
	exit();
}

setcookie('user', $user['login'], time() + 3600, "/");

$mysq1->close();

header('Location: content/glav.php');

?>


