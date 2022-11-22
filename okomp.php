<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="стиль.css">
	<title>О компании</title>
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

	<div class="titletovar">О компании</div> <!--Заголовок "О компании"-->

	<div class="picture"> <!--Изображение-->
		<img src="images/okompanii1.jpg" alt="" width="800" height="550">
	</div>
	<div class="text"> <!--Текстовая информация о деятельности компании-->
	Цветочная компания "Pion" появилась в начале 2011 года и очень быстро завоевала сердца жителей города благодаря амбициозности и смелым творческим решениям.<br><br> 
	Неповторимый стиль, лучшие флористы Уральского региона и широкий ассортимент вот уже 10 лет радуют сердца наших клиентов.<br><br>
	Сегодня салон цветов "Pion" - это:<br><br>
	- быстрый и гарантированный сервис<br>
	- поставки цветов напрямую из многих стран мира<br>
	- широкий ассортимент сопутствующего товара<br>
	- система оптовых продаж цветов
	</div>

	<div class="text1"> <!--Координаты для связи с компанией-->
	<p>Мы всегда рады видеть Вас у нас в гостях по адресу Челябинская область, г. Миасс, проспект Автозаводцев, 18А<br><br>
		Связаться с нами вы можете по номеру <a href="tel:+7(951)4870193">+7 (951) 487 01 93</a></p>
	</div>

</body>
</html>



	