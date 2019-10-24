<?php
if (isset($_SESSION['user']) && $_SESSION['user']['active'] == 5) {
	$info_admin = 'Приветствуем Вас, администратор '.$_SESSION['user']['login'].' !';
}

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
			} elseif($row['active'] == 2) {
				$info = 'Извините, но вы забанены!';
			} elseif($row['active'] == 3) {
				$info = 'У вас нет прав администратора!';
			}elseif($row['active'] == 5) {
				$_SESSION['user'] = $row;
				$auth_ok = 1;
				$info = 'Вы успешно прошли авторизацию! <br>Добро пожаловать, админ!';
			}
		} else {
			$info = 'Такого пользователя не существует!';
		}
	}
}

