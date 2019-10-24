<?php
if (isset($_SESSION['info'])) {
	$info = $_SESSION['info'];
	unset($_SESSION['info']);
}

if (isset($_GET['action']) && $_GET['action'] = 'delete') {
	q("
       	DELETE FROM `users`
       	WHERE `id` = ".(int)$_GET['id']."
   	");

	$_SESSION['info'] = 'Пользователь удален!';
	header('Location: /admin/users');
	exit();
}
if (isset($_POST['ids'], $_POST['submit'])) {
	foreach ($_POST['ids'] as $k => $v) {
		$_POST['ids'][$k] = (int)$v;
	}
	$ids = implode(',', $_POST['ids']);
	q("
       	DELETE FROM `users`
       	WHERE `id` IN (".$ids.")
   	");
	$_SESSION['info'] = 'Выбранные пользователи были удалены!';
	header('Location: /admin/users');
	exit();
}
if (isset($_POST['search'], $_POST['submit_search'])){
	if (!empty($_POST['search'])) {
		$res = q("
			SELECT *,
			DATE_FORMAT(`date`, '%d.%m.%Y %H:%i') as `date`
   			FROM `users`
   			WHERE `login` LIKE '%".es($_POST['search'])."%'
   			ORDER BY `date` DESC
		");

		if (mysqli_num_rows($res)) {
			$count = q("
				SELECT COUNT(*) as `count`
   				FROM `users`
   				WHERE `login` LIKE '%".es($_POST['search'])."%'
   				ORDER BY `date` DESC
			");
			$count_res = mysqli_fetch_assoc($count);
			$info = 'Результаты поиска по запрoсу ('.$count_res['count'].'): '.$_POST['search'];
		} else {
			$info = 'Поиск по запрсу: '.$_POST['search'].' не дал результатов!';
		}
	} else {
		$_SESSION['info'] = 'Вы не ввели в поле поиска данные!';
		header('Location: /admin/users');
		exit();
	}
} else {
	$res = q("
		SELECT *,
		DATE_FORMAT(`date`, '%d.%m.%Y %H:%i') as `date`
		FROM `users`
   		ORDER BY `date` DESC
	");
}
