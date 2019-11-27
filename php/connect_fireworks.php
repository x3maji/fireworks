<?php
/*подключение к базе данных*/

$mysqli = mysqli_connect('localhost','test','test','test');

/*указываем кодировку*/
 mysqli_set_charset($mysqli,"utf-8");
/*обработка ошибки подключения*/
if (mysqli_connect_errno($mysqli)) {
	echo "Не удалось подключиться  к MySQL: " . mysqli_connect_error();
}
/*запрос к базе данных*/
$res = mysqli_query($mysqli, 'SELECT * FROM `goods`');
 

  		/*обработка результатов запроса*/
  		while ($row = mysqli_fetch_assoc($res)) 
  		{
  		echo "<div class=\"catalog_goods\">
  		<img src=\"{$row['img_file']}\"/>
  		<div class=\"description_price\">
				<h3>{$row['title']}</h3>				
				<h4>{$row['description']}</h4>
				
				<h3>{$row['price']}<p>Pуб.<p></h3>
				<a href=\"good.php?id={$row['id']}\"class=\"btn-blue\">Подробнее</a>
				</div>
				<form method=\"post\">
				<input type=\"hidden\" name=\"goodid\" value = \"{$row['id']}\">		
				</form>
				

			</div>";
		}
		// Обработка формы
if (!empty($_POST['text']) && !empty($_SESSION['user_id'])) {
		$SQLins = "INSERT INTO `comments`(`user_id`, `good_id`, `text`) VALUES ({$_SESSION['user_id']},{$_GET['id']},'{$_POST['text']}')";
		mysqli_query($mysqli, $SQLins);
	}
	//вывод комментариев
$res = mysqli_query($mysqli, "SELECT * FROM `comments`,`users` WHERE `user_id`=`users`.`id` AND `good_id`={$_GET['id']}");

while ($row = mysqli_fetch_assoc($res)) {
	echo "<div class=\"item\">
			<h1>{$row['login']}</h1>
			<div class=\"descr\"> {$row['time']} </div>
			{$row['text']} 
			</div>";
}
if (!empty($_SESSION['login'])) {
 echo "<form method=\"post\">
 <input type=\"text\" name=\"text\">
 <input type=\"submit\" value=\"Отправить\">
 </form>";
}

  		
?>
