<?php 
if (!empty($_POST['name']) && !empty($_POST['password'])) 
{
	include 'connect_fireworks';
	$SQLlogin = "SELECT * FROM `users` WHERE `name` = '{$_POST['name']}'";
	$res = mysqli_query($mysqli, $SQLlogin);
	if (mysqli_num_rows($res) == 1) 
	{
		$row = mysqli_fetch_assoc($res);
		if ($row['password'] == md5($_POST['password'])) {
			session_start();
			$_SESSION['name'] = $row['name'];
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['admin'] =  $row['admin'];
			header("Location: cabinet.php");
			exit;
		}
		else
			echo "не Ок1";
	}
	else
		echo "не Ок2";
}
 ?>