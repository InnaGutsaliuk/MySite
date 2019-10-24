<?php
if(isset($_SESSION['info'])) {
	$info = $_SESSION['info'];
	unset($_SESSION['info']);
}

$cat = q("
	SELECT *
	FROM `news_cat`
	WHERE `id` = '".(int)$_GET['id']."'
");
if ($cat -> num_rows) {
	$row = $cat -> fetch_assoc();
} else {
	$_SESSION['info'] = 'Такой категории нет';
	header('Location: /admin/news/edit_cat');
	exit();
}
if (isset($_POST['name']) && !empty($_POST['name'])) {
	q("
		UPDATE `news_cat` SET
		`name` = '".es($_POST['name'])."'
		WHERE `id` = '".(int)$_GET['id']."'
	");
	$_SESSION['info'] = 'Категория отредактирована!';
	header('Location: /admin/news/category');
	exit();
}
