<?php
$c = q("
	SELECT COUNT(*) AS `count`
	FROM `books`
");

$count = $c->fetch_assoc();
$c->close();
$all = $count['count'];
$limit = 3;
$page = isset($_GET['now_page'])?(int)$_GET['now_page']:1;
$start = ($page * $limit)-$limit;
$pageCount = ceil($all/$limit);
$module = 'books';
$pagination_books = new Paginator($page, $pageCount, $module);

$res = DB::_() -> query("
	SELECT `title`, `price`, `description`, books.img, GROUP_CONCAT(`name` SEPARATOR ', ') as 'name'
	FROM `books` LEFT JOIN `books2books_author`
		ON books.id = books2books_author.id_book
	LEFT JOIN `books_author`
		ON books2books_author.id_author = books_author.id
	GROUP BY `title`, `price`, `description`, books.img
	LIMIT ".$start.", ".$limit."
");



