<div class="content comment-center">

	<h1 class="text-red"><?php echo @$info; ?></h1>

	<?php if (!isset($auth_ok)) { ?>
		<form action="" method="post">
			<table>
				<tr class="height-70">
					<td class="bold">Логин: </td>
					<td><input type="text" name="login" class="input-text" value="<?php echo @hs($_POST['login']); ?>"></td>
				</tr>

				<?php if (isset($errors['login'])) { ?>
					<tr>
						<td colspan="2" class="text-red  bold"><?php echo $errors['login']; ?></td>
					</tr>
				<?php } ?>

				<tr class="height-70">
					<td class="bold">Пароль: </td>
					<td><input type="password" name="password" class="input-text" value="<?php echo @hs($_POST['password']); ?>"></td>
				</tr>

				<?php if (isset($errors['password'])) { ?>
				<tr>
					<td colspan="2" class="text-red  bold"><?php echo $errors['password']; ?></td>
				</tr>
				<?php } ?>
			</table>
			<label><input type="checkbox" name="auto_auth" value="auto_auth"> запомнить меня</label><br>
			<input type="submit" name="submit" value="Войти" class=" black-button comment-button">
		</form><br><br>
	<?php } ?>
</div>