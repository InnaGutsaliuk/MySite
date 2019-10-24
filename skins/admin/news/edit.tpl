<div class="content">
    <form action="" method="post" enctype="multipart/form-data">
        <span class="bold form-text">Выберите категорию:</span>
        <select name="category[]" required size="1" class="input-text">
			<option value="Выберите из списка:">Выберите из списка:</option>

			<?php while ($row_cat = $cat -> fetch_assoc()) { ?>
            <option value="<?php echo $row_cat['name'] ?>" <?php if((isset($_POST['category'][0]) && $_POST['category'][0]==$row_cat['name']) || ($row['category']==$row_cat['name'])){echo 'selected';} ?>><?php echo $row_cat['name'] ?></option>
			<?php } ?>
        <?php if (isset($errors['category'])) {
            echo '<span class="text-red bold">'.$errors['category'].'</span>';
        } ?>
		</select>

        <span class="bold form-text">Заголовок:</span>
        <input type="text" name="title" class="input-text" value="<?php if(isset($_POST['title'])){echo hs($_POST['title']);}else{echo hs($row['title']);} ?>"><br>
        <?php if (isset($errors['title'])) {
            echo '<span class="text-red bold">'.$errors['title'].'</span>';
        } ?>

        <span class="bold form-text">Содержание новости:</span>
        <textarea name="text" class="textarea"><?php if(isset($_POST['text'])){echo hs($_POST['text']);}else{echo hs($row['text']);} ?></textarea><br>
        <?php if (isset($errors['text'])) {
            echo '<span class="text-red bold">'.$errors['text'].'</span>';
        } ?><br>

		<input type="file" name="file" accept="image/*"><br>
		<?php if (isset($errors['file'])) {
			echo '<span class="text-red bold">'.$errors['file'].'</span>';
		} ?><br>

		<input type="submit" name="submit" value="Сохранить" class="black-button goods_button">
    </form>
</div>