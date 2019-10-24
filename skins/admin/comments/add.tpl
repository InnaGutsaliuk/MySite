<div class="content">
    <form action="" method="post">
        <span class="bold form-text">Логин:</span>
        <input type="text" name="login" class="input-text" value="<?php echo @hs($_POST['login']);?>"><br>
        <?php if (isset($errors['login'])) {
            echo '<span class="text-red bold">'.$errors['login'].'</span>';
        } ?>

		<span class="bold form-text">e-mail:</span>
		<input type="text" name="email" class="input-text" value="<?php echo @hs($_POST['email']);?>"><br>
		<?php if (isset($errors['email'])) {
			echo '<span class="text-red bold">'.$errors['email'].'</span>';
		} ?>

		<span class="bold form-text">Комментарий:</span>
        <textarea name="comment" class="textarea"><?php echo @hs($_POST['comment']); ?></textarea><br>
        <?php if (isset($errors['comment'])) {
            echo '<span class="text-red bold">'.$errors['comment'].'</span>';
        } ?><br>

        <input type="submit" name="submit" value="Добавить" class="black-button goods_button">
    </form>
</div>