<?php
session_start();

if (isset($_SESSION['cart_list'])) {
	echo "Корзина: " . count($_SESSION['cart_list']) . " курса";
}

require_once "db.php";


$query = "SELECT * FROM products";
$req = mysqli_query($connection, $query);
$data_from_db = [];

while ($result = mysqli_fetch_assoc($req)) {
	$data_from_db[] = $result;
}

# var_dump($data_from_db);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style>
	body {
		font-family: Tahoma, serif;
	}

	h1 {
		text-align: center;
	}

	#center {
		width: 900px;
		margin: 0 auto;
		overflow: hidden;
	}

	.course_item {
		width: 260px;
		float: left;
		background: #424242;
		color: #fff;
		margin: 0 10px;
		padding: 10px ;
	}

	.course_item a {
		display: block;
		color: #424242;
		text-decoration: none;
		text-align: center;
		border: 1px solid #fff;
		padding: 10px 0;
		margin: 0 0 10px 0;
		background: #fff;
	}

	.course_item a:hover {
		background: transparent;
		color: #fff;
	}
</style>

<body>

	<h1>Welcome to our Learning Center</h1>

	<div id="center">

		<?php foreach($data_from_db as $course_item): ?>

		<div class="course_item">
			<h2>
				<?php echo $course_item['title']?>
			</h2>

			<p>
				<?php echo $course_item['description']?>
			</p>

			<p><strong>
				<?php echo $course_item['price']?> гривен
			</strong></p>

			<a href="single.php?id=<?php echo $course_item['id']?>">
				Подробнее
			</a>

			<a href="cart.php?course_id=<?php echo $course_item['id']?>">
				В корзину
			</a>
		</div>
		
		<?php endforeach;?>

	</div>

</body>
</html>