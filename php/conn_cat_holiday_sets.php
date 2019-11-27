<?php
/*подключение к базе данных*/

$mysqli = mysqli_connect('localhost','uskov_proj5_2018','U38ygamJ','uskov_proj5_2018');

/*указываем кодировку*/
 mysqli_set_charset($mysqli,"utf-8");
/*обработка ошибки подключения*/
if (mysqli_connect_errno($mysqli)) {
	echo "Не удалось подключиться  к MySQL: " . mysqli_connect_error();
}
/*запрос к базе данных*/
$res = mysqli_query($mysqli, 'SELECT * FROM `goods` WHERE `id_goods`=2');
 

  		/*обработка результатов запроса*/
  		while ($row = mysqli_fetch_assoc($res)) 
  		{
  		echo "<div class=\"wrap catalog_goods\">
  		<img src=\"{$row['img_file']}\"/>
  		<div class=\"description_price\">
				<h3>{$row['title']}</h3>				
				<h4>{$row['description']}</h4>
				
				<h3>{$row['price']}Pуб.</h3>
				<a href=\"good.php?id={$row['id']}\"class=\"btn-blue\">Подробнее</a>
				</div>
				<form method=\"post\">
				<input type=\"hidden\" name=\"goodid\" value = \"{$row['id']}\">		
				</form>
				

			</div>";
		}

  		
?>
