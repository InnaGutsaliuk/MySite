<?php
if (isset($_POST['login'], $_POST['password'], $_POST['submit'])) {
	$errors = [];
	if(empty($_POST['login'])) {
		$errors['login'] = 'Вы не заполнили поле Логин!';
	}
	if(empty($_POST['password'])) {
		$errors['password'] = 'Вы не заполнили поле Пароль!';
	}

	if(!count($errors)) {
		$res = q("
        	SELECT *
        	FROM `users`
        	WHERE `login`    = '".es($_POST['login'])."'
        	AND   `password` = '".es(myHash($_POST['password']))."'
        	LIMIT 1
    	");
		if(mysqli_num_rows($res)) {
			$row = mysqli_fetch_assoc($res);
			if($row['active'] == 1) {
				$info = 'Вы не прошли активацию через e-mail';
			} elseif($row['active'] == 3) {
				$info = 'Извините, но вы забанены!';
			} else {
				$_SESSION['user'] = $row;
				$auth_ok = 1;
				$info = 'Вы успешно прошли авторизацию! <br>Добро пожаловать!';
				if(isset($_POST['auto_auth']) && ($_POST['auto_auth'] = 'auto_auth')) {
					q("
						UPDATE `users` SET
						`ip`         = '".$_SERVER['REMOTE_ADDR']."',
						`user_agent` = '".$_SERVER['HTTP_USER_AGENT']."',
						`hash`       = '".myHash($_SESSION['user']['id'].$_SESSION['user']['hash'])."'
						WHERE `id` = '".$_SESSION['user']['id']."'
					");
					setcookie('hash', myHash($_SESSION['user']['id'].$_SESSION['user']['hash']), time() + (60 * 60 * 24 * 30), '/');
					$_COOKIE['hash'] = myHash($_SESSION['user']['id'].$_SESSION['user']['hash']);
					setcookie('id', $_SESSION['user']['id'], time() + (60 * 60 * 24 * 30), '/');

					$_COOKIE['id'] = $_SESSION['user']['id'];
					$info = 'Вы успешно прошли авторизацию и... <br>МЫ ВАС ЗАПОМНИЛИ! <br>Добро пожаловать!';
				}
			}
		} else {
			$info = 'Такого пользователя не существует!';
		}
	}
}
