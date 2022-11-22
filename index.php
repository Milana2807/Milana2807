<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="стиль.css">
	<title>Цветочный магазин "Pion"</title>
</head>

<body>
	<div class="header"> <!--Шапка сайта-->
		<div class="logo"> <!--Логотип-->
			<a href="index.php">
				<img src="images/logo.jpg" width="300" height="196" alt="Изображение недоступно"> 
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

	<div class="wrap"> <!--Слайдер-->
		<input type="radio" name="slides" id="point1" checked>
		<input type="radio" name="slides" id="point2">
		<input type="radio" name="slides" id="point3">
	<div class="slider">
		<div class="slides img1"></div>
		<div class="slides img2"></div>
		<div class="slides img3"></div>
	</div>
	<div class="control">
		<label for="point1"></label>
		<label for="point2"></label>
		<label for="point3"></label>
	</div>
	<br><br>

	<a href="#" class="naverh"><img src="images/knopka.png" width="70" height="70" alt="Изображение недоступно"></a> <!--Создаем кнопку "Наверх"-->

	<div class="title">Предложения недели</div> <!--Блок "Предложения недели"-->

	<div class="product-item">
		<img src="images/gerberamix.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Гербера микс 9шт, зелень, лента</h3>
			<span class="price">1910 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/rosemix.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Роза Россия микс 50см, 51шт, лента</h3>
			<span class="price">6152 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/hrizantema.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Хризантема кустовая микс, 9шт, лента</h3>
			<span class="price">1390 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/rosemix2.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Роза красная 50см, 9шт, лента</h3>
			<span class="price">1820 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/alstromeria.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Альстромерия микс 51шт, лента</h3>
			<span class="price">6560 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>


    <div class="title">Любимые букеты</div> <!--Блок "Любимые букеты"-->

	<div class="product-item">
		<img src="images/buket1.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Букет "Ванильное небо"</h3>
			<span class="price">4320 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/buket2.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Букет "Воздушная акварель"</h3>
			<span class="price">1810 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/buket3.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Букет "Светлые мечты"</h3>
			<span class="price">1910 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/buket4.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Букет "Нежность"</h3>
			<span class="price">1710 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/buket5.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Букет "Цветочный луг"</h3>
			<span class="price">3630 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>


	<div class="title">Гардероб Ваз</div> <!--Блок "Гардероб ваз"-->

	<div class="product-item">
		<img src="images/vaza1.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Ваза "Иберетта-400" d-11.5см, 3.8л</h3>
			<span class="price">900 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

    <div class="product-item">
		<img src="images/vaza2.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Ваза-сувенир "Яблоко" 13х15х18см</h3>
			<span class="price">590 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

    <div class="product-item">
		<img src="images/vaza3.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Ваза "Пять вечеров" черная, матовая, прямая, 0.33л</h3>
			<span class="price">370 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

    <div class="product-item">
		<img src="images/vaza4.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Ваза "Фристайл" 60х12см d-горл-3.5см</h3>
			<span class="price">540 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/vaza5.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Ваза "Виталина" 1.45л</h3><br>
			<span class="price">430 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>


	<div class="title">Плюшевая радость</div> <!--Блок "Плюшевая радость"-->

	<div class="product-item">
		<img src="images/toy1.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Мягкая игрушка "Кошка-подушка" 65см</h3>
			<span class="price">960 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy2.jpg" alt="Изображение недоступно"> 
		<div class="product-list">
			<h3>Мягкая игрушка "Медведь с шарфом" 90см</h3>
			<span class="price">6300 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy3.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Мягкая игрушка "Заяц бежевый в шарфе" 50см</h3>
			<span class="price">1630 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy4.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Мягкая игрушка "Подушка-зверюшка" 30х30см</h3>
			<span class="price">1200 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy5.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Мягкая игрушка "Барбос" 50см</h3>
			<span class="price">890 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>


	<div class="title">Уют в доме</div> <!--Блок "Уют в доме"-->

	<div class="product-item">
		<img src="images/home1.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Кашпо вязаное "Круг" d-10см</h3>
			<span class="price">375 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/home2.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Кашпо "Домик" 13х8х30см</h3>
			<span class="price">450 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/home3.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Кашпо вязаное "Круг" d-10см</h3>
			<span class="price">375 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/home4.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Металлическое кашпо</h3>
			<span class="price">360 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/home5.jpg" alt="Изображение недоступно">
		<div class="product-list">
			<h3>Кашпо "Сердце" 20х20х9см</h3>
			<span class="price">370 Руб.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="poloska">
	</div><br>

	<div class="footer"> <!--Подвал-->
		<div class="infofooter">Адрес компании: Челябинская область, г. Миасс, проспект Автозаводцев, 18а<br><br>Работаем круглосуточно<br><br>Телефон: +7 (951) 487 01 93<br><br>
		<div class="social"> <!--Ссылки на соцсети-->
		<a class="vk" href="https://vk.com/alexandrafloristics"><img class="vk" src="images/vk-logo.png" width="55" alt="Изображение недоступно"></a>
		<a class="ok" href=""><img class="ok" src="images/ok-logo.png" width="55" alt="Изображение недоступно"></a></div><br>
		<div class="menu1"> <!--Продублированное меню-->
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
		</div><br><br>
	</div>


</body>
</html>