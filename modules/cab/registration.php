<?php
if (isset($_POST['login'], $_POST['email'], $_POST['password'], $_POST['age'], $_POST['submit'])) {
	$errors = array();
	if (empty($_POST['login'])) {
		$errors['login'] = 'Вы не заполнили поле Логин!';
	} elseif (strlen($_POST['login'])<2) {
		$errors['login'] = 'Имя должно содержать не менее 2 символов!';
	} elseif (strlen($_POST['login'])>12) {
		$errors['login']='Имя должно содержать не более 12 символов!';
	}

	if (empty($_POST['password'])) {
		$errors['password'] = 'Вы не заполнили поле Пароль!';
	} elseif (strlen($_POST['password'])<6) {
		$errors['password'] = 'Пароль должен содержать не менее 6 символов!';
	} elseif (strlen($_POST['password'])>12) {
		$errors['password'] = 'Пароль должен содержать не более 12 символов!';
	}

	if (empty($_POST['email'])) {
		$errors['email'] = 'Вы не заполнили поле email!';
	} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'Вы ввели неверный e-mail!';
	}

	if (empty($_POST['age'])) {
		$errors['age']='Вы не заполнили поле Возраст!';
	} elseif (($_POST['age'] < 5) || ($_POST['age'] > 120)) {
		$errors['age']='Вам не может быть столько лет!';
	}

	if ($_FILES['file']['error'] != 0) {
		$errors['file'] = 'Ошибка загрузки файла';
	} else {
		if (Uploader::upload($_FILES['file'])) {
			Uploader::resize(200,200, '/uploaded/200x200/');
			$image = Uploader::$nameResize;
		} else {
			$errors['file'] = Uploader::$error;
		}
	}

	if(isset($errors['file'])) {
		if (!empty($row['img'])) {
			$image = $row['img'];
			unset($errors['file']);
		} else {
			$image = '/uploaded/20190809-235917img88074.jpg';
			unset($errors['file']);
		}
	}


	if(!count($errors)) {
		$res = q("
            SELECT `id`
            FROM `users`
            WHERE `login` = '". es($_POST['login']) ."'
            LIMIT 1
        ");
		if (mysqli_num_rows($res)) {
			$errors['login'] = 'Такой логин уже занят!';
		}
		$res = q("
            SELECT `id`
            FROM `users`
            WHERE `email` = '". es($_POST['email']) ."'
            LIMIT 1
        ");
		if (mysqli_num_rows($res)) {
			$errors['email'] = 'Такой e-mail уже занят!';
		}
	}

	if(!count($errors)) {
		q("
            INSERT INTO `users` SET
            `avatar`     = '".$image."',
            `login`      = '" . es($_POST['login']) . "',
            `email`      = '" . es($_POST['email']) . "',
            `active`     = 2,
            `password`   = '" . es(myHash($_POST['password'])) . "',
            `age`        = '" . es($_POST['age']) . "',
            `hash`       = '".es(myHash($_POST['login'].$_POST['email']))."',
            `ip`         = '',
            `user_agent` = ''
        ");
		/*$res_id = q("
			SELECT `id`
			FROM `users`
			WHERE `login` = '" . es($_POST['login']) . "'
			LIMIT 1
		");
		$row_id = $res_id->fetch_assoc();
		$res_id->close();
		$id = $row_id['id'];*/
		$id = DB::_()->insert_id;

		Mail::$to = $_POST['email'];
		Mail::$subject = 'Регистрация на сайте';
		Mail::$text = 'Для завершения регистрации на сайте '.Core::$DOMAIN.' пройдите по ссылке: '.Core::$DOMAIN.'cab/activate?id='.$id.'&hash='.myHash($_POST['login'].$_POST['email']).' Если вы не регистрировались на этом сайте, просто проигнорируйте данное письмо.';
		Mail::send();

		$reg_ok = 1;
		$info = 'Вы успешно зарегистрировались.
        Для активации пройдите по ссылке в письме, которое было отправлено на Ваш e-mail!';
	}
}

