<?php if(isset($info)) echo '<span class="text-red bold">'.$info.'</span>'; ?>

<form action="" method="post">
	<br><span class="bold">Добавить категорию:</span><br>
	<input type="text" class="input-text" name="cat"><br>
	<input type="submit" name="submit" value="Добавить" class="black-button goods_button">
</form>

<table class="table_goods" cellspacing="0">
	<tr>
		<th>id</th>
		<th>Наименование</th>
		<th></th>
		<th></th>
	</tr>
	<?php while($row = $cat -> fetch_assoc()) { ?>
		<tr>
			<td class="padding-left-5">
				<?php echo hs($row['id']); ?>
			</td>
			<td class="padding-left-5">
				<?php echo hs($row['name']); ?>
			</td>
			<td class="w30">
				<a href="/admin/news/category&action=delete&id=<?php echo $row['id'];?>" title="Удалить" onclick="return myDelete();"><img src="/skins/admin/img/del-icon.png"></a>
			</td class="w30">
			<td class="w30">
				<a href="/admin/news/edit_cat&id=<?php echo $row['id'];?>" title="Редактировать"><img src="/skins/admin/img/edit-icon.png"></a>
			</td>
		</tr>
	<?php } ?>
</table>