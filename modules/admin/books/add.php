<?php
$res_authors = q("
	SELECT *
	FROM `books_author`
	ORDER BY `name` ASC
");
	if (isset($_POST['title'], $_POST['author'], $_POST['price'], $_POST['description'], $_POST['submit'])) {

	$errors = [];
	if(empty($_POST['author'])) {
		$errors['author'] = 'Вы не выбрали автора';
	}
	if(empty($_POST['title'])) {
		$errors['title'] = 'Вы не заполнили название книги';
	}
	if(empty($_POST['description'])) {
		$errors['description'] = 'Вы не заполнили описание книги';
	}
	if(empty($_POST['price'])) {
		$errors['price'] = 'Вы не заполнили цену книги';
	}

		if ($_FILES['file']['error'] != 0) {
			$errors['file'] = 'Ошибка загрузки файла';
		} else {
			if (Uploader::upload($_FILES['file'])) {
				Uploader::resize(200,200, '/uploaded/200x200/');
				$image200x200 = Uploader::$nameResize;
				Uploader::resize(90,110, '/uploaded/90x110/');
				$image90x110 = Uploader::$nameResize;
			} else {
				$errors['file'] = Uploader::$error;
			}
		}

		if(!count($errors)) {
		DB::_()->query("
			INSERT INTO `books` SET
			`id` = null,
			`title`            = '".es($_POST['title'])."',
			`description`      = '".es($_POST['description'])."',
			`price`            = '".(float)$_POST['price']."',
			`img`              = '".$image200x200."',
			`img_small`        = '".$image90x110."',
			`meta-title`       = '".es($_POST['title'])."',
			`meta-desckription` = '".es($_POST['title'])."',
			`meta-keywords`    = '".es($_POST['title'])."'
		");
		$id_book = DB::_()->insert_id;

		foreach($_POST['author'] as $k => $v){
			q("
				INSERT INTO `books2books_author` SET 
				`id_book` = '".(int)$id_book."',
				`id_author` = '".(int)$_POST['author'][$k]."'
			");
		}

		$_SESSION['info'] = 'Книга успешно добавлена!';
		header('Location: /admin/books');
		exit();
	}
}
