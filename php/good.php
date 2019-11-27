<?php  
session_start();
if (!empty($_POST['goodid'])) {
	$_SESSION['good'][]=$_POST['goodid'];
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

		<?php 

		//Подключение к БД
$mysqli = mysqli_connect('localhost','uskov_proj5_2018','U38ygamJ','uskov_proj5_2018');

$res = mysqli_query($mysqli, "SELECT * FROM `goods` WHERE `id`= {$_GET['id']}");

$row = mysqli_fetch_assoc($res);
echo "<div class=\"item\">
			<img src=\"{$row['img_file']}\"/>
			<div class=\"description_price\">
			<h3>{$row['title']}</h3>
			<h4>{$row['description']}</h4>
			<h3>{$row['price']}<p>Pуб.<p></h3>
			<form class=\"item\" method=\"post\">
				<input type=\"hidden\" name=\"goodid\" value = \"{$row['id']}\">
				<input class=\"btn-blue\" type=\"submit\" value=\"Заказать\">
			</form>			
			
			</div>";
// Обработка формы
if (!empty($_POST['text']) && !empty($_SESSION['user_id'])) {
		$SQLins = "INSERT INTO `comments`(`user_id`, `good_id`, `text`) VALUES ({$_SESSION['user_id']},{$_GET['id']},'{$_POST['text']}')";
		mysqli_query($mysqli, $SQLins);
	}

//вывод комментариев
$res = mysqli_query($mysqli, "SELECT * FROM `comments`,`users` WHERE `user_id`=`users`.`id` AND `good_id`={$_GET['id']}");

while ($row = mysqli_fetch_assoc($res)) {
	echo "<div class=\"item\">
			<h1>{$row['name']}</h1>
			<div class=\"description\"> {$row['time']} </div>
			{$row['text']} 
			</div>";
}




if (!empty($_SESSION['name'])) {
 echo "<form method=\"post\">
 <input type=\"text\" name=\"text\">
 <input type=\"submit\" value=\"Отправить\">
 </form>";
}
		 ?>
				
			
		</div>
	</body>

<?php  include('footer.php');?>