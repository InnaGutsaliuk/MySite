<?php
$res = q("
    	SELECT `name`, books_author.img, books_author.id, GROUP_CONCAT(`title` SEPARATOR ', ') as 'title'
    	FROM `books_author` LEFT JOIN `books2books_author`
		ON books_author.id = books2books_author.id_author
	LEFT JOIN `books`
		ON books2books_author.id_book = books.id
	GROUP BY `name`, books_author.img, books_author.id
");