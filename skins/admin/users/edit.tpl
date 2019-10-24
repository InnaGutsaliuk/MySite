<div class="content">
    <form action="" method="post" autocomplete="off" >

        <span class="bold form-text">Логин:</span>
        <input type="text" name="login" class="input-text" value="<?php if(isset($_POST['login'])){echo hs($_POST['login']);}else{echo hs($row['login']);} ?>"><br>
        <?php if (isset($errors['login'])) {
            echo '<span class="text-red bold">'.$errors['login'].'</span>';
        } ?>


		<span class="bold form-text">Новый пароль(от 6 до 12 символов,<br> не обязательно):<br>
		<input type="password" name="password-new" class="input-text" id="ps" onkeyup="pass();" autocomplete="off" value="<?php echo hs($row['password']); ?>"><br>
		<span class="bold form-text">Повторите пароль еще раз:</span>
		<input type="password" name="password1" class="input-text" id="ps1" autocomplete="off" onkeyup="pass1();" value="<?php echo hs($row['password']); ?>"><br>
		<?php if (isset($errors['pass'])) {
			echo '<span class="text-red bold">'.$errors['pass'].'</span>';
		} ?>

		<span class="bold form-text">e-mail:</span>
		<input type="text" name="email" class="input-text" value="<?php if(isset($_POST['email'])){echo hs($_POST['email']);}else{echo hs($row['email']);} ?>"><br>
		<?php if (isset($errors['email'])) {
			echo '<span class="text-red bold">'.$errors['email'].'</span>';
		} ?>



		<span class="bold form-text">Возраст:</span>
		<input type="text" name="age" class="input-text" value="<?php if(isset($_POST['age'])){echo hs($_POST['age']);}else{echo hs($row['age']);} ?>"><br>
		<?php if (isset($errors['age'])) {
			echo '<span class="text-red bold">'.$errors['age'].'</span>';
		} ?>

		<span class="bold form-text">ip:</span>
		<input type="text" name="ip" class="input-text" value="<?php if(isset($_POST['ip'])){echo hs($_POST['ip']);}else{echo hs($row['ip']);} ?>"><br>
		<?php if (isset($errors['ip'])) {
			echo '<span class="text-red bold">'.$errors['ip'].'</span>';
		} ?>

		<span class="bold form-text">Дата:</span>
		<input type="text" name="date" class="input-text" value="<?php if(isset($_POST['date'])){echo hs($_POST['date']);}else{echo hs($row['date']);} ?>"><br>
		<?php if (isset($errors['date'])) {
			echo '<span class="text-red bold">'.$errors['date'].'</span>';
		} ?>

		<span class="bold form-text">Права доступа:</span>
		<label class="form-text"><input type="radio" name="active" value="1" <?php if((isset($_POST['active']) && $_POST['active']=='1')){echo 'checked';}elseif(($row['active']=='1')){echo 'checked';} ?>> Зарегистрирован, но не подтвержден e-mail</label>
		<label class="form-text"><input type="radio" name="active" value="2" <?php if((isset($_POST['active']) && $_POST['active']=='2')){echo 'checked';}elseif(($row['active']=='2')){echo 'checked';} ?>> Зарегистрирован</label>
		<label class="form-text"><input type="radio" name="active" value="3" <?php if((isset($_POST['active']) && $_POST['active']=='3')){echo 'checked';}elseif(($row['active']=='3')){echo 'checked';} ?>> Забанен</label>
		<label class="form-text"><input type="radio" name="active" value="5" <?php if((isset($_POST['active']) && $_POST['active']=='5')){echo 'checked';}elseif(($row['active']=='5')){echo 'checked';} ?>> Администратор</label>
		<?php if (isset($errors['active'])) {
			echo '<span class="text-red bold">'.$errors['active'].'</span>';
		} ?>
		<br>

        <input type="submit" name="submit" value="Сохранить" class="black-button goods_button">
    </form>
</div>