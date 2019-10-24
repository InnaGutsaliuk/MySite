<div class="content">
	<span id="info" class="text-red bold"></span><br><br>

	<h3>Последние 10 комментариев:</h3>
	<div id="comment_ajax"></div>
	<?php
		while($comments = $res->fetch_assoc()) {
			echo '<div class="comment">';
			echo '<span class="bold login">'.hs($comments['login']).'</span>';
			echo '<span class="date"> '.$comments['date'].'</span>';
			echo '<p class="text">'.hs($comments['comment']).'</p>';
			echo '</div>';
		}
	?>

<?php if (isset($_SESSION['user'])) { ?>

<div class="comment-center">
	<form action="" method="post">
		Напишите свой комментарий:
		<table>
			<tr class="height-70">
				<td><span class="bold">Имя</span><br>(не менее 3 символов):</td>
				<td><input class="input-text <?php if(isset($errors['login'])){echo 'border-red';}?>" type="text" name="login" id="login" value="<?php echo @hs($_POST['login']); ?>"></td>
			</tr>
			<tr>
				<td id="error-login" colspan="2" class="text-red  bold"><?php echo @$errors['login']; ?></td>
			</tr>

			<tr>
				<td><span class="bold">E-mail:</span></td>
				<td><input class="input-text <?php if(isset($errors['email'])){echo 'border-red';}?>" type="text" name="email" id="email" value="<?php echo @hs($_POST['email']); ?>"></td>
			</tr>
			<tr>
				<td id="error-email" colspan="2" class="text-red  bold"><?php echo @$errors['email']; ?></td>
			</tr>
		</table>
		<br><span class="bold">Введите комментарий:</span><br>
		<textarea id="text" class="textarea <?php if(isset($errors['comment'])){echo 'border-red';}?>" name="comment""><?php echo @hs($_POST['comment']); ?></textarea><br>

		<span id="error-text" class="text-red  bold"><?php echo @$errors['comment']; ?></span>
		<input type="submit" id="submit-id" name="submit" value="ОТПРАВИТЬ" class="black-button comment-button">
	</form>
</div>

<?php } else { ?>

<h3>Комментарии могут оставлять только зарегистрированные пользователи!</h3>
<?php } ?>
</div>
