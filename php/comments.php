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
include "header.php";
?>
	<div class="action-wrap">
		<h3>Отзывы наших клиентов</h3>
		<div class="action-profile">
			<img src="img/otz-3.png" alt="" title="" />
			<div class="action-profile_text">
				</br> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</br> Sit tempora animi esse asperiores! </br> Quibusdam facere eaque rem doloremque, iure velit nulla quo?</br> Harum molestias officia magnam nam eius nisi illum!</p>
			</div>
		</div>
		<div class="action-profile">
			<img src="img/otz-1.png" alt="" title="" />
			<div class="action-profile_text">
				</br> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</br> Sit tempora animi esse asperiores! </br> Quibusdam facere eaque rem doloremque, iure velit nulla quo?</br> Harum molestias officia magnam nam eius nisi illum!</p>
			</div>
		</div>
		<div class="action-profile">
			<img src="img/otz-6.png" alt="" title="" />
			<div class="action-profile_text">
				</br> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</br> Sit tempora animi esse asperiores! </br> Quibusdam facere eaque rem doloremque, iure velit nulla quo?</br> Harum molestias officia magnam nam eius nisi illum!</p>
			</div>
		</div>
		<div class="action-profile">
			<img src="img/otz-7.png" alt="" title="" />
			<div class="action-profile_text">
				</br> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</br> Sit tempora animi esse asperiores! </br> Quibusdam facere eaque rem doloremque, iure velit nulla quo?</br> Harum molestias officia magnam nam eius nisi illum!</p>
			</div>
		</div>

	<div class="comment">
		<h3>Написать отзыв</h3>
		<form action="" method="post"><!--Создаем форму-->
			<input type="text" placeholder="Имя" name="name" /></br></br><!--Создаем строку для ввода имени-->
			<input type="email" placeholder="E-mail" name="email" /></br></br><!--Создаем строку для ввода e-mail (пригодится для ответа)-->
			<textarea placeholder="Сообщение" name="message" rows="10" cols="45"></textarea></br></br><!--Поле для ввода сообщения-->
			<input class=" btn-yellow" type="submit" value="Отправить" /></br></br><!--Кнопка отправить-->
		</form>
	</div>
</div>

<?php
include "footer.php";
?>
</body>