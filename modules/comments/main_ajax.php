<?php
if(isset($_POST['login'], $_POST['email'], $_POST['comment'])) {
	$errors = [];
	if(empty($_POST['login'])) {
		$errors['login'] = 'Вы не заполнили поле Имя!';
	} elseif(strlen($_POST['login']) < 3) {
		$errors['login'] = 'Имя должно содержать не менее 3 символов!';
	}
	if(empty($_POST['email'])) {
		$errors['email'] = 'Вы не заполнили поле email!';
	} elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'Вы ввели неверный e-mail!';
	}
	if(empty($_POST['comment'])) {
		$errors['comment'] = 'Вы не ввели свой комментарий!';
	}
	if(!count($errors)) {
		q("
        	INSERT INTO `comments` SET
        	`login` = '".es($_POST['login'])."',
        	`email` = '".es($_POST['email'])."',
        	`comment` = '".es($_POST['comment'])."'
    	");
	}
}
$res = q("
    SELECT *
    FROM `comments`
    ORDER BY `date` DESC
    LIMIT 1
");
