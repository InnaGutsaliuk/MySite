<div class="content">
    <div class="registracion-center">
        <?php if (isset($info)){ echo '<h3 class="text-red">'.$info.'</h3>'; } ?>
		<?php if (!isset($reg_ok) || $reg_ok != 1){ ?>
			<form action="" method="post" enctype="multipart/form-data">
    	        <table>
        	        <tr class="height-70">
            	        <td class="bold">Логин (2-12 символов):</td>
                	    <td><input type="text" name="login" class="input-text" value="<?php echo @hs($_POST['login']); ?>"></td>
                	</tr>
    	            <?php if (isset($errors['login'])) { ?>
						<tr>
							<td colspan="2" class="text-red  bold"><?php echo $errors['login']; ?></td>
						</tr>
					<?php } ?>

					<tr class="height-70">
						<td class="bold">Пароль (6-12 символов):</td>
						<td><input type="password" name="password" class="input-text" value="<?php echo @hs($_POST['password']); ?>"></td>
					</tr>
					<?php if (isset($errors['password'])) { ?>
						<tr>
							<td colspan="2" class="text-red  bold"><?php echo $errors['password']; ?></td>
						</tr>
					<?php } ?>

					<tr class="height-70">
						<td class="bold">E-mail:</td>
						<td><input type="text" name="email" class="input-text" value="<?php echo @hs($_POST['email']); ?>"></td>
					</tr>
					<?php if (isset($errors['email'])) { ?>
						<tr>
							<td colspan="2" class="text-red  bold"><?php echo $errors['email']; ?></td>
						</tr>
					<?php } ?>

					<tr class="height-70">
						<td class="bold">Возраст:</td>
						<td><input type="text" name="age" class="input-text" value="<?php echo @hs($_POST['age']); ?>"></td>
					</tr>
					<?php if (isset($errors['age'])) { ?>
						<tr>
							<td colspan="2" class="text-red  bold"><?php echo $errors['age']; ?>	</td>
						</tr>
					<?php } ?>
				</table>

				<input type="file" name="file" accept="image/*"><br>
				<?php if (isset($errors['file'])) {
					echo '<span class="text-red bold">'.$errors['file'].'</span>';
				} ?><br>

				* Все поля обязательны к заполнению.
				<input type="submit" name="submit" value="Зарегистрироваться" class="black-button comment-button registracion-button">
			</form>
		<?php } ?>
    </div>
</div>