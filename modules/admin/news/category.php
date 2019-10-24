<?php
if(isset($_SESSION['info'])) {
	$info = $_SESSION['info'];
	unset($_SESSION['info']);
}

$cat = q("
	SELECT *
	FROM `news_cat`
");

if(isset($_POST['cat'], $_POST['submit'])) {
	if(!empty($_POST['cat'])) {
		if(!preg_match('#[а-яА-Яё]#ui', $_POST['cat'])) {
			$_SESSION['info'] = 'Название категории может состоять только из русских символов!';
			header('Location: /admin/news/category');
			exit();
		}
		else {
			q("
			INSERT  INTO `news_cat` SET 
			`name` = '".es($_POST['cat'])."'
		");
			$_SESSION['info'] = 'Категория успешно добавлена!';
			header('Location: /admin/news/category');
			exit();
		}
	}
	else {
		$_SESSION['info'] = 'Вы пытались добавить пустую категорию!';
		header('Location: /admin/news/category');
		exit();
	}
}

if(isset($_GET['action']) && $_GET['action'] = 'delete') {
	q("
       	DELETE FROM `news_cat`
       	WHERE `id` = ".(int)$_GET['id']."
   	");
	$_SESSION['info'] = 'Категория удалена!';
	header('Location: /admin/news/category');
	exit();
}
