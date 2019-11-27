<?php 
session_start();
if (!empty($_POST['delite'])) {
	$key=array_search($_POST['delite'], $_SESSION['good']);
	unset($_SESSION['good'][$key]);
}

include('header.php');
?>




		<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Nova - Магазин пиротехники, фейерверков и салютов в Нижнем Новгороде</title>
	<meta name="description" content="Интернет магазин салютов фейерверков и пиротехники в Нижнем Новгороде. Купить петарды и пиротехнические товары">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--CSS here-->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrap">

		<?php 

		//Подключение к БД
$mysqli = mysqli_connect('localhost','uskov_proj5_2018','U38ygamJ','uskov_proj5_2018');



if (!isset($_GET['ok'])) {


	if (!empty($_SESSION['good'])) 
	{
				//Подключение к БД
		$mysqli = mysqli_connect('localhost','uskov_proj5_2018','U38ygamJ','uskov_proj5_2018');

		$strSQL ="SELECT * FROM `goods` WHERE `id`=".current($_SESSION['good']);
		if (count($_SESSION['cart']) != 1) 
			foreach (array_slice($_SESSION['good'],1) as $goodid) 
				$strSQL .=" OR `id`=$goodid";

		$res = mysqli_query($mysqli, $strSQL);

		while ($row = mysqli_fetch_assoc($res))
				echo "<div class=\"item\">
			        <img src=\"{$row['img_file']}\"/>
					<h1>{$row['title']}</h1>
					<div class=\"descr\"> {$row['description']} </div>
					{$row['price']}
					<form method=\"post\">
					<input type=\"hidden\" name=\"delite\" value = \"{$row['id']}\">
					<input class=\"btn-blue\" type=\"submit\" value=\"Удалить\">
					</form> 
					</div>";


	}
	else
	echo "Ваша корзина пуста!";

	echo "<form method=\"post\" action=\"mail.php\">
					<input type=\"hidden\" name=\"order\" >
					<input type=\"submit\" value=\"Заказать\">
					</form> ";
}
else
echo "<h1> Ваш заказ принят!</h1>";		 

if (isset($_GET['err'])) {
	echo "<h1> Не удалось обработать заказ, попробуйте позднее..</h1>";	
}

		 ?>


		</div>
<?php  include('footer.php');?>