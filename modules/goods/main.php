<?php
$c = q("
	SELECT COUNT(*) AS `count`
	FROM `goods`
");

$count = $c->fetch_assoc();
$c->close();
$all = $count['count'];
$limit = 2;
$page = isset($_GET['now_page'])?(int)$_GET['now_page']:1;
$start = ($page * $limit)-$limit;
$pageCount = ceil($all/$limit);
$module = 'goods';
$pagination_goods = new Paginator($page, $pageCount, $module);

$res = q("
    SELECT *
    FROM `goods`
    LIMIT ".$start.", ".$limit."
");
