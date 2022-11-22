<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="image/header_img/logo_icon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/cms.css">
	<title></title>
</head>
<body>
	<!-- подключение к бд -->
	<?php require "php/sql.php"; ?>

	<!-- верхний блок шапки -->
	<div class="container-header-top">
		<div>
		<div class="header-title">Админ панель</div>
	</div>
		<?php if($_COOKIE['user'] == ''): ?>
		<div class="header-log"><p>Добро пожаловать, </p></div>
		<?php else: ?>
			<div class="header-log"><p>Привет, <b><?=$_COOKIE['user'] ?></b><a href="exit.php" style="margin-left: 20px;">Выйти</a></p></div>
		<?php endif; ?>
	</div>

	<!-- левый блок шапки -->
		<div class="container-header-left">
			<nav class="nav">
				<ul class="knop">
					<a href="glav.php" class ="knop"><img src="image/panel.png" alt=""></a>
				</ul>
				<ul class="knop">
					<a href="ctovar.php" class ="knop"><img src="image/tovar.png" alt=""></a>
				</ul>
				<ul class="knop">
					<a href="klients.php" class ="knop"><img src="image/klient.png" alt=""></a>
				</ul>
				<ul class="knop">
					<a href="czakaz.php" class ="knop"><img src="image/zakaz.png" alt=""></a>
				</ul>
				<ul>
					<a href="glav.php" class="a_nav"><li>Панель состояния</li></a>
				</ul>
				<ul>
					<a href="ctovar.php" class="a_nav"><li>Товары</li></a>
				</ul>
				<ul>
					<a href="klients.php" class="a_nav"><li>Клиенты</li></a>
				</ul>
				<ul>
					<a href="czakaz.php" class="a_nav"><li>Заказы</li></a>
				</ul>
			</nav>
		</div>
</body>
</html>