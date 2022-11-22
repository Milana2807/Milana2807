<?php 
  require 'php/sql.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/ctovar.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="image/header_img/logo_icon.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Клиенты</title>
</head>
<body>
	<?php
	include("cms.php");
	?>

<div class="str">
	<div class="block_glavna">
	  <h1 class="nazv">Клиенты</h1>
	</div>


	<!--ТАБЛИЦА С ТОВАРАМИ-->
	<table>
      <thead>
   			<tr>
    			<th>Номер пользователя</th>
    			<th>Логин</th>
    			<th>Email</th>
    			<th>Телефон</th>
    			<th>Пароль</th>
   			</tr>
      </thead>

      <?php
      $user = mysqli_query($mysq1, "SELECT * FROM `users`");
      $user = mysqli_fetch_all($user);

      foreach ($user as $users) {
      ?>
      <tbody>
   		  <tr>
   			  <td style="text-align: center;"><?= $users[0] ?></td> 
          <td style="text-align: center;"><b><?= $users[1] ?></b></td> 
          <td style="text-align: center;"><?= $users[2] ?></td> 
          <td style="text-align: center;"><?= $users[3] ?></td> 
          <td style="text-align: center;"><?= $users[4] ?></td>

          <td class="img-td" style="border: 0px solid black;"><a href="upK.php?id=<?= $users[0] ?>"><img src="image/update.png" title="Редактировать" alt="Редактировать"></a></td>

          <td class="img-td" style="border: 0px solid black;"><a href="php/deleteK.php?id=<?= $users[0] ?>"><img src="image/delete.png" title="Удалить" alt="Удалить"></a></td>
   		  </tr>
      </tbody>
    <?php
      }
    ?>
  </table>
</div>