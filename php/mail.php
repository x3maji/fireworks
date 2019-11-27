<?php 


if (isset($_POST['order']) && !empty($_SESSION['good'])) 
{
			//Подключение к БД
	$mysqli = mysqli_connect('localhost','root','','fireworks');

	$strSQL ="SELECT * FROM `goods` WHERE `id`=".current($_SESSION['good']);
	if (count($_SESSION['good']) != 1) 
		foreach (array_slice($_SESSION['good'],1) as $goodid) 
			$strSQL .=" OR `id`=$goodid";

	$res = mysqli_query($mysqli, $strSQL);

$text = "Уважаемый, {$_SESSION['login']}!\n\r Ваш заказ:\n\r ";
	while ($row = mysqli_fetch_assoc($res))
			$text .= "{$row['title']} ({$row['description']}) Цена:{$row['price']} \n\r";
$text .="Принят к обработке.";
}
//echo $text;
$subject="Новый заказ";
$header="Content-type: text/plain; charset=\"windows-1251\"";
$header.="From: Site <site@mail.ru>";
$header.="Subject: $subject";
$header.="Content-type: text/plain; charset=\"windows-1251\"";


	 ?>