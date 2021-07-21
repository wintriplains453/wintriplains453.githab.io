<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


	$pass = md5($pass."fgfghrrgrekgfht56574");

	$mysql = new mysqli('localhost', 'root', '', 'register-bd');
	
	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
	$user = $result->fetch_assoc();
	if(count($user) == '') {
		echo "Пользователь не найден";
		exit();
	}

	setcookie('user', $user['name'], time() + 3600 * 24, "/");

	$mysql->close();

	header('Location: /')

?>