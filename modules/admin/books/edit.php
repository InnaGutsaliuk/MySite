<?php
$res = DB::_()->query("
	SELECT *
	FROM `books`
	WHERE `id` = '".(int)$_GET['id']."'
	LIMIT 1
");
if($res->num_rows) {
	$row = $res->fetch_assoc();
	$res->close();
} else {
	$_SESSION['info'] = 'Такой книги нет в базе!';
	header('Location: /admin/books');
	exit();
}
$all_authors = q("
	SELECT *
	FROM `books_author`
	ORDER BY `name` ASC
");
$res_authors = q("
	SELECT `name`
	FROM `books_author`
	LEFT JOIN `books2books_author`
		ON books_author.id = books2books_author.id_author
	WHERE books2books_author.id_book = '".$_GET['id']."'
");

while($row_authors = $res_authors->fetch_assoc()) {
	$book_authors[] = $row_authors['name'];
}
$res_authors->close();

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

	if(isset($errors['file'])) {
		$name = $row['img'];
		$name_small = $row['img_small'];
		unset($errors['file']);
	}
	if(!count($errors)) {
		DB::_()->query("
			UPDATE `books` SET
			`title`            = '".es($_POST['title'])."',
			`description`      = '".es($_POST['description'])."',
			`price`            = '".(float)$_POST['price']."',
			`img`              = '".$name."',
			`img_small`        = '".$name_small."',
			`meta-title`       = '".es($_POST['title'])."',
			`meta-desckription` = '".es($_POST['title'])."',
			`meta-keywords`    = '".es($_POST['title'])."'
			WHERE `id` = '".(int)$_GET['id']."'
		");
		$res_id = q("
			SELECT `id`
			FROM `books`
			WHERE `title` = '".es($_POST['title'])."'
			LIMIT 1
		");
		$row_id = $res_id->fetch_assoc();
		$res_id->close();
		$id_book = $row_id['id'];
		q("
			DELETE FROM `books2books_author`
			WHERE `id_book` = '".$id_book."'
		");
		foreach($_POST['author'] as $k => $v){
			q("
				INSERT INTO `books2books_author` SET 
				`id_book` = '".$id_book."',
				`id_author` = '".(int)$_POST['author'][$k]."'
			");
		}
		$_SESSION['info'] = 'Книга успешно отредактирована!';
		header('Location: /admin/books');
		exit();
	}
}
