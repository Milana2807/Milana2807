<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

	<link rel="shortcut icon" href="../image/header_img/logo_icon.png" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="admin.css">

	<title>"Pion" - Вход в Админ панель</title>
</head>
<body>
    
<!--Блок входа-->
<div class="container-area">
	<div class="container-area-inner">
		<form action="admin.php" method="POST" class="personal_area">

			<div class="block_vhod">
  				<h1>Вход в Админ панель</h1>
  			</div>

  			<div class="pole">
				<input type="text" placeholder="Введите логин" id="login" name="login" required>

				<input type="password" placeholder="Введите пароль" id="pass" name="pass" required>
			</div>

			<button type="submit" id="log" name="log" class="welcome">Войти</button>
		</form>
	</div>
</div>

</body>
</html>