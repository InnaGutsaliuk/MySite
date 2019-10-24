<div class="content">
	<form action="" method="post" enctype="multipart/form-data">
		<span class="bold form-text">Выберите авторa(ов):</span>
		<?php

		while($row_all = $all_authors->fetch_assoc()) {
			echo '<label><input type="checkbox" name="author[]" value="'.$row_all['id'].'"';
			if((in_array($row_all['name'], $book_authors)) || (isset($_POST['author']) && (in_array($row_all['name'], $_POST['author'])))) {
				echo ' checked';
			}
			echo '> '.$row_all['name'].'</label><br>';
		} ?>
		<?php if (isset($errors['author'])) {
			echo '<span class="text-red bold">'.$errors['author'].'</span>';
		} ?>

		<a href="/admin/books/author_add&p=edit&id=<?php echo (int)$_GET['id']; ?>" class="button-grey">Добавить автора</a>

		<span class="bold form-text">Наименование:</span>
		<input type="text" name="title" class="input-text" value="<?php if(isset($_POST['title'])){echo hs($_POST['title']);}else{echo hs($row['title']);}?>"><br>
		<?php if (isset($errors['title'])) {
			echo '<span class="text-red bold">'.$errors['title'].'</span>';
		} ?>

		<span class="bold form-text">Цена (разделительный знак - точка):</span>
		<input type="text" name="price" class="input-text" value="<?php if(isset($_POST['price'])){echo (float)$_POST['price'];}else{echo (float)$row['price'];} ?>"><br>
		<?php if (isset($errors['price'])) {
			echo '<span class="text-red bold">'.$errors['price'].'</span>';
		} ?>

		<span class="bold form-text">Описание книги:</span>
		<textarea name="description" class="textarea"><?php if(isset($_POST['description'])){echo hs($_POST['description']);}else{echo hs($row['description']);} ?></textarea><br>
		<?php if (isset($errors['description'])) {
			echo '<span class="text-red bold">'.$errors['description'].'</span>';
		} ?>

		<input type="file" name="file" accept="image/*"><br>
		<?php if (isset($errors['file'])) {
			echo '<span class="text-red bold">'.$errors['file'].'</span>';
		} ?><br>

		<input type="submit" name="submit" value="Сохранить" class="black-button goods_button">
	</form>
</div>