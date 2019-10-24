<div class="content">
    <form action="" method="post" enctype="multipart/form-data">
        <span class="bold form-text">Выберите категорию:</span>
        <select name="category[]" required size="1" class="input-text">
            <option value="Выберите из списка:">Выберите из списка:</option>
            <option value="Техника для кухни" <?php if((isset($_POST['category'][0]) && $_POST['category'][0]=='Техника для кухни') || ($row['category']=='Техника для кухни')){echo 'selected';} ?>>Техника для кухни</option>
            <option value="Телефоны и планшеты" <?php if((isset($_POST['category'][0]) && $_POST['category'][0]=='Телефоны и планшеты') || ($row['category']=='Телефоны и планшеты')){echo 'selected';} ?>>Телефоны и планшеты</option>
            <option value="Компьютеры и ноутбуки" <?php if((isset($_POST['category'][0]) && $_POST['category'][0]=='Компьютеры и ноутбуки') || ($row['category']=='Компьютеры и ноутбуки')){echo 'selected';} ?>>Компьютеры и ноутбуки</option>
            <option value="Фото и видеокамеры" <?php if((isset($_POST['category'][0]) && $_POST['category'][0]=='Фото и видеокамеры') || ($row['category']=='Фото и видеокамеры')){echo 'selected';} ?>>Фото и видеокамеры</option>
            <option value="Телевизоры и видео" <?php if((isset($_POST['category'][0]) && $_POST['category'][0]=='Телевизоры и видео') || ($row['category']=='Телевизоры и видео')){echo 'selected';} ?>>Телевизоры и видео</option>
            <option value="Техника для дома" <?php if((isset($_POST['category'][0]) && $_POST['category'][0]=='Техника для дома') || ($row['category']=='Техника для дома')){echo 'selected';} ?>>Техника для дома</option>
        </select><br>
        <?php if (isset($errors['category'])) {
            echo '<span class="text-red bold">'.$errors['category'].'</span>';
        } ?>

        <span class="bold form-text">Наименование:</span>
        <input type="text" name="title" class="input-text" value="<?php if(isset($_POST['title'])){echo hs($_POST['title']);}else{echo hs($row['title']);} ?>"><br>
        <?php if (isset($errors['title'])) {
            echo '<span class="text-red bold">'.$errors['title'].'</span>';
        } ?>

        <span class="bold form-text">Артикул:</span>
        <input type="text" name="article" class="input-text" value="<?php if(isset($_POST['article'])){echo (int)$_POST['article'];}else{echo (int)$row['article'];} ?>"><br>
        <?php if (isset($errors['article'])) {
            echo '<span class="text-red bold">'.$errors['article'].'</span>';
        } ?>

        <span class="bold form-text">Цена (разделительный знак - точка):</span>
        <input type="text" name="price" class="input-text" value="<?php if(isset($_POST['price'])){echo (double)$_POST['price'];}else{echo (float)$row['price'];} ?>"><br>
        <?php if (isset($errors['price'])) {
            echo '<span class="text-red bold">'.$errors['price'].'</span>';
        } ?>

        <span class="bold form-text">Описание товара:</span>
        <textarea name="description" class="textarea"><?php if(isset($_POST['description'])){echo hs($_POST['description']);}else{echo hs($row['description']);} ?></textarea><br>
        <?php if (isset($errors['description'])) {
            echo '<span class="text-red bold">'.$errors['description'].'</span>';
        } ?>

        <span class="bold form-text">Есть ли товар в наличии:</span>
        <label class="form-text"><input type="radio" name="available" value="1" <?php if((isset($_POST['available']) && $_POST['available']=='1') || $row['available']=='1'){echo 'checked';} ?>> Есть в наличии</label>
        <label class="form-text"><input type="radio" name="available" value="2" <?php if((isset($_POST['available']) && $_POST['available']=='2') || $row['available']=='2'){echo 'checked';} ?>> Нет в наличии</label>
        <?php if (isset($errors['available'])) {
            echo '<span class="text-red bold">'.$errors['available'].'</span>';
        } ?><br>

		<input type="file" name="file" accept="image/*"><br>
		<?php if (isset($errors['file'])) {
			echo '<span class="text-red bold">'.$errors['file'].'</span>';
		} ?><br>

		<input type="submit" name="submit" value="Сохранить" class="black-button goods_button">
    </form>
</div>