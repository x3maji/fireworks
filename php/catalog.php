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
  <div class="wrap_categories">
  	<div class="fireworks">
  		<a href="fireworks.php">Фейерверки</a>
  	</div>

  	<div class="holiday_sets">
  		<a href="holiday_sets.php">Праздничные наборы</a>
  	</div>

  	<div class="colored_smoke">
  		<a href="colored_smoke.php">Цветной дым</a>
  	</div>
  	<div class="related_products">
  		<a href="related_products.php">Сопутствующие товары</a>
  	</div>
</div>

  	<?php
  		include "connect_fireworks.php";
      
?>
  		




<?php
include "footer.php";
?>
</body>