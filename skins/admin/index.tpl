<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo hs(Core::$META['title']); ?></title>
	<meta name="description" content="<?php echo hs(Core::$META['description']); ?>" />
	<meta name="keywords" content="<?php echo hs(Core::$META['keywords']); ?>" />
	<link href="/skins/default/css/normalize.css" rel="stylesheet" type="text/css">
	<link href="/skins/default/css/style.css" rel="stylesheet" type="text/css">
	<link href="/skins/admin/css/style_admin.css" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="/skins/admin/js/script.js?v=2"></script>
	<?php if(count(Core::$CSS)){echo 'implode ("\n", Core::$CSS)';} ?>
	<?php if(count(Core::$JS)){echo 'implode ("\n", Core::$JS)';} ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<header>
	<div class="content">
		<div class="menu">
			<div class="clearfix">
				<div class="menu float-left">
					<a href="/" class="logo"><span>P</span>ROMAN</a>
					<br><span class="logo">Панель администратора</span>
				</div>
				<div class="menu float-right">
					<?php
					if (isset($_SESSION['user']) && $_SESSION['user']['active'] == 5) { ?>

						<div class="hello">
							Привет, <?php echo $_SESSION['user']['login']; ?> |
							<a href="/cab/exit&access=del">Выйти</a>
						</div><br>
						<menu>
							<a href="/admin/users" <?php if($_GET['module'] == 'users'){echo 'class="home"';} ?>>Пользователи</a>
							<a href="/admin/comments" <?php if($_GET['module'] == 'comments'){echo 'class="home"';} ?>>Комментарии</a>
							<a href="/admin/goods" <?php if($_GET['module'] == 'goods'){echo 'class="home"';} ?>>Товары</a>
							<a href="/admin/news" <?php if($_GET['module'] == 'news'){echo 'class="home"';} ?>>Новости</a>
							<a href="/admin/books" <?php if($_GET['module'] == 'books'){echo 'class="home"';} ?>>Книги</a>
							<a href="/">Перейти на сайт</a>
						</menu>
					<?php } else {
						echo '<a href="/">Перейти на сайт</a>';
					} ?>
				</div>
			</div>
		</div>
	</div>
</header>
<main class="content">
	<?php echo $content; ?>
</main>
<footer>
	<div class="content clearfix">
		<div class="float-left">Innlina &copy; <?php echo Core::$CREATED; if(Core::$CREATED != date("Y")){echo ' - '.date("Y");}?>
		</div>
		<div class="color-white pointer float-right">
			Innlina@mail.ru<br>
		</div>
	</div>

</footer>
</body>
</html>