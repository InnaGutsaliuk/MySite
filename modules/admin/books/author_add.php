<?php
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

	if(!count($errors)) {
		DB::_()->query("
			INSERT INTO `books_author` SET
			`name`            = '".es($_POST['name'])."',
			`biogr`      = '".es($_POST['biogr'])."',
			`img`              = '".$image."',
			`meta_title`       = '".es($_POST['name'])."',
			`meta_description` = '".es($_POST['name'])."',
			`meta_keywords`    = '".es($_POST['name'])."'
		");

		$_SESSION['info'] = 'Автор успешно добавлен!';
		if (isset($_GET['p'])) {
			if($_GET['p'] == 'add') {
				header('Location: /admin/books/add');
				exit();
			}elseif($_GET['p'] == 'edit') {
				header('Location: /admin/books/edit&id='.$_GET['id']);
				exit();
			}
		}
		header('Location: /admin/books/authors');
		exit();
	}
}
