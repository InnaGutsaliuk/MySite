<?php if (isset($info)) { ?>
	<span class="text-red bold form-text font-size-26"><?php echo $info; ?></span>
<?php } ?>
<form action="" method="post">
	<a href="/admin/goods/add" class="black-button float-right green-button">+ Добавить товар</a>
	<input type="submit" name="submit" class="goods_button black-button button-red" value="Удалить товары"  onclick="return myDelete();">
	<table class="table_goods" cellspacing="0">
		<tr>
			<th></th>
			<th>Изображение</th>
			<th>Категория</th>
			<th>Наименование</th>
			<th>Артикул</th>
			<th>Цена</th>
			<th>Наличие</th>
			<th>Описание</th>
			<th></th>
			<th></th>
		</tr>
	<?php while($row = mysqli_fetch_assoc($res)) { ?>
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
				<?php echo $row['article']; ?>
			</td>
			<td class="padding-left-5">
				<?php echo $row['price']; ?>
			</td>
			<td class="padding-left-5">
				<?php if ($row['available'] == '1') {
					echo 'Есть в наличии';
				} elseif ($row['available'] == '2') {
					echo 'Нет в наличии';
				} ?>
			</td>
			<td class="padding-left-5">
				<?php echo hs($row['description']); ?>
			</td>
			<td class="w30">
				<a href="/admin/goods&action=delete&id=<?php echo $row['id'];?>"  title="Удалить" onclick="return myDelete();"><img src="/skins/admin/img/del-icon.png"></a>
			</td class="w30">
			<td class="w30">
				<a href="/admin/goods/edit&id=<?php echo $row['id'];?>" title="Редактировать"><img src="/skins/admin/img/edit-icon.png"></a>
			</td>
		</tr>
	<?php } ?>
	</table>
</form>
