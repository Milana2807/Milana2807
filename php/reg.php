<?php  
    /*фильтр символов*/
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


    /*хэширование пароля*/
    $pass = md5($pass."sji28bgk1kbv4f");

    require "sql.php";

    $mysq1->query("INSERT INTO `users` (`login`, `mail`, `phone`, `pass`) VALUES('$login', '$mail', '$phone', '$pass')");

    $mysq1->close();

    /*перенаправление на вход*/
    header('Location: ../lich.php');
?>