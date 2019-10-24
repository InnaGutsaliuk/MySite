<?php
$cat = q("
	SELECT *
	FROM `news_cat`
");

if(isset($_POST['category'], $_POST['title'], $_POST['text'], $_POST['submit'])) {
	$errors = [];
	if($_POST['category'][0] == 'Выберите из списка:') {
		$errors['category'] = 'Вы не выбрали категорию';
	}
	echo $_POST['category'][0];
	if(empty($_POST['title'])) {
		$errors['title'] = 'Вы не ввели заголовок новости';
	}
	if(empty($_POST['text'])) {
		$errors['text'] = 'Вы не ввели текст (содержание) новости';
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
		$res_id_cat = q("
			SELECT `id`
			FROM `news_cat`
			WHERE `name` = '".es($_POST['category'][0])."'
			LIMIT 1
		");
		$id_cat = $res_id_cat->fetch_assoc();
		q("
			INSERT INTO `news` SET
			`category`         = '".es($_POST['category'][0])."',
			`cat_id`         = '".$id_cat['id']."',
			`title`            = '".es($_POST['title'])."',
			`text`             = '".es($_POST['text'])."',
			`img`              = '".$image."',
			`meta_title`       = '".es($_POST['title'])."',
			`meta_description` = '".es($_POST['title'])."',
			`meta_keywords`    = '".es($_POST['title'])."'
		");

		$_SESSION['info'] = 'Новость успешно добавлена!';
		header('Location: /admin/news');
		exit();
	}
}
