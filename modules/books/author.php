<?php

if (isset($_GET['name'])) {
	$res = q("
		SELECT *
		FROM `books_author`
		WHERE `name` = '".es($_GET['name'])."\.'
		LIMIT 1
	");
	$row = $res -> fetch_assoc();
	$id = $row['id'];
} elseif (isset($_GET['id'])) {
	$id = int($_GET['id']);
}
$books = q("
	SELECT `img_small`, `title`
	FROM `books` LEFT JOIN `books2books_author`
		ON books2books_author.id_book = books.id
    WHERE books2books_author.id_author = '".$id."'
");

