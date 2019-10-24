<div class="content">
	<form action="" method="post" enctype="multipart/form-data">

		<span class="bold form-text">ФИО:</span>
		<input type="text" name="name" class="input-text" value="<?php echo @hs($_POST['name']);?>"><br>
		<?php if (isset($errors['name'])) {
			echo '<span class="text-red bold">'.$errors['name'].'</span>';
		} ?>

		<span class="bold form-text">Биография:</span>
		<textarea name="biogr" class="textarea"><?php echo @hs($_POST['biogr']); ?></textarea><br>
		<?php if (isset($errors['biogr'])) {
			echo '<span class="text-red bold">'.$errors['biogr'].'</span>';
		} ?><br>

		<input type="file" name="file" accept="image/*"><br>
		<?php if (isset($errors['file'])) {
			echo '<span class="text-red bold">'.$errors['file'].'</span>';
		} ?><br>

		<input type="submit" name="submit" value="Добавить" class="black-button goods_button">
	</form>
</div>