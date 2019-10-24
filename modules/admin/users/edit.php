<?php
$res = q("
    SELECT *
    FROM `users`
    WHERE `id` = ".(int)$_GET['id']."
    LIMIT 1
");
if (!mysqli_num_rows($res)) {
    $_SESSION['info'] = 'Пользователя не существует';
    header('Location: /admin/users');
    exit();
}

$row = $res->fetch_assoc();
$res->close();

if (isset($_POST['login'], $_POST['email'], $_POST['age'], $_POST['active'], $_POST['submit'])) {
    $errors = array();
	if (empty($_POST['login'])) {
		$errors['login'] = 'Вы не заполнили поле Логин!';
	} elseif (strlen($_POST['login'])<2) {
		$errors['login'] = 'Имя должно содержать не менее 2 символов!';
	} elseif (strlen($_POST['login'])>12) {
		$errors['login']='Имя должно содержать не более 12 символов!';
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

	if (empty($_POST['active'])) {
		$errors['active']='Вы не указали права доступа!';
	}

	if(!count($errors)) {
		$res = q("
            SELECT `id`
            FROM `users`
            WHERE `login` = '". es($_POST['login']) ."'
            AND `id` != '".(int)$_GET['id']."'
            LIMIT 1
        ");
		if (mysqli_num_rows($res)) {
			$errors['login'] = 'Такой логин уже занят!';
		}
		$res = q("
            SELECT `id`
            FROM `users`
            WHERE `email` = '". es($_POST['email']) ."'
            AND `id` != '".(int)$_GET['id']."'
            LIMIT 1
        ");
		if (mysqli_num_rows($res)) {
			$errors['email'] = 'Такой e-mail уже занят!';
		}
	}

	if (isset($_POST['password-new']) && !empty($_POST['password-new'])) {
		if (strlen($_POST['password-new'])<6) {
			$errors['pass'] = 'Пароль должен содержать не менее 6 символов!';
		} elseif (strlen($_POST['password-new'])>12) {
			$errors['pass'] = 'Пароль должен содержать не более 12 символов!';
		} elseif (isset($_POST['password1']) && !empty($_POST['password1'])) {
			if($_POST['password-new'] !== $_POST['password1']) {
				$errors['pass'] = 'Пароли не совпали, попробуйте еще раз!';
			}
		} else {
			$errors['pass'] = 'Вы не повторили пароль!';
		}
	}

	if (!count($errors)) {
        q("
            UPDATE `users` SET
            `login`  = '". es($_POST['login']) ."',
            `password` = '". es(myHash($_POST['password'])) ."',
            `email`  = '". es($_POST['email']) ."',
            `age`    = '". es($_POST['age']) ."',
            `active` = '". (int)$_POST['active'] ."'
			WHERE `id` = '". (int)$_GET['id'] ."'
            LIMIT 1
        ");

        $_SESSION['info'] = 'Пользователь успешно отредактирован!';
        header('Location: /admin/users');
        exit();
    }
}