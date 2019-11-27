<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Купить цветной дым в Нижнем Новгороде</title>
	<meta name="description" content="Купить цветной дым в Нижнем Новгороде. Приобрести дымовые шашки , факелы для фотосессии">
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
  		<a href="holiday_sets.php">Праздничные наборы</a>
  	</div>

  	<div class="colored_smoke">
  		<a href class="activ" ="colored_smoke.php">Цветной дым</a>
  	</div>
  	<div class="related_products">
  		<a href="related_products.php">Сопутствующие товары</a>
  	</div>
</div>


	<?php
   include "conn_cat_colored_smoke.php";
?>




	<?php
include "footer.php";
?>
</body>