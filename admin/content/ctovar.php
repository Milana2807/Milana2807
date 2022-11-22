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
	<title>Товары</title>
</head>
<body>
	<?php include("cms.php"); ?>

	<div class="str">
		<div class="block_glavna">
			<h1 class="nazv">Товары</h1>
		</div>

		<form action="php/create.php" method="post" class="form-dob">
				<input type="text" name="img" placeholder="image.png/jpg">
				<input type="text" name="title" placeholder="Название">
				<input type="text" name="price" placeholder="Стоимость">
			<button type="submit">Добавить товар</button>
		</form>

    <?php
      require_once 'php/sql.php';
    ?>
		<!--Таблица товаров-->
	 	<table>
   			<caption></caption>

   		<thead>
  			<tr>
    			<th>Номер товара</th>
    			<th>Изображение</th>
    			<th>Название</th>
    			<th>Стоимость</th>
 			</tr>
 		</thead>
   		
        <?php
          $products=mysqli_query($mysq1, "SELECT * FROM products");
          $products=mysqli_fetch_all($products);
          foreach ($products as $product) {
        ?>

   		  <tbody>
   			    <tr>
   				      <td style="text-align: center; font-weight: bold;" title="id Услуги"><?=$product[0] ?></td>
                <td class="img-uslug"><img src="../../images/<?=$product[2] ?>" alt=""></td> 
                <td style="text-align: center; font-weight: bold;"><?=$product[1] ?></td> 
                <td style="text-align: center; font-weight: bold;"><?=$product[3] ?> Р</td> 

   				      <td style="border: 0px solid black;" class="img-td"><a href="up.php?id=<?= $product[0] ?>"><img src="image/update.png" width="30" height="25" title="Редактировать" alt="Редактировать"></a></td>

                <td style="border: 0px solid black;" class="img-td"><a href="php/delete.php?id=<?= $product[0] ?>"><img src="image/delete.png" width="30" title="Удалить" alt="Удалить"></a></td>
   			     </tr>
   		  </tbody>  
        <?php } ?>
	    </table>
    </div>
</body>
</html>