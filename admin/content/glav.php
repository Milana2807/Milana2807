<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/glav.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="image/header_img/logo_icon.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Панель состояния</title>
</head>
<body>
	<?php include("cms.php"); ?>

<div class="str">
	<div class="block_glavna">
	<h1 class="nazv">Панель состояния</h1>
	</div>

<div class="block_blocki">
	<div class="blocki">
		<div class="bl1"><p>Всего заказов</p></div>
		<img src="image/заказы.png">
		<?php
    $a = mysqli_query($mysq1, "SELECT COUNT(1) FROM zakaz");
    $b = mysqli_fetch_array($a);?>
    <h2><?=$b[0]; ?></h2>
	</div>

	<div class="blocki">
		<div class="bl1"><p>Всего продаж</p></div>
		<img src="image/proda.png">
		<?php
    $a = mysqli_query($mysq1, "SELECT COUNT(1) FROM zakaz");
    $b = mysqli_fetch_array($a);?>
    <h2><?=$b[0]; ?></h2>
	</div>

	<div class="blocki">
		<div class="bl1"><p>Всего клиентов</p></div>
		<img src="image/user.png">
		<?php
    $c = mysqli_query($mysq1, "SELECT COUNT(1) FROM users");
    $v = mysqli_fetch_array($c);?>
    <h2><?=$v[0]; ?></h2>
	</div>
</div>
<!-- Заказать звонок -->
<table class="table_zvonok">
  <caption>Заказ звонка</caption>

  <thead>
    <tr>
      <th>Имя</th>
      <th>Номер телефона</th>
    </tr>
  </thead>
  <?php
    $zvonoks = mysqli_query($mysq1, "SELECT * FROM `zvonok`");
    $zvonoks = mysqli_fetch_all($zvonoks);
    foreach ($zvonoks as $zvonok) {
  ?>
  <tbody>
    <tr>
      <td style="border: none; border: 1px solid #6a6c85; padding: 10px;"><?=$zvonok['1'] ?></td>
      <td style="border: none; border: 1px solid #6a6c85; padding: 10px;"><?=$zvonok['2'] ?></td>

      <td style="border: 0px solid black;" class="img-td"><a href="php/deleteZvon.php?id=<?= $zvonok[0] ?>"><img src="image/delete.png" title="Удалить" alt="Удалить"></a></td>
    </tr>
  </tbody>
 <?php } ?>
</table>

<!-- Обратная связь -->
<table class="table_back_sv">
  <caption>Обратная связь</caption>

  <thead>
    <tr>
      <th>ФИО</th>
      <th>Адрес эл.почты</th>
      <th>Номер телефона</th>
      <th>Вопрос</th>
    </tr>
  </thead>
  <?php
    $back_svs = mysqli_query($mysq1, "SELECT * FROM `back_sv`");
    $back_svs = mysqli_fetch_all($back_svs);
    foreach ($back_svs as $back_sv) {
  ?>
  <tbody>
    <tr>
      <td style="border: none; border: 1px solid #6a6c85; padding: 10px;"><?=$back_sv['1'] ?></td>
      <td style="border: none; border: 1px solid #6a6c85; padding: 10px;"><?=$back_sv['2'] ?></td>
      <td style="border: none; border: 1px solid #6a6c85; padding: 10px;"><?=$back_sv['3'] ?></td>
      <td style="border: none; border: 1px solid #6a6c85; padding: 10px;"><?=$back_sv['4'] ?></td>

      <td style="border: 0px solid black;" class="img-td"><a href="php/deleteBack.php?id=<?= $back_sv[0] ?>"><img src="image/delete.png" title="Удалить" alt="Удалить"></a></td>
    </tr>
  </tbody>
 <?php } ?>
</table>

<!-- последние заказы -->
<table class="table_last">
   	<caption>Последние заказы</caption>

    <!--SELECT * FROM product ORDER BY ID DESC LIMIT 3;-->
   	<thead>
     	<tr>
        <th>Номер заказа</th>
        <th>Номер товара</th>
      	<th>Клиент</th>
      	<th>Фамилия</th>
      	<th>Имя</th>
      	<th>Адрес</th>
      	<th>Способ оплаты</th>
      	<th style="text-align: left;">Способ доставки</th>
      	<th style="text-align: left;">Общая сумма заказа</th>
     	</tr>
   </thead>
<?php
    $zakazs=mysqli_query($mysq1, "SELECT * FROM zakaz ORDER BY id_zakaz DESC LIMIT 3");
    $zakazs=mysqli_fetch_all($zakazs);

    foreach ($zakazs as $zakaz) {
?>
   	<tbody>
     	<tr>
     		<td><b><?=$zakaz[0] ?></b></td> 
        <td><b><?=$zakaz[2] ?></b></td> 
        <td><b><?=$zakaz[1] ?></b></td> 
        <td><?=$zakaz[4] ?></td> 
        <td><?=$zakaz[3] ?></td> 
        <td><?=$zakaz[5] ?></td> 
        <td><?=$zakaz[6] ?></td> 
        <td><?=$zakaz[7] ?></td> 
        <td><?=$zakaz[8] ?> Р</td> 

        <td style="border: 0px solid black;" class="img-td"><a href="upZ.php?id=<?= $zakaz[0] ?>"><img src="image/update.png" title="Редактировать" alt="Редактировать"></a></td>

        <td style="border: 0px solid black;" class="img-td"><a href="php/deleteZ.php?id=<?= $zakaz[0] ?>"><img src="image/delete.png" title="Удалить" alt="Удалить"></a></td>
     	</tr>
   </tbody>
 <?php } ?>
</table>
</div>
</body>
</html>