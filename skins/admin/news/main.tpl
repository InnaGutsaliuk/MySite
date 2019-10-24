<?php if (isset($info)) { ?>
<span class="text-red bold form-text font-size-26"><?php echo $info; ?></span>
<?php } ?>
<form action="" method="post">
	<a href="/admin/news/add" class="black-button float-right green-button">Добавить новость</a>
	<a href="/admin/news/category" class="cat-button black-button float-right ">Управление категориями</a>

	<input type="submit" name="submit" class="goods_button black-button button-red" value="Удалить новости" onclick="return myDelete();">

	<div class="clearfix">
		<a href="/admin/news&cat=all" class="category form-text">Показать все новости</a>
		<?php while ($row2 = $cat -> fetch_assoc()) { ?>
			<a href="/admin/news&cat=<?php echo $row2['name']; ?>" class="category form-text"><?php echo $row2['name']; ?></a>
		<?php }
		$cat -> close();?>
	</div>

	<table class="table_goods" cellspacing="0">
		<tr>
			<th></th>
			<th>Изображение</th>
			<th>Категория</th>
			<th>Заголовок</th>
			<th>Содержание</th>
			<th>Дата</th>
			<th></th>
			<th></th>
		</tr><?php while($row = mysqli_fetch_assoc($res)) { ?>
		<tr>
			<td class="w30">
				<input type="checkbox" name="ids[]" value="<?php echo $row['id'];?>">
			</td>
			<td class="padding-left-5">
				<?php echo '<img src="'.$row['img'].'">'; ?>
			</td>
			<td class="padding-left-5">
				<?php echo hs($row['category']); ?>
			</td>
			<td class="padding-left-5">
				<?php echo hs($row['title']); ?>
			</td>
			<td class="padding-left-5">
				<?php echo hs($row['text']); ?>
			</td>
			<td class="padding-left-5">
				<?php echo hs($row['date']); ?>
			</td>
			<td class="w30">
				<a href="/admin/news&action=delete&id=<?php echo $row['id'];?>" title="Удалить" onclick="return myDelete();"><img src="/skins/admin/img/del-icon.png"></a>
			</td class="w30">
			<td class="w30">
				<a href="/admin/news/edit&id=<?php echo $row['id'];?>" title="Редактировать"><img src="/skins/admin/img/edit-icon.png"></a>
			</td>
		</tr>
	<?php } ?>
	</table>
</form>
