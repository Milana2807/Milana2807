<?php
//Если форма регистрации отправлена
if (!empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['confirm'])) {
	// Если пароль и подтверждение совпадают
	if ($_POST['password'] == $_POST['confirm']) {
		// Пишем логин и пароль из формы в переменные для удобства работы:
		$login = $_POST['login'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$password = $_POST['password'];
		// Пробуем получить юзера с таким логином
		$query = "SELECT * FROM users WHERE login='$login'";
		$user = mysqli_fetch_assoc(mysqli_query($link, $query));
		// Если юзера с таким логином нет
		if (empty($user)) {
		// Формируем и отсылаем SQL запрос:
		$query = "INSERT INTO users SET login='$login', password='$password'";
		mysqli_query($link, $query);
		// Пишем в сессию пометку об авторизации:
		$_SESSION['auth'] = true;
		// Получаем id вставленной записи и пишем его в сессию
		$id = mysqli_insert_id($link);
		$_SESSION['id'] = $id;
	} else {
		// Логин занят, выведем сообщение об этом
	}
} else {
	// Пароль и подтверждение НЕ совпадают - выведем сообщение
}
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="стиль.css">
	<title>Регистрация/Вход</title>
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

	<form action="php/reg.php" method="post"> <!--Форма для регистрации пользователя-->
		<div class="container">
			<h1>Регистрация</h1><br><br>

			<label for="login"><b>Логин</b></label><br>
			<input type="text" placeholder="Введите логин" name="login" required><br>


			<label for="email"><b>Адрес эл.почты</b></label><br>
			<input type="text" placeholder="Введите адрес эл.почты" name="mail" required><br>


			<label for="tel"><b>Телефон</b></label><br>
			<input type="text" placeholder="Введите номер телефона" name="phone" required><br>


			<label for="psw"><b>Пароль</b></label><br>
			<input type="password" placeholder="Введите пароль" name="pass" required><br>

			<label for="psw-repeat"><b>Подтверждение пароля</b></label><br>
			<input type="password" placeholder="Повторите пароль" name="repass" required><br>

			<button type="submit" class="registerbtn">Зарегистрироваться</button>
		</div>
	</form>
</body>
</html>
