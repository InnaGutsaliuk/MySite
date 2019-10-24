<?php
if (isset($_GET['access']) && $_GET['access'] == 'del') {
	unset($_SESSION['user']);
	session_destroy();
	setcookie('ip', '', time()-60, '/');
	setcookie('hash', '', time()-60, '/');

	header("Location: /");
	exit();
}

