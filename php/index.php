<?php 
if (!empty($_POST['goodid'])) {
  $_SESSION['good'][]=$_POST['goodid'];
}
?>



<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Nova - Магазин пиротехники, фейерверков и салютов в Нижнем Новгороде</title>
	<meta name="description" content="Интернет магазин салютов фейерверков и пиротехники в Нижнем Новгороде. Купить петарды и пиротехнические товары">
	<meta name="viewport" content="width=1040">

	<!--CSS here-->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/style.css">

  
</head>
<body>
	<?php
	include('header.php');
	?>

	<!-- top section -->
	<section class="section1 wrap">
		<div class="container">
			<div class="handler"><span class="choosen"></span><span></span><span></span></div>
			<div class="slide show"><img src="img/fire-banner.png"/></div>
			<div class="slide"><a href=""><img src="img/action-1.png"/></a></div>
			<div class="slide"><a href=""><img src="img/action-2.png"/></a></div>
		</div>
		<div class="fire-show">
			<p class="fire-show_head">Организация</br>фейерверк-шоу</p>
			<p class="fire-show_text">Сделайте свой праздник</br>незабываемым</p>
			<a href="fire_show_organization.php" class="btn-yellow">Подробнее</a>
		</div>
	</section>

	<!-- section info-->
	<section class="section2 wrap">
		<div class="b-info">
			<div class="b-info-item col25">
				<div class="info-item__img"><img src="img/salut-icon.png" alt="Фейерверки"></div>
					<a href="fireworks.php"><p>Фейерверки</p></a>
				</div>
				<div class="b-info-item col25">
					<div class="info-item__img"><img src="img/holiday-set-icon2.png" alt="Праздничные наборы"></div>
					<a href="holiday_sets.php"><p>Праздничные<br>наборы</p></a>
				</div>
				<div class="b-info-item col25">
					<div class="info-item__img"><img src="img/colored-smoke-icon2.png" alt="Цветной дым"></div>
					<a href="colored_smoke.php"><p>Цветной дым</p></a>
				</div>
				<div class="b-info-item col25">
					<div class="info-item__img"><img src="img/other-goods-icon.png" alt="Сопутствующие товары"></div>
					<a href="related_products.php"><p>Сопутствующие<br>товары</p></a>
				</div>
			</div>
		</div>
	</section>

	<!-- section goods-->
	<section class="section3">
		<h2>Лучшие предложения</h2>
		<div class="sale-goods wrap">
			<div class="sale-goods-1 goods-wrap">
				<h3 class="sale-goods-name">Балет</h3>
				<h3 class="sale-goods-prise">2205 руб.</h3>
				<h4 class="sale-goods-text">25 залпов | 36 секунд</h4>
				<a href="fireworks.php" class="btn-blue">Подробнее >></a>
			</div>
			<div class="sale-goods-2 goods-wrap">
				<h3 class="sale-goods-name">Петарды</h3>
				<h3 class="sale-goods-prise">350 руб.</h3>
				<h4 class="sale-goods-text">4 петарды</h4>
				<a href="related_products.php" class="btn-blue">Подробнее >></a>
			</div>
			<div class="sale-goods-3 goods-wrap">
				<h3 class="sale-goods-name">Цветной дым</h3>
				<h3 class="sale-goods-prise">430 руб.</h3>
				<h4 class="sale-goods-text">Цвет синий | 60 секунд</h4>
				<a href="colored_smoke.php" class="btn-blue">Подробнее >></a>
			</div>
		</div>
		<a href="fireworks.php" class="btn-white">Перейти в Каталог</a>
	</section>

	<!-- section company-info-->
	<section class="section4 wrap">
		<h2>О Магазине</h2><br>
		<p>Мы рады приветствовать Вас на нашем сайте!</p><br>
		<p>День Рождения, незабываемая Новогодняя ночь, Свадьба или шумный семейный праздник – на оформление этих 
мероприятий придется потратить огромные средства. У Вас есть возможность отлично сэкономить и удивить 
всех присутствующих необычным зрелищем.</p>
		<p>В интернет-магазине «Nova» Вы сможете приобрести продукцию, сделающую Ваш праздник фееричным и безопасным.</p><br>
		<p>В каталоге представлен широкий асортимент пиротехнической продукции на любой вкус:</p><br>
		<p>•Малые, средние, большие и мега-супер-салюты;</p>
		<p>•Дневные фейерверки;</p>
		<p>•Петарды и хлопушки;</p>
		<p>•Вертушки;</p>
		<p>•Римские свечи;</p>
		<p>•Фонтаны;</p>
		<p>•Бенгальские огни.</p>
	</section>

	<!-- section company-info-->
	<section class="section5 wrap">
		<h2 class="title-line"><span>Наши преимущества</span></h2><br>
		<div class="quality-info">
			<div class="quality-info-item col25">
				<div class="info-item__img"><img src="img/quality-1.png"></div><br>
					<p>Широчайший ассортимент<br>товаров</p>
				</div>
				<div class="quality-info-item col25">
					<div class="info-item__img"><img src="img/quality-2.png"></div><br>
					<p>Вся продукция сертифицирована<br>и соответствует международным<br>стандартам</p>
				</div>
				<div class="quality-info-item col25">
					<div class="info-item__img"><img src="img/quality-3.png"></div><br>
					<p>Покупка товаров, не выходя<br>из дома или офиса</p>
				</div>
				<div class="quality-info-item col25">
					<div class="info-item__img"><img src="img/quality-4.png"></div><br>
					<p>Доставка к порогу и всегда<br>вовремя</p>
				</div>
			</div>
		</div>
	</section>

<?php
include "footer.php";
?>

 
</body>

	<!-- script here -->
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/jquery.easing.1.3.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/main.js"></script>
	<script src="js/index.js"></script>
 



</html>