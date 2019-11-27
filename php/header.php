<?php session_start();

 ?>
<!-- header -->
	<header>
		<top-header class="wrap">
			<div class="logo"><a href="index.php"><img src="img/logo.png" alt="Nova" title="Nova" /></a></div>
			<div class="top-contact">
				<p>+7(800) 999-99-99</p>
				<a href="#modal" class="button openModal btn-yellow">Заказать звонок</a>
				<div id="modal" class="modal"><div>
					<div class="text" align="center">
						<div id="blok_tel">
							<form action="" method="post" class="form1"> <h3>ЗАКАЗ ОБРАТНОГО ЗВОНКА</br></h3>
								<input type="text" name="tel" class="inputbox" required="Заполните поле" placeholder="Номер телефона с кодом">
								<input type="submit" class="button" name="submit_tel">
							</form>
							<?php if(isset($_POST["submit_tel"])) 
							{
								$email = 'fialka-murom@rambler.ru';
								/* Отправляем email */
								mail($email, "Заказ обратного звонка на сайте ...", "\n
								Посетитель заказал обратный звонок! \n
								Телефон : ".$_POST['tel']."");
								echo 'Заявка принята!';
							}
							?>
						</div>
					</div>
					<a href="#close" title="Закрыть">Закрыть</a>
				</div>
			</div>
			</div>
			<div class="user">
				<div class="profile">
					<img src="img/lk-icon.png" alt="Личный кабинет" title="Личный кабинет" /><br>
					<a href="cabinet.php">Личный кабинет</a>
				</div>
				<div class="basket">
					<img src="img/basket.png" alt="Корзина" title="Корзина" /><br>
					
					<?php 
					
if (!empty($_SESSION['good']))
	$cartCount = count($_SESSION['good']);
else
	$cartCount = 0;
echo "<a href=\"cart.php\">Корзина ($cartCount) </a>";

?>

				
				</div>
			</div>
		</top-header>

		<!-- menu -->
		<nav class="topmenu">
			<div class="wrap">
				<ul class="topmenu-list">
					<li><a href="info.php" class="topmenu-list_item">О компании</a></li>
					<li><a href="fireworks.php" class="topmenu-list_item">Каталог</a></li>
					<li><a href="action.php" class="topmenu-list_item">Акции</a></li>
					<li><a href="shipping and payment.php" class="topmenu-list_item">Доставка и оплата</a></li>
					<li><a href="partners.php" class="topmenu-list_item">Организациям</a></li>
					<li><a href="contacts.php" class="topmenu-list_item">Контакты</a></li>
				</ul>
			</div>
		</nav>
	</header>