<div class="content">
    <form action="" method="post">

        <span class="bold form-text">Логин:</span>
        <input type="text" name="login" class="input-text" value="<?php if(isset($_POST['login'])){echo hs($_POST['login']);}else{echo hs($row['login']);} ?>"><br>
        <?php if (isset($errors['login'])) {
            echo '<span class="text-red bold">'.$errors['login'].'</span>';
        } ?>

		<span class="bold form-text">e-mail:</span>
		<input type="text" name="email" class="input-text" value="<?php if(isset($_POST['email'])){echo hs($_POST['email']);}else{echo hs($row['email']);} ?>"><br>
		<?php if (isset($errors['email'])) {
			echo '<span class="text-red bold">'.$errors['email'].'</span>';
		} ?>


		<span class="bold form-text">Комментарий:</span>
        <textarea name="comment" class="textarea"><?php if(isset($_POST['comment'])){echo hs($_POST['comment']);}else{echo hs($row['comment']);} ?></textarea><br>
        <?php if (isset($errors['comment'])) {
            echo '<span class="text-red bold">'.$errors['comment'].'</span>';
        } ?><br>

        <input type="submit" name="submit" value="Сохранить" class="black-button goods_button">
    </form>
</div>