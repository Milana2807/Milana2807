<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="стиль.css">
	<title>Связаться с нами</title>
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

	<form action="php/send.php" method="post"> <!--Форма для связи с компанией-->
		<div class="container">
			<h1>Связаться с нами</h1><br><br>

			<label for="name"><b>ФИО</b></label><br>
			<input type="text" placeholder="Введите ФИО" name="fio" required><br>

			<label for="email"><b>Адрес эл.почты</b></label><br>
			<input type="text" placeholder="Введите адрес эл.почты" name="mail" required><br>

			<label for="tel"><b>Телефон</b></label><br>
			<input type="text" placeholder="Введите номер телефона" name="phone" required><br>

			<button type="submit" class="registerbtn">Отправить сообщение</button>
		</div>
	</form> 
</body>
</html>
