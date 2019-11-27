<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Организация салютов и фейерврков на свадьбу и праздники</title>
	<meta name="description" content="Организация салютов и фейерврков на праздник . Заказать проведение пиротехнического шоу на свадьбу, день рождения, торжество в Нижнем Новгороде">
	<meta name="viewport" content="width=1040">

	<!--CSS here-->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
include "header.php";
?>

	<div class="wrap_categories">
  	<div class="fireworks">
  		<a href="fireworks.php">Фейерверки</a>
  	</div>

  	<div class="holiday_sets">
  		<a href class="activ" ="holiday_sets.php">Праздничные наборы</a>
  	</div>

  	<div class="colored_smoke">
  		<a href="colored_smoke.php">Цветной дым</a>
  	</div>
  	<div class="related_products">
  		<a href="related_products.php">Сопутствующие товары</a>
  	</div>
</div>




	<?php
   include "conn_cat_holiday_sets.php";
?>




	<?php
include "footer.php";
?>
</body>