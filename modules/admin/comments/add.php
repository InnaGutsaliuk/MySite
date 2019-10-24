<?php
if(isset($_POST['login'], $_POST['email'], $_POST['comment'], $_POST['submit'])) {
	$errors = [];
	if(empty($_POST['login'])) {
		$errors['login'] = 'Вы не ввели логин';
	}
	if(empty($_POST['email'])) {
		$errors['email'] = 'Вы не ввели заголовок e-mail';
	}
	if(empty($_POST['comment'])) {
		$errors['comment'] = 'Вы не ввели комментарий';
	}

	if(!count($errors)) {
		q("
			INSERT INTO `comments` SET
			`login`   = '".es($_POST['login'])."',
			`email`   = '".es($_POST['email'])."',
			`comment` = '".es($_POST['comment'])."',
			`date`    = now()
		");

		$_SESSION['info'] = 'Комментарий успешно добавлен!';
		header('Location: /admin/comments');
		exit();
	}
}
