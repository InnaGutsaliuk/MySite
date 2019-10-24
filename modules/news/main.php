<?php
$cat = q("
	SELECT *
	FROM `news_cat`
");
if (isset($_GET['cat']) && $_GET['cat'] != 'all') {
	$condition = 'WHERE `category` = \''.es($_GET['cat']).'\'';
}

$c = q("
	SELECT COUNT(*) AS `count`
	FROM `news`
	".@$condition."
");

$count = $c->fetch_assoc();
$all = $count['count'];
$limit = 2;
$page = isset($_GET['now_page'])?(int)$_GET['now_page']:1;
$start = ($page * $limit)-$limit;
$pageCount = ceil($all/$limit);
$module = 'news';
$pagination_news = new Paginator($page, $pageCount, $module);

$res = q("
	SELECT *
	FROM `news`
	".@$condition."
	LIMIT ".$start.", ".$limit."
");
