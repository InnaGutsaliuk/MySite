<div class="content">
	<form action="" method="post">

		<span class="bold form-text">Категория:</span>
		<input type="text" name="name" class="input-text" value="<?php if(isset($_POST['name'])){echo hs($_POST['name']);}else{echo hs($row['name']);} ?>"><br>
		<?php if (isset($info)) {
			echo '<span class="text-red bold">'.$info.'</span>';
		} ?>

		<input type="submit" name="submit" value="Сохранить" class="black-button goods_button">
	</form>
</div>