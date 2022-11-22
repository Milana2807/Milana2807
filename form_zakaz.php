<?php

require_once "learning_center/db.php";
$product_id = $_GET['id'];
$polz=$_COOKIE['user'];
$res = $connection->query("SELECT * FROM `korzina` WHERE `id_korzina` = '$product_id' AND `login`='$polz'");

$res = mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="zakaz.css">

	<title>Оформление заказа</title>

	<style>
    .container-modal {
    	display: flex;
    	justify-content: center;
	    width: 1180px;
	    margin: 0 auto;
	}

	.table {
		border: 3px solid #6a6c85;
		max-width: 520px;
	    margin: 0 auto;
	    margin-top: 120px;
	}

	.sum {
		position: absolute;
		font-size: 20px;
		margin-top: -33px;
		margin-left: 170px;
	}

	.cena {
		border: 2px solid #6a6c85;
		width: 150px;
		text-align: center;
		padding: 4px;
	}

	@media (max-width: 768px) {
		.table {
			border: 3px solid #6a6c85;
			max-width: 600px;
		    margin: 0 auto;
		    margin-top: 120px;
		}

		.but button {
			font-size: 25px;
		}

		.sum {
			position: absolute;
			font-size: 20px;
			margin-top: -40px;
			margin-left: 250px;
			width: 173px;
		}

		.title h4 {
			font-size: 30px;
		}
	}

	 /*shapka*/
	 .header {
display: flex;
flex-flow: row nowrap;
justify-content: flex-start;
align-items: center;
height: 200px;
background-color: white;
}

.menu {
flex-grow: 1;
background-color: white;
}

.menu1 {
flex-grow: 1;
background-color: #FFEEFF;
}

.menu ul {
display: flex;
flex-flow: row nowrap;
margin: 2px 0 0;
padding: 0;
font-size: 20px;
line-height: 18px;
list-style: none;
background-color: white;
}

.menu1 ul {
display: flex;
flex-flow: row nowrap;
margin: 2px 0 0;
padding: 0;
font-size: 23px;
line-height: 18px;
list-style: none;
background-color: #FFEEFF;
justify-content: center;
}

.menu li {
margin-right: 30px;
}

.menu1 li {
margin-right: 30px;
}

.menu li: last-child {
margin-right: 0;
}

.menu1 li: last-child {
margin-right: 0;
}

.menu a {
padding: 8px 10px;
color: #000;
text-decoration: none;
}

.menu1 a {
padding: 8px 10px;
color: #000;
text-decoration: none;
}

.logo {
margin-right: 30px;
background-color: white;
}

.logo a {
background-color: white;
}

.menu a,
.menu .active {
display: block;
padding: 8px 10px;
letter-spacing: .27em;
background-color: white;
}

.menu1 a,
.menu1 .active {
display: block;
padding: 8px 10px;
background-color: #FFEEFF;
}

.menu .active {
color: #fff;
border-radius: 8px;
}

.menu1 .active {
color: #fff;
border-radius: 8px;
}

.tel {
margin-right: 10px;
background-color: white;
}

.tel a {
margin-right: 10px;
background-color: white;
}

.korzina {
margin-right: 25px;
background-color: white;
}

.korzina a {
margin-right: 25px;
background-color: white;
}

.naverh {
display: block;
position: fixed;
bottom: 20px;
right: 15px;
}
</style>
</head>
<body>

<div class="header"> <!--Шапка-->
		<div class="logo"> <!--Логотип-->
			<a href="index.php">
				<img src="images/logo.jpg" width="300" height="196"> 
			</a>
		</div>
		<div class="menu"> <!--Меню-->
			<ul>
			<li><a href="tovar.php">Товары</a></li>
				<li><a href="news.php">Новости</a></li>
				<li><a href="okomp.php">О компании</a></li>
				<?php if($_COOKIE['user'] == ''): ?>
				<li><a href="lich.php">Личный кабинет</a></li>
				<?php else: ?>
				<li><a href="learning_center/cart.php">Личный кабинет</a></li>
                <?php endif; ?>
				<li><a href="svyaz.php">Связаться с нами</a></li>
				<?php if($_COOKIE['user'] == ''): ?>
				<li><a href="regis.php">Регистрация/Вход</a></li>
                    <?php else: ?>
                   
						<li><a href="" style="font-weight: bold;"><?=$_COOKIE['user'] ?></a></li>
					<li><a href="php/logout.php" style="display: inline-block;">Выйти</a></li>
                  
                <?php endif; ?>
			</ul>
		</div>

		<a href="#" class="naverh"><img src="images/knopka.png" width="70px" height="70px"></a> <!--Кнопка "Наверх"-->

		<div class="tel"> <!--Кнопка для заказа звонка-->
			<a href="tel:+7(951)4870193">
				<img src="images/zvonok.png" width="60" height="60" alt="Изображение недоступно">
		</a>
	</div>

		<div class="korzina"> <!--Корзина-->
		<a href="learning_center/cart.php">
				<img src="images/korzina.png" width="60" height="60" alt="Изображение недоступно">
			</a>
		</div>
	</div>
    
<!-- внешний блок -->
<div class="container-area">
	<div class="container-area-inner">
		<form action="learning_center/oform.php" method="POST" class="personal_area">

			<!-- title -->
			<div class="block_vhod">
  				<label>Оформить заказ</label>
  			</div>

  			<!-- скрытые поля идентификаторы -->
  			<div class="pole">

  				<input type="hidden" name="log" value="<?=$_COOKIE['user'] ?>" required>

  				<input type="hidden" name="id_z" value="<?=$res['id_korzina'] ?>" required>

				<input type="hidden" name="id" value="<?=$res['id'] ?>" required>

				<input type="hidden" name="price" value="<?=$res['price'] ?>" required>
				
				<!-- Заказ: -->
				<lable class="lab-zak" style="display: flex; justify-content: center;"><b>Заказ: <?=$res['title']; ?></b></lable>

				<!-- поля ввода -->
				<input class="inp" type="text" placeholder="Введите имя" name="name" required>

				<input class="inp" type="text" placeholder="Введите фамилию" name="surname" required>

				<input class="inp" type="text" placeholder="Введите адрес" name="address" required>

				<!-- способ оплаты -->
				<div class="block_sposob1">
					<label class="sposob"><b>Способ оплаты</b></label>
					<input class="inp2" type="text" placeholder="При получении / На сайте" name="payment" required>
				</div>

				<!-- способ доставки -->
				<div class="block_sposob1">
					<label class="sposob"><b>Способ доставки</b></label>
					<input class="inp2" type="text" placeholder="Почта / Курьер / Самовывоз / Трансп. компания" name="delivery" required>
				</div>
			</div>

			<button type="submit" class="welcome" name="sub">ОФОРМИТЬ</button>
		</form>
	</div>
</div>    

</body>
</html>