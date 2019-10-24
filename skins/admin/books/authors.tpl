<?php if (isset($info)) { ?>
	<span class="text-red bold form-text font-size-26"><?php echo $info; ?></span>
<?php } ?>
<form action="" method="post">

<a href="/admin/books/author_add" class="black-button float-right green-button">Добавить автора</a>
<input type="submit" name="submit" class="goods_button black-button button-red" value="Удалить авторов" onclick="return myDelete();">
<table class="table_goods" cellspacing="0">
	<tr>
		<th></th>
		<th>Изображение</th>
		<th>ФИО</th>
		<th>Биография</th>
		<th>Книги</th>
		<th></th>
		<th></th>
	</tr>
	<?php while($row = $res -> fetch_assoc()) { ?>
		<tr>
			<td class="w30">
				<input type="checkbox" name="ids[]" value="<?php echo $row['id'];?>">
			</td>
			<td class="padding-left-5">
				<?php echo '<img src="'.$row['img'].'">'; ?>
			</td>
			<td class="padding-left-5">
				<?php echo hs($row['name']); ?>
			</td>
			<td class="padding-left-5">
				<?php echo hs($row['biogr']); ?>
			</td>
			<td class="padding-left-5">
				<?php echo hs($row['title']); ?>
			</td>
			<td class="w30">
				<a href="/admin/books/authors&action=delete&id=<?php echo $row['id'];?>"  title="Удалить" onclick="return myDelete();"><img src="/skins/admin/img/del-icon.png"></a>
			</td class="w30">
			<td class="w30">
				<a href="/admin/books/author_edit&id=<?php echo $row['id'];?>" title="Редактировать"><img src="/skins/admin/img/edit-icon.png"></a>
			</td>
		</tr>
	<?php } ?>
</table>
</form>
