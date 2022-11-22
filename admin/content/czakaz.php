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
	<title>Заказы</title>
</head>
<body>
	<?php
	include("cms.php");
	?>

<div class="str">
	<div class="block_glavna">
	<h1 class="nazv">Заказы</h1>
	</div>


<!--ТАБЛИЦА С ТОВАРАМИ-->
<table>
   <caption></caption>
   <thead>
      <tr>
          <th>Номер заказа</th>
          <th>Номер товара</th>
          <th>Клиент</th>
          <th>Фамилия</th>
          <th>Имя</th>
          <th>Адрес</th>
          <th>Способ оплаты</th>
          <th>Способ доставки</th>
          <th>Общая сумма заказа</th>
      </tr>
  </thead>
  

<?php
    $zakazs = mysqli_query($mysq1, "SELECT * FROM `zakaz`");
    $zakazs = mysqli_fetch_all($zakazs);
    foreach ($zakazs as $zakaz) {
?>
  <tbody>
      <tr>
        <td style="text-align: center;"><b><?=$zakaz[0] ?></b></td> 
        <td style="text-align: center;"><b><?=$zakaz[2] ?></b></td> 
        <td style="text-align: center;"><b><?=$zakaz[1] ?></b></td> 
        <td style="text-align: center;"><?=$zakaz[4] ?></td> 
        <td style="text-align: center;"><?=$zakaz[3] ?></td> 
        <td style="text-align: center;"><?=$zakaz[5] ?></td> 
        <td style="text-align: center;"><?=$zakaz[6] ?></td> 
        <td style="text-align: center;"><?=$zakaz[7] ?></td> 
        <td style="text-align: center;"><?=$zakaz[8] ?> Р</td> 

        <td style="border: 0px solid black;" class="img-td"><a href="upZ.php?id=<?= $zakaz[0] ?>"><img src="image/update.png" width="30" height="25" title="Редактировать" alt="Редактировать"></a></td>

        <td style="border: 0px solid black;" class="img-td"><a href="php/deleteZ.php?id=<?= $zakaz[0] ?>"><img src="image/delete.png" width="30" title="Удалить" alt="Удалить"></a></td>
      </tr>
  </tbody>
<?php
  }
?>
</table>
</div>