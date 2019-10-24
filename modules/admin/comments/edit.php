<?php
$res = q("
    SELECT *
    FROM `comments`
    WHERE `id` = '".(int)$_GET['id']."'
    LIMIT 1
");

if (!mysqli_num_rows($res)) {
    $_SESSION['info'] = 'Записей не существует';
    header('Location: /admin/comments');
    exit();
}

$row = mysqli_fetch_assoc($res);

if (isset($_POST['login'], $_POST['email'], $_POST['comment'], $_POST['submit'])) {
    $errors = array();
    if (empty($_POST['login'])) {
        $errors['login']='Вы не ввели логин';
    }
    if (empty($_POST['email'])) {
        $errors['email']='Вы не ввели e-mail';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email']='Вы ввели не верный e-mail';
	}
	if (empty($_POST['comment'])) {
		$errors['comment']='Вы не ввели комментарий';
	}

	if (!count($errors)) {
        q("
            UPDATE `comments` SET
            `login`            = '". es($_POST['login']) ."',
            `email`            = '". es($_POST['email']) ."',
            `comment`          = '". es($_POST['comment']) ."',
			`date`             = now()
			WHERE `id` = '".(int)$_GET['id']."'
            LIMIT 1
        ");

        $_SESSION['info'] = 'Комментарий успешно отредактирован!';
        header('Location: /admin/comments');
        exit();
    }
}