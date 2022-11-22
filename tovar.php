<?php
session_start();

require_once "learning_center/db.php";

$query = "SELECT * FROM products";
$req = mysqli_query($connection, $query);
$data_from_db = [];

while ($result = mysqli_fetch_assoc($req)) {
    $data_from_db[] = $result;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="стиль.css">
	<title>Товары</title>
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

	<div class="titletovar">Товары</div> <!--Заголовок "Товары"-->
	<div class="titletovar1">Готовые букеты</div> <!--Блок "Готовые букеты"-->
	
	<div class="alltovar">
	<?php foreach($data_from_db as $course_item): ?>
	<div class="product-item">
		<img src="images/<?=$course_item['img']?>">
		<div class="product-list">
			<h3><?=$course_item['title']?></h3>
			<span class="price"><?=$course_item['price']?> ₽</span>
			
			<?php if($_COOKIE['user'] == ''): ?>
				<button type="submit" style="border: none;"><a href="lich.php" class="button" >В корзину</a></button>
                                    <?php else: ?>
                                        <form action="learning_center/korz.php" method="post" style="background-color: white;">

                                            <input type="hidden" name="log" value="<?=$_COOKIE['user'] ?>">

                                            <input type="hidden" name="id" value="<?=$course_item['id'] ?>">

                                            <input type="hidden" name="title" value="<?=$course_item['title']?>">

                                            <input type="hidden" name="img" value="<?=$course_item['img'] ?>">

                                            <input type="hidden" name="price" value="<?=$course_item['price']?>">

                                            <button type="submit" style="border: none;"><a class="button" >В корзину</a></button>
                                        </form>
                                    <?php endif; ?>
		</div>
	</div>
	<?php endforeach;?>

	<div class="product-item">
		<img src="images/buket10.jpg">
		<div class="product-list">
			<h3>Букет "Доброе утро"</h3>
			<span class="price">2580 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/buket11.jpg">
		<div class="product-list">
			<h3>Букет "Симфония счастья"</h3>
			<span class="price">3580 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/alstromeria.jpg">
		<div class="product-list">
			<h3>Альстромерия микс 51шт</h3>
			<span class="price">6560 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>

	<div class="product-item">
		<img src="images/buket5.jpg">
		<div class="product-list">
			<h3>Букет "Цветочный луг"</h3>
			<span class="price">3630 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/buket12.jpg">
		<div class="product-list">
			<h3>Букет "Милашка"</h3>
			<span class="price">2180 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/buket2.jpg">
		<div class="product-list">
			<h3>Букет "Воздушная акварель"</h3>
			<span class="price">1810 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/rosemix2.jpg">
		<div class="product-list">
			<h3>Роза красная 50см, 9шт</h3>
			<span class="price">1820 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/hrizantema.jpg">
		<div class="product-list">
			<h3>Хризантема кустовая 9шт</h3>
			<span class="price">1390 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>

	<div class="product-item">
		<img src="images/buket13.jpg">
		<div class="product-list">
			<h3>Композиция "Иноземка"</h3>
			<span class="price">5600 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/buket1.jpg">
		<div class="product-list">
			<h3>Букет "Ванильное небо"</h3>
			<span class="price">4320 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/buket14.jpg">
		<div class="product-list">
			<h3>Букет "Эсмиральда</h3>
			<span class="price">1580 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/buket15.jpg">
		<div class="product-list">
			<h3>Букет "Ягодный блюз"</h3>
			<span class="price">3180 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/gerberamix.jpg">
		<div class="product-list">
			<h3>Гербера микс 9шт</h3>
			<span class="price">1910 ₽.</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>


	<div class="product-item">
		<img src="images/buket4.jpg">
		<div class="product-list">
			<h3>Букет "Нежность"</h3>
			<span class="price">1710 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/rosemix.jpg">
		<div class="product-list">
			<h3>Роза Россия микс 51шт</h3>
			<span class="price">6152 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	</div>

	<div class="titletovar1">Срезанные цветы</div> <!--Блок "Срезанные цветы"-->

	<div class="alltovar">
	<div class="product-item">
		<img src="images/srezka1.jpg">
		<div class="product-list">
			<h3>Хлопок крашеный 1шт</h3>
			<span class="price">50 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka2.jpg">
		<div class="product-list">
			<h3>Тысячелистник крашеный</h3>
			<span class="price">22 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka3.jpg">
		<div class="product-list">
			<h3>Хризантема "Анастасия"</h3>
			<span class="price">280 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka4.jpg">
		<div class="product-list">
			<h3>Лагурус крашеный</h3>
			<span class="price">250 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka5.jpg">
		<div class="product-list">
			<h3>Протея мини</h3>
			<span class="price">320 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>

	<div class="product-item">
		<img src="images/srezka6.jpg">
		<div class="product-list">
			<h3>Роза цветная микс</h3>
			<span class="price">180 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka7.jpg">
		<div class="product-list">
			<h3>Гвоздика кустовая</h3>
			<span class="price">150 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka8.jpg">
		<div class="product-list">
			<h3>Кортадерия</h3>
			<span class="price">360 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka9.jpg">
		<div class="product-list">
			<h3>Хамелациум</h3>
			<span class="price">220 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka10.jpg">
		<div class="product-list">
			<h3>Маттиола</h3>
			<span class="price">210 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>

	<div class="product-item">
		<img src="images/srezka11.jpg">
		<div class="product-list">
			<h3>Гортензия</h3>
			<span class="price">490 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka12.jpg">
		<div class="product-list">
			<h3>Лилия цветная</h3>
			<span class="price">460 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka13.jpg">
		<div class="product-list">
			<h3>Роза красная 80см</h3>
			<span class="price">260 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka14.jpg">
		<div class="product-list">
			<h3>Роза белая 60см</h3>
			<span class="price">200 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka15.jpg">
		<div class="product-list">
			<h3>Роза розовая 60см</h3>
			<span class="price">200 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>

	<div class="product-item">
		<img src="images/srezka16.jpg">
		<div class="product-list">
			<h3>Гвоздика цветная</h3>
			<span class="price">100 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka17.jpg">
		<div class="product-list">
			<h3>Ирис</h3>
			<span class="price">100 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka18.jpg">
		<div class="product-list">
			<h3>Альстромерия 80см</h3>
			<span class="price">160 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka19.jpg">
		<div class="product-list">
			<h3>Гиперикум</h3>
			<span class="price">150 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/srezka20.jpeg">
		<div class="product-list">
			<h3>Бруния серая</h3>
			<span class="price">200 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	</div>

	<div class="titletovar1">Мягкие игрушки</div> <!--Блок "Мягкие игрушки"-->
	
	<div class="alltovar">
	<div class="product-item">
		<img src="images/toy6.jpg">
		<div class="product-list">
			<h3>Мягкая игрушка "Медведушка"</h3>
			<span class="price">570 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy7.jpg">
		<div class="product-list">
			<h3>Мягкая игрушка "Заяц в платье" 25см</h3>
			<span class="price">640 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy4.jpg">
		<div class="product-list">
			<h3>Мягкая игрушка "Подушка-зверюшка" 30х30см</h3>
			<span class="price">1200 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy8.jpg">
		<div class="product-list">
			<h3>Мягкая игрушка "Уточка с сердцем" 20см</h3>
			<span class="price">470 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy2.jpg">
		<div class="product-list">
			<h3>Мягкая игрушка "Медведь с шарфом" 90см</h3>
			<span class="price">6300 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>

	<div class="product-item">
		<img src="images/toy9.jpg">
		<div class="product-list">
			<h3>Мягкая игрушка-магнит "Люблю"</h3>
			<span class="price">150 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy5.jpg">
		<div class="product-list">
			<h3>Мягкая игрушка "Барбос" 50см</h3>
			<span class="price">890 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy10.jpg">
		<div class="product-list">
			<h3>Мягкая игрушка "Единорог балерина" 30см</h3>
			<span class="price">890 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy11.jpg">
		<div class="product-list">
			<h3>Мягкая игрушка "Мишка лежебока" 25см</h3>
			<span class="price">815 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy3.jpg">
		<div class="product-list">
			<h3>Мягкая игрушка "Заяц бежевый в шарфе" 50см</h3>
			<span class="price">1630 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>

	<div class="product-item">
		<img src="images/toy1.jpg">
		<div class="product-list">
			<h3>Мягкая игрушка "Кошка-подушка" 65см</h3>
			<span class="price">960 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy12.jpg">
		<div class="product-list">
			<h3>Мягкая игрушка "Единорог с сердцем" 28см</h3>
			<span class="price">960 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/toy13.jpg">
		<div class="product-list">
			<h3>Мягкая игрушка "Басик Baby" 20см</h3>
			<span class="price">2100 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	</div>

	<div class="titletovar1">Шары, свечи в торт</div> <!--Блок "Шары, свечи в торт"-->
	
	<div class="alltovar">
	<div class="product-item">
		<img src="images/ball1.jpg">
		<div class="product-list">
			<h3>Шар фольгированный "Сердце" 91см</h3>
			<span class="price">360 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/ball2.jpg">
		<div class="product-list">
			<h3>Набор свечей "Блеск" 10шт, 6см</h3>
			<span class="price">110 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

		<div class="product-item">
		<img src="images/ball3.jpg">
		<div class="product-list">
			<h3>Набор свечей 12шт, 8см, микс</h3>
			<span class="price">160 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

		<div class="product-item">
		<img src="images/ball4.jpg">
		<div class="product-list">
			<h3>Набор свечей 14.5см 12шт, микс</h3>
			<span class="price">150 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

		<div class="product-item">
		<img src="images/ball5.jpg">
		<div class="product-list">
			<h3>Шар фольгированный "Бабочка-радуга" 79см</h3>
			<span class="price">390 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>

		<div class="product-item">
		<img src="images/ball6.jpg">
		<div class="product-list">
			<h3>Шар фольгированный "Пони Искорка" 86см</h3>
			<span class="price">465 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

		<div class="product-item">
		<img src="images/ball7.jpg">
		<div class="product-list">
			<h3>Шар фольгированный "Экскаватор" 80см</h3>
			<span class="price">465 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

		<div class="product-item">
		<img src="images/ball8.jpg">
		<div class="product-list">
			<h3>Шар фольгированный "Бульдог" 84см</h3>
			<span class="price">465 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

		<div class="product-item">
		<img src="images/ball9.jpg">
		<div class="product-list">
			<h3>Шар фольгированный "Робот-поезд" 74см</h3>
			<span class="price">535 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

		<div class="product-item">
		<img src="images/ball10.jpg">
		<div class="product-list">
			<h3>Шар фольгированный "Сердце с цветами" 46см</h3>
			<span class="price">240 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>

		<div class="product-item">
		<img src="images/ball11.jpg">
		<div class="product-list">
			<h3>Шар фольгированный "Холодное сердце" 46см</h3>
			<span class="price">370 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

		<div class="product-item">
		<img src="images/ball12.jpg">
		<div class="product-list">
			<h3>Набор шаров фольгированных "Сердце"</h3>
			<span class="price">175 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

		<div class="product-item">
		<img src="images/ball13.jpg">
		<div class="product-list">
			<h3>Свечи в торт "Неон" 12шт, высокие</h3>
			<span class="price">80 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/ball14.jpg">
		<div class="product-list">
			<h3>Свечи в торт "Вечеринка" 6шт, высокие, золотой металлик</h3>
			<span class="price">170 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/ball15.jpg">
		<div class="product-list">
			<h3>Свечи в торт "Цифра с подарком"</h3>
			<span class="price">70 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	</div>

	<div class="titletovar1">Открытки</div> <!--Блок "Открытки"-->
	
	<div class="alltovar">
	<div class="product-item">
		<img src="images/card1.jpg">
		<div class="product-list">
			<h3>Открытка с деревянным декором 10х15см</h3>
			<span class="price">130 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/card2.jpg">
		<div class="product-list">
			<h3>Набор шоколадок 12шт, 18х14х1.5см</h3>
			<span class="price">410 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/card3.jpg">
		<div class="product-list">
			<h3>Открытка 4 шоколадки 10х15х0.5см</h3>
			<span class="price">140 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/card4.jpg">
		<div class="product-list">
			<h3>Открытка праздничная букетная мини</h3>
			<span class="price">15 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/card5.jpg">
		<div class="product-list">
			<h3>Открытка праздничная "С Днем Свадьбы"</h3>
			<span class="price">40 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>

	<div class="product-item">
		<img src="images/card6.jpg">
		<div class="product-list">
			<h3>Открытка поздравительная "Поздравляю!" 10х15см</h3>
			<span class="price">40 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	</div>

	<div class="titletovar1">Вазы</div> <!--Блок "Вазы"-->
	
	<div class="alltovar">
	<div class="product-item">
		<img src="images/vaza5.jpg">
		<div class="product-list">
			<h3>Ваза "Виталина" 1.45л</h3><br>
			<span class="price">430 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/vaza6.jpg">
		<div class="product-list">
			<h3>Ваза "Мирабелла" 3.15л</h3><br>
			<span class="price">870 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/vaza7.jpg">
		<div class="product-list">
			<h3>Ваза "Трубка-200" 19х70см</h3><br>
			<span class="price">3080 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/vaza2.jpg">
		<div class="product-list">
			<h3>Ваза-сувенир "Яблоко"</h3><br>
			<span class="price">590 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

    <div class="product-item">
		<img src="images/vaza3.jpg">
		<div class="product-list">
			<h3>Ваза "Пять вечеров" 0.33л</h3><br>
			<span class="price">370 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>

	 <div class="product-item">
		<img src="images/vaza8.jpg">
		<div class="product-list">
			<h3>Ваза "Роскошное серебро" 8х11х26см, прозрачная</h3>
			<span class="price">980 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/vaza1.jpg">
		<div class="product-list">
			<h3>Ваза "Иберетта-400" d-11.5см, 3.8л</h3>
			<span class="price">900 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/vaza9.jpg">
		<div class="product-list">
			<h3>Ваза "Шаровая" d-13.5см, 2.5л</h3>
			<span class="price">550 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	 <div class="product-item">
		<img src="images/vaza4.jpg">
		<div class="product-list">
			<h3>Ваза "Фристайл" 60х12см d-горл-3.5см</h3>
			<span class="price">540 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	 <div class="product-item">
		<img src="images/vaza10.jpg">
		<div class="product-list">
			<h3>Ваза "Маргарита" 26х9.5см 1.28л</h3>
			<span class="price">350 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	</div>

	<div class="titletovar1">Корзины, ящики, кашпо декоративные</div> <!--Блок "Корзины, ящики, кашпо декоративные"-->
	
	<div class="alltovar">
	<div class="product-item">
		<img src="images/home2.jpg">
		<div class="product-list">
			<h3>Кашпо "Домик" 13х8х30см</h3>
			<span class="price">450 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/home6.jpg">
		<div class="product-list">
			<h3>Ящик большой 25х13х35см</h3>
			<span class="price">525 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/home1.jpg">
		<div class="product-list">
			<h3>Кашпо вязаное "Круг" d-10см</h3>
			<span class="price">375 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/home7.jpg">
		<div class="product-list">
			<h3>Корзина "Ива" 32х24х8см</h3>
			<span class="price">450 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/home4.jpg">
		<div class="product-list">
			<h3>Металлическое кашпо</h3>
			<span class="price">360 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>

	<div class="product-item">
		<img src="images/home8.jpg">
		<div class="product-list">
			<h3>Кашпо "Лайт" 24х13х9см</h3>
			<span class="price">290 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/home3.jpg">
		<div class="product-list">
			<h3>Кашпо вязаное "Круг" d-10см</h3>
			<span class="price">375 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/home9.jpg">
		<div class="product-list">
			<h3>Корзина "Бамбук" 19х19х9см</h3>
			<span class="price">200 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/home5.jpg">
		<div class="product-list">
			<h3>Кашпо "Сердце" 20х20х9см</h3>
			<span class="price">370 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/home10.jpg">
		<div class="product-list">
			<h3>Кашпо "Единорог" 16х9х18см</h3>
			<span class="price">420 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div><br>

	<div class="product-item">
		<img src="images/home11.jpg">
		<div class="product-list">
			<h3>Корзина "Ива" 26х20х11см</h3>
			<span class="price">850 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	<div class="product-item">
		<img src="images/home12.jpg">
		<div class="product-list">
			<h3>Ящик реечный 23.5х11х11см</h3>
			<span class="price">180 ₽</span>
			<a href="" class="button">В корзину</a>
		</div>
	</div>

	</div>
	
</body>
</html>