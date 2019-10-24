<?php
$res = DB::_()->query("
	SELECT *
	FROM `books_author`
	WHERE `id` = '".(int)$_GET['id']."'
	LIMIT 1
");
if($res->num_rows) {
	$row = $res->fetch_assoc();
	$res->close();
} else {
	$_SESSION['info'] = 'Такого автора нет в базе!';
	header('Location: /admin/books/authors');
	exit();
}

if (isset($_POST['name'], $_POST['biogr'], $_POST['submit'])) {

	$errors = [];
	if(empty($_POST['name'])) {
		$errors['name'] = 'Вы не заполнили ФИО автора';
	}

	if(empty($_POST['biogr'])) {
		$errors['biogr'] = 'Вы не заполнили биографию автора';
	}

	if ($_FILES['file']['error'] != 0) {
		$errors['file'] = 'Ошибка загрузки файла';
	} else {
		if (Uploader::upload($_FILES['file'])) {
			Uploader::resize(200,200, '/uploaded/200x200/');
			$image = Uploader::$nameResize;
		} else {
			$errors['file'] = Uploader::$error;
		}
	}

	if(isset($errors['file']) && isset($row['img'])) {
		$name = $row['img'];
		unset($errors['file']);
	}
	if(!count($errors)) {
		DB::_()->query("
			UPDATE `books_author` SET
			`name`            = '".es($_POST['name'])."',
			`biogr`      = '".es($_POST['biogr'])."',
			`img`              = '".$image."',
			`meta_title`       = '".es($_POST['name'])."',
			`meta_description` = '".es($_POST['name'])."',
			`meta_keywords`    = '".es($_POST['name'])."'
			WHERE `id` = '".(int)$_GET['id']."'
		");

		$_SESSION['info'] = 'Автор успешно отредактирован!';
		header('Location: /admin/books/authors');
		exit();
	}
}
