<?php
if (isset($_SESSION['info'])) {
	$info = $_SESSION['info'];
	unset($_SESSION['info']);
}
if (isset($_GET['action']) && $_GET['action'] = 'delete') {
	q("
       	DELETE FROM `goods`
       	WHERE `id` = ".(int)$_GET['id']."
   	");
	$_SESSION['info'] = 'Запись удалена!';
	header('Location: /admin/goods');
	exit();
}
if (isset($_POST['ids'], $_POST['submit'])) {
	foreach ($_POST['ids'] as $k => $v) {
		$_POST['ids'][$k] = (int)$v;
	}
	$ids = implode(',', $_POST['ids']);
	q("
       	DELETE FROM `goods`
       	WHERE `id` IN (".$ids.")
   	");
	$_SESSION['info'] = 'Выбранные записи были удалены!';
	header('Location: /admin/goods');
	exit();
}
$res = q("
   	SELECT *
   	FROM `goods`
");
