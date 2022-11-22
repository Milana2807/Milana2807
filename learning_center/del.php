<?php
require_once "db.php";
$polz=$_COOKIE['user'];
$id = $_GET['id'];

 mysqli_query($connection, "DELETE FROM `korzina` WHERE `id_korzina` = '$id' AND `login`='$polz'");
 header('Location: cart.php');