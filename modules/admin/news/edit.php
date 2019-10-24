<?php
$res = q("
    SELECT *
    FROM `news`
    WHERE `id` = '".(int)$_GET['id']."'
    LIMIT 1
");
$cat = q("
	SELECT *
	FROM `news_cat`
");

if (!mysqli_num_rows($res)) {
    $_SESSION['info'] = 'Записей не существует';
    header('Location: /admin/news');
    exit();
}

$row = mysqli_fetch_assoc($res);

if (isset($_POST['category'], $_POST['title'], $_POST['text'], $_POST['submit'])) {
    $errors = array();
    if ($_POST['category'][0] == 'Выберите из списка:') {
        $errors['category']='Вы не выбрали категорию';
    }
    if (empty($_POST['title'])) {
        $errors['title']='Вы не ввели заголовок новости';
    }
    if (empty($_POST['text'])) {
        $errors['text']='Вы не ввели текст (содержание) новости';
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

	if (!count($errors)) {
		$res_id_cat = q("
				SELECT `id`
				FROM `news_cat`
				WHERE `name` = '".es($_POST['category'][0])."'
				LIMIT 1
			");
		$id_cat = $res_id_cat->fetch_assoc();
        q("
            UPDATE `news` SET
            `category`         = '". es($_POST['category'][0]) ."',
            `cat_id`         = '".$id_cat['id']."',
            `title`            = '". es($_POST['title']) ."',
            `text`             = '". es($_POST['text']) ."',
			`date`             = now(),
			`img`              = '".$image."',
            `meta_title`       = '". es($_POST['title']) ."',
            `meta_description` = '". es($_POST['title']) ."',
            `meta_keywords`    = '". es($_POST['title']) ."'
            WHERE `id` = '".(int)$_GET['id']."'
            LIMIT 1
        ");

        $_SESSION['info'] = 'Новость успешно отредактирована!';
        header('Location: /admin/news');
        exit();
    }
}