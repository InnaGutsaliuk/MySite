<div class="content">
    <form action="" method="post" enctype="multipart/form-data">
		<span class="bold form-text">Выберите авторa(ов):</span>
		<?php
		while($res = $res_authors->fetch_assoc()) {
			echo '<label><input type="checkbox" name="author[]" value="'.$res['id'].'"> '.$res['name'].'</label><br>';
		} ?>
		<?php if (isset($errors['author'])) {
			echo '<span class="text-red bold">'.$errors['author'].'</span>';
		} ?>

		<a href="/admin/books/author_add&p=add" class="button-grey">Добавить автора</a>

		<span class="bold form-text">Наименование:</span>
        <input type="text" name="title" class="input-text" value="<?php echo @hs($_POST['title']);?>"><br>
        <?php if (isset($errors['title'])) {
            echo '<span class="text-red bold">'.$errors['title'].'</span>';
        } ?>

        <span class="bold form-text">Цена (разделительный знак - точка):</span>
        <input type="text" name="price" class="input-text" value="<?php if(isset($_POST['price'])){echo (float)$_POST['price'];} ?>"><br>
        <?php if (isset($errors['price'])) {
            echo '<span class="text-red bold">'.$errors['price'].'</span>';
        } ?>

        <span class="bold form-text">Описание книги:</span>
        <textarea name="description" class="textarea"><?php echo @hs($_POST['description']); ?></textarea><br>
        <?php if (isset($errors['description'])) {
            echo '<span class="text-red bold">'.$errors['description'].'</span>';
        } ?>

        <span class="bold form-text">Есть ли книга в наличии:</span>
        <label class="form-text"><input type="radio" name="available" value="1" <?php if((isset($_POST['available']) && $_POST['available']=='1') || !isset($_POST['available'])){echo 'checked';} ?>> Есть в наличии</label>
        <label class="form-text"><input type="radio" name="available" value="2" <?php if(isset($_POST['available']) && $_POST['available']=='2'){echo 'checked';} ?>> Нет в наличии</label>
        <?php if (isset($errors['available'])) {
            echo '<span class="text-red bold">'.$errors['available'].'</span>';
        } ?><br>

		<input type="file" name="file" accept="image/*"><br>
		<?php if (isset($errors['file'])) {
			echo '<span class="text-red bold">'.$errors['file'].'</span>';
		} ?><br>

		<input type="submit" name="submit" value="Добавить" class="black-button goods_button">
    </form>
</div>