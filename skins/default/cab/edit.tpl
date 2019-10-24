<div class="content">
	<?php if (isset($info)) { ?>
		<span class="text-red bold form-text font-size-26"><?php echo $info; ?></span>
	<?php } ?>

	<img src="<?php echo $row['avatar'] ?>" class="padding-top-20">
	<form action="" method="post" enctype="multipart/form-data">

		<span class="bold form-text">Логин:</span>
		<input type="text" name="login" class="input-text" value="<?php if(isset($_POST['login'])){echo hs($_POST['login']);}else{echo hs($row['login']);} ?>" disabled><br>
		<?php if (isset($errors['login'])) {
			echo '<span class="text-red bold">'.$errors['login'].'</span>';
		} ?>

		<span class="bold form-text">Новый пароль(если хотите изменить):</span>
		<input type="text" name="password" class="input-text"><br>
		<?php if (isset($errors['password'])) {
			echo '<span class="text-red bold">'.$errors['password'].'</span>';
		} ?>

		<span class="bold form-text">e-mail:</span>
		<input type="text" name="email" class="input-text" value="<?php if(isset($_POST['email'])){echo hs($_POST['email']);}else{echo hs($row['email']);} ?>" disabled><br>
		<?php if (isset($errors['email'])) {
			echo '<span class="text-red bold">'.$errors['email'].'</span>';
		} ?>

		<span class="bold form-text">Возраст:</span>
		<input type="text" name="age" class="input-text" value="<?php if(isset($_POST['age'])){echo hs($_POST['age']);}else{echo hs($row['age']);} ?>"><br>
		<?php if (isset($errors['age'])) {
			echo '<span class="text-red bold">'.$errors['age'].'</span>';
		} ?>

		<span class="bold form-text">Вы можете загрузить новую аватарку:</span><br>
		<input type="file" name="file" accept="image/*"><br>
		<?php if (isset($errors['file'])) {
			echo '<span class="text-red bold">'.$errors['file'].'</span>';
		} ?><br>
		<br>

		<input type="submit" name="submit" value="Сохранить" class="black-button goods_button">
	</form>
</div>