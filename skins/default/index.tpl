<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo hs(Core::$META['title']); ?></title>
<meta name="description" content="<?php echo hs(Core::$META['description']); ?>" />
<meta name="keywords" content="<?php echo hs(Core::$META['keywords']); ?>" />
<link href="/skins/default/css/normalize.css" rel="stylesheet" type="text/css">
<link href="/skins/default/css/style.css" rel="stylesheet" type="text/css">
<script src="/skins/default/js/scripts.js?v=2"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/skins/default/js/ajax.js?v=3"></script>
<?php if(count(Core::$CSS)){echo 'implode ("\n", Core::$CSS)';} ?>
<?php if(count(Core::$JS)){echo 'implode ("\n", Core::$JS)';} ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>
    <div class="black-line clearfix">
        <div class="content">
            <div class="contact">
                <div class="sprite tel"></div>
                +800 123 45 67
            </div>
            <div class="contact">
                <div class="sprite tel"></div>
                info@demolink.com
            </div>
            <div class="contact adr">
                <div class="sprite geo"></div>
                121 wallstreet Street, New York , USA
            </div>
            <a class="sprite inst" href="#"></a>
            <a class="sprite face" href="#"></a>
            <a class="sprite twit" href="#"></a>
            <a class="sprite in" href="#"></a>
        </div>
    </div>
    <div class="header-img-small <?php if($_GET['module'] == 'static' && $_GET['page'] == 'main'){echo 'header-img';} ?>">
        <div class="content">
            <div class="auth">
                <?php
                    if (isset($_SESSION['user']['login'])) {
                        echo 'Привет, '.hs($_SESSION['user']['login']);
						echo ' ! | <a href="/cab/edit&id='.$_SESSION['user']['id'].'">Редактировать профиль</a>';
                        echo ' | <a href="/cab/exit&access=del">Выйти</a>';
                    } else { ?>
							<a href="/cab/authorization" onclick="displayBlock('authorization'); return false;">Войти </a> |
						<div id="authorization" class="content comment-center">
								<div class="close" id="close" onclick="displayNone('authorization');"></div>
								<?php if (!isset($auth_ok)) { ?>
									<form action="/cab/authorization" method="post">
										<table>
											<tr class="height-70">
												<td class="bold">Логин: </td>
												<td><input type="text" name="login" id="login" class="input-text input-text-red" value="<?php echo @hs($_POST['login']); ?>" onkeyup="loginLength();"></td>
											</tr>

											<?php if (isset($errors['login'])) { ?>
												<tr>
													<td colspan="2" class="text-red  bold"><?php echo $errors['login']; ?></td>
												</tr>
											<?php } ?>

											<tr class="height-70">
												<td class="bold">Пароль: </td>
												<td><input type="password" name="password" id="pass" class="input-text input-text-red" value="<?php echo @hs($_POST['password']); ?>" onkeyup="passLength();"></td>
											</tr>

											<?php if (isset($errors['password'])) { ?>
												<tr>
													<td colspan="2" class="text-red  bold"><?php echo $errors['password']; ?></td>
												</tr>
											<?php } ?>
										</table>
										<label><input type="checkbox" name="auto_auth" value="auto_auth"> запомнить меня</label><br>
										<input type="submit" name="submit" value="Войти" class=" black-button comment-button auth-button" onclick="return authSubmit();">
									</form><br><br>
								<?php } ?>
							</div>
						<div id="registration">
							<a href="/cab/registration">Зарегистрироваться </a>
						</div>
                <?php } ?>
            </div>
            <div class="menu">
                <a href="/" class="logo"><span>P</span>ROMAN</a>
                <menu>
                    <a href="/" <?php if($_GET['module'] == 'static' && $_GET['page'] == 'main'){echo 'class="home"';} ?>>HOME</a>
                    <a href="/static/contacts" <?php if($_GET['page'] == 'contacts'){echo 'class="home"';} ?>>CONTACTS</a>
                    <!--<a href="game" <?php /*if($_GET['module'] == 'game'){echo 'class="home"';} */?>>GAME</a>-->
                    <a href="/program" <?php if($_GET['module'] == 'program'){echo 'class="home"';} ?>>Файловый менеджер</a>
                    <a href="/comments" <?php if($_GET['module'] == 'comments'){echo 'class="home"';} ?>>Комментарии</a>
                    <a href="/goods" <?php if($_GET['module'] == 'goods'){echo 'class="home"';} ?>>Товары</a>
					<a href="/news" <?php if($_GET['module'] == 'news'){echo 'class="home"';} ?>>Новости</a>
					<a href="/books" <?php if($_GET['module'] == 'books'){echo 'class="home"';} ?>>Книги</a>

					<?php if(isset($_SESSION['user']['login']) && $_SESSION['user']['active'] == 5){ ?>
                        <a href="/admin" <?php if($_GET['module'] == 'admin'){echo 'class="home"';} ?>>ADMIN</a>
                    <?php } ?>
                    <a href="#" class="search"><img src="/skins/default/img/search2.png" width="15" height="15" alt="search"> </a>
                </menu>
            </div>
			<div class="display-none <?php if($_GET['module'] == 'static' && $_GET['page'] == 'main'){echo 'header-text';} ?>">
				<span class="font-size-60">Make Your Business</span><br>
				<span class="font-size-35">Prosper with Our Solutions</span><br>
				<span class="font-size-17">More than 5000 clients are satisfied with<br>
				our consulting program!</span>
			</div>
        	<div class="<?php if($_GET['module'] == 'static' && $_GET['page'] == 'main'){echo 'black-button';} else {echo 'display-none';} ?>">OUR COMPANY</div>
        </div>
    </div>
    </header>

    <main>
        <?php echo $content; ?>
    </main>

    <footer>
        <div class="content clearfix">
            <div class="footer-col-1">
                <p class="proman"><span>P</span>ROMAN</p>
                <p>Your reliable protection in jurisprudence. Our qualification provides the opportunity solve the problems of any complexity.</p>
                <p>Innlina &copy; <?php echo Core::$CREATED; if(Core::$CREATED != date("Y")){echo ' - '.date("Y");}?></p>
            </div>
            <div class="footer-col-2">
                <h3>CONTACT INFO</h3>
                <p>4096 N Highland St, Arlington<br>
                    VA 32101, USA<br>
				<span class="color-white pointer">
					info@demolink.org<br>
					800 1234 56 78<br>
				</span>
                </p>
                <p>
                    <span class="color-white">Mon-Thu:</span>  9:30 – 21:00<br>
                    <span class="color-white">Fri:</span> 6:00 – 21:00<br>
                    <span class="color-white">Sat:</span> 10:00 – 15:00
                </p>
            </div>
            <div class="footer-col-3">
                <h3>QUICK LINKS</h3>
                <a href="#">Home</a><br>
                <a href="#">About</a><br>
                <a href="#">Services</a><br>
                <a href="#">Single Service</a><br>
                <a href="#">Contacts</a><br>
            </div>
            <div class="footer-col-4">
                <h3>NEWSLETTER</h3>
                <div class="border-bottom-white">Your Email Address</div>
                <div class="button-footer">SIGN UP</div>
                <p>Be the first to find out about exclusive deals, the latest Lookbooks, and top trends.</p>
            </div>
        </div>
    </footer>
</body>

</html>