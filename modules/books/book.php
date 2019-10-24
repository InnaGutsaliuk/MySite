<?php
$res = q("
	SELECT `title`, `description`, books.img, GROUP_CONCAT(`name` SEPARATOR ', ') as 'name'
    	FROM `books` LEFT JOIN `books2books_author`
		ON books.id = books2books_author.id_book
	LEFT JOIN `books_author`
		ON books2books_author.id_author = books_author.id
		
	WHERE `title` = '".es($_GET['title'])."'
	GROUP BY `title`, `description`, books.img
	LIMIT 1
");
if ($res -> num_rows) {
	$row = $res -> fetch_assoc();
	$res -> close();
	$name = explode(', ', $row['name']);
} else {
	echo 'Ошибка запроса';
}
