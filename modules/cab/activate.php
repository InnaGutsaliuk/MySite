<?php

if (isset($_GET['id'], $_GET['hash'])) {
	$res = q("
		SELECT *
		FROM `users`
		WHERE `id` = '".(int)$_GET['id']."'
		AND `hash` = '".es($_GET['hash'])."'
		LIMIT 1
	");

	if (mysqli_num_rows($res)) {
		q("
        	UPDATE `users` SET
        	`active` = 2
        	WHERE  `id` = '".(int)$_GET['id']."'
        	AND `hash` = '".es($_GET['hash'])."'
    	");
		$info = 'Вы подтвердили свой email. Теперь можете авторизироваться.';
	} else {
		$info = 'Неверная ссылка. Попробуйте еще раз.';
	}
} else {
	$info = 'Вы попали на эту страницу случайно :)';
}