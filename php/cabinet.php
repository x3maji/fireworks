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
if (!empty($_SESSION['login'])) {
	echo "Добро пожаловать, ",$_SESSION['login'];
	echo "<br> <a href = \"logout.php\"> Выйти </a>";
}


		 ?>
<form class="wrap" action="login.php" method="post">
	<input type="text" name="login" placeholder="Логин" required>
	<br>
	<input type="password" name="password" placeholder="Пароль" required>
	<br>
	<input type="submit" value="Войти">
	<br>
</form>

		</div>




	<?php
include "footer.php";
?>
</body>