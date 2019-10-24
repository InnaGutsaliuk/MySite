<?php
$res = q("
	SELECT *
	FROM `goods`
	WHERE `id` = '".(int)$_GET['id']."'
	LIMIT 1
");
if(!mysqli_num_rows($res)) {
	$_SESSION['info'] = 'Записи не существует';
	header('Location: /admin/goods');
	exit();
}
$row = mysqli_fetch_assoc($res);
if(isset($_POST['category'], $_POST['title'], $_POST['article'], $_POST['price'], $_POST['description'], $_POST['available'], $_POST['submit'])) {
	$errors = [];
	if($_POST['category'][0] == 'Выберите из списка:') {
		$errors['category'] = 'Вы не выбрали категорию';
	}
	if(empty($_POST['title'])) {
		$errors['title'] = 'Вы не ввели наименование товара';
	}
	if(empty($_POST['article'])) {
		$errors['article'] = 'Вы не ввели артикул';
	}
	if($_POST['available'] == '1' && empty($_POST['price'])) {
		$errors['price'] = 'Вы не ввели цену';
	}
	if(empty($_POST['description'])) {
		$errors['description'] = 'Вы не ввели описание товара';
	}
	if(empty($_POST['available'])) {
		$errors['available'] = 'Вы не отметили наличие товара';
	}
	if($_POST['available'] == '2') {
		$_POST['price'] = 0;
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

	if(isset($errors['file']) && !empty($row['img'])) {
		$name = $row['img'];
		unset($errors['file']);
	}

	if(!count($errors)) {
		q("
			UPDATE `goods` SET
			`category`         = '".es($_POST['category'][0])."',
			`title`            = '".es($_POST['title'])."',
			`article`          = '".(int)$_POST['article']."',
			`available`        = '".(int)$_POST['available']."',
			`description`      = '".es($_POST['description'])."',
			`price`            = '".(float)$_POST['price']."',
			`img`              = '".$image."',
			`meta_title`       = '".es($_POST['title'])."',
			`meta_description` = '".es($_POST['title'])."',
			`meta_keywords`    = '".es($_POST['title'])."'
			WHERE `id` = '".(int)$_GET['id']."'
			LIMIT 1
		");

		$_SESSION['info'] = 'Товар успешно отредактирован!';
		header('Location: /admin/goods');
		exit();
	}
}
