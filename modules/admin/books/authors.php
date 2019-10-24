<?php
if (isset($_SESSION['info'])) {
	$info = $_SESSION['info'];
	unset($_SESSION['info']);
}
if (isset($_GET['action']) && $_GET['action'] = 'delete') {
	q("
       	DELETE FROM `books_author`
       	WHERE `id` = ".(int)$_GET['id']."
   	");
	q("
		DELETE FROM `books2books_author`
       	WHERE `id_author` = ".(int)$_GET['id']."
       ");
	$_SESSION['info'] = 'Запись удалена!';
	header('Location: /admin/books/authors');
	exit();
}
if (isset($_POST['ids'], $_POST['submit'])) {
	foreach ($_POST['ids'] as $k => $v) {
		$_POST['ids'][$k] = (int)$v;
	}
	$ids = implode(',', $_POST['ids']);
	q("
       	DELETE FROM `books_author`
       	WHERE `id` IN (".$ids.")
   	");
	q("
		DELETE FROM `books2books_author`
       	WHERE `id_author` IN (".$ids.")
       ");
	$_SESSION['info'] = 'Выбранные авторы были удалены!';
	header('Location: /admin/books/authors');
	exit();
}
$res = q("
	SELECT books_author.id, `name`, books_author.img, biogr, GROUP_CONCAT(`title` SEPARATOR ', ') as 'title'
	FROM `books_author` LEFT JOIN `books2books_author`
		ON books_author.id = books2books_author.id_author
	LEFT JOIN `books`
		ON books2books_author.id_book = books.id
	GROUP BY books_author.id, `name`, books_author.img, biogr
");
