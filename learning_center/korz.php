<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


require_once "db.php";

$polz=$_COOKIE['user'];

 $log = $connection->real_escape_string($_POST["log"]);
    $age = $connection->real_escape_string($_POST["id"]);
    $tit = $connection->real_escape_string($_POST["title"]);
    $desc = $connection->real_escape_string($_POST["desc"]);
    $img = $connection->real_escape_string($_POST["img"]);
    $price = $connection->real_escape_string($_POST["price"]);

    $sql = "INSERT INTO `korzina` (`login`, `title`, `img`, `price`, `id`) VALUES ('$log', '$tit', '$img', '$price', '$age')";
    if($connection->query($sql)){
        header('Location: cart.php');
        /*echo "Данные успешно добавлены  <a href=/cms/ctovar.php> Вернуться обратно</a>";*/
    } else{
        echo "Ошибка: " . $connection->error;
    }
    $connection->close();




// var_dump($_SESSION);
?>