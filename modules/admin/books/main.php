<?php
if (isset($_SESSION['info'])) {
	$info = $_SESSION['info'];
	unset($_SESSION['info']);
}
if (isset($_GET['action']) && $_GET['action'] = 'delete') {

	q("
       	DELETE FROM `books`
       	WHERE `id` = ".(int)$_GET['id']."
   	");
	q("
		DELETE FROM `books2books_author`
       	WHERE `id_book` = ".(int)$_GET['id']."
       ");
	$_SESSION['info'] = 'Запись удалена!';
	header('Location: /admin/books');
	exit();
}
if (isset($_POST['ids'], $_POST['submit'])) {
	foreach ($_POST['ids'] as $k => $v) {
		$_POST['ids'][$k] = (int)$v;
	}
	$ids = implode(',', $_POST['ids']);
	q("
       	DELETE FROM `books`
       	WHERE `id` IN (".$ids.")
   	");
	q("
		DELETE FROM `books2books_author`
       	WHERE `id_book` IN (".$ids.")
       ");
	$_SESSION['info'] = 'Выбранные книги были удалены!';
	header('Location: /admin/books');
	exit();
}
$res = DB::_() -> query("
	SELECT books.id, `title`, `price`, `description`, books.img_small, GROUP_CONCAT(`name` SEPARATOR ', ') as 'name'
	FROM `books` LEFT JOIN `books2books_author`
		ON books.id = books2books_author.id_book
	LEFT JOIN `books_author`
		ON books2books_author.id_author = books_author.id
	GROUP BY books.id, `title`, `price`, `description`, books.img_small
");
