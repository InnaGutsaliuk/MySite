<?php
if (isset($_SESSION['info'])) {
	$info = $_SESSION['info'];
	unset($_SESSION['info']);
}

$cat = q("
	SELECT *
	FROM `news_cat`
");
if (isset($_GET['action']) && $_GET['action'] = 'delete') {
	q("
       	DELETE FROM `news`
       	WHERE `id` = ".(int)$_GET['id']."
   	");
	$_SESSION['info'] = 'Запись удалена!';
	header('Location: /admin/news');
	exit();
}
if (isset($_POST['ids'], $_POST['submit'])) {
	foreach ($_POST['ids'] as $k => $v) {
		$_POST['ids'][$k] = (int)$v;
	}
	$ids = implode(',', $_POST['ids']);
	q("
       	DELETE FROM `news`
       	WHERE `id` IN (".$ids.")
   	");
	$_SESSION['info'] = 'Выбранные записи были удалены!';
	header('Location: /admin/news');
	exit();
}
if (isset($_GET['cat']) && $_GET['cat'] != 'all') {
	$res = q("
   	SELECT *
   	FROM `news`
   	WHERE `category` = '".es($_GET['cat'])."'
");
} else {
	$res = q("
   		SELECT *
   		FROM `news`
	");
}
