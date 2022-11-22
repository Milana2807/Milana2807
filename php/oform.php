<?php  
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];

    require "sql.php";

        $mysq1 = "INSERT INTO `zakaz` (`name`, `surname`, `address`) VALUES('$name', '$surname', '$address')";

        $mysq1->close();

    /*перенаправление на вход*/
    header('Location: /learning_center/cart.php');
?>