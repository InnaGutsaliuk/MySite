<?php

if (isset($_GET['route'])) {
	$temp = explode('/', $_GET['route']);

	if ($temp[0] == 'admin') {
		Core::$CONTROLLER = Core::$CONTROLLER.'/admin';
		Core::$SKIN = 'admin';
		unset($temp[0]);
	}
	$i = 0;
	foreach ($temp as $k => $v) {
		if ($i == 0) {
			if (!empty($v)) {
				$_GET['module'] = $v;
			}
		} elseif ($i == 1) {
			if (!empty($v)) {
				$_GET['page'] = $v;
			}
		} else {
			$_GET['key'.($k-1)] = $v;
		}
		++$i;
	}
}

if(!isset($_GET['module'])) {
	if (!isset($_GET['module'])) {
		if (Core::$CONTROLLER == 'modules/admin') {
			$_GET['module'] = 'authorization';
		} else {
			$_GET['module'] = 'static';
		}
	}
} else {
	$res = DB::_() -> query("
		SELECT *
		FROM `pages`
		WHERE `modules` = '".es($_GET['module'])."'
		LIMIT 1
	");
	if (!$res -> num_rows) {
		header('Location: /404');
		exit();
	} else {
		$staticpage = $res -> fetch_assoc();
		if ($staticpage['static'] == 1) {
			$_GET['module'] = 'staticpage';
		}
	}
	$res -> close();
}

if(!isset($_GET['page'])){
	$_GET['page'] = 'main';
} else {
	if (!preg_match('#^[a-z-_]*$#ui', $_GET['page'])) {
		header('Location: /404');
		exit();
	}
}

if (isset($_POST)) {
	$_POST = trimAll($_POST);
}