<?php if (isset($info)) { ?>
<span class="text-red bold form-text font-size-26"><?php echo $info; ?></span>
<?php } ?>
<form action="" method="post">
	<a href="/admin/comments/add" class="black-button float-right green-button comment_button">Добавить комментарий</a>
	<input type="submit" name="submit" class="goods_button black-button button-red comment_button" value="Удалить выбранные" onclick="return myDelete();">
	<table class="table_goods" cellspacing="0">
		<tr>
			<th></th>
			<th>Логин</th>
			<th>e-mail</th>
			<th>Комментарий</th>
			<th>Дата</th>
			<th></th>
			<th></th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($res)) { ?>
			<tr>
				<td class="w30">
					<input type="checkbox" name="ids[]" value="<?php echo $row['id'];?>">
				</td>
				<td class="padding-left-5">
					<?php echo hs($row['login']); ?>
				</td>
				<td class="padding-left-5">
					<?php echo hs($row['email']); ?>
				</td>
				<td class="padding-left-5">
					<?php echo hs($row['comment']); ?>
				</td>
				<td class="padding-left-5">
					<?php echo hs($row['date']); ?>
				</td>
				<td class="w30">
					<a href="/admin/comments&action=delete&id=<?php echo $row['id'];?>"  title="Удалить" onclick="return myDelete();"><img src="/skins/admin/img/del-icon.png"></a>
				</td class="w30">
				<td class="w30">
					<a href="/admin/comments/edit&id=<?php echo $row['id'];?>" title="Редактировать"><img src="/skins/admin/img/edit-icon.png"></a>
				</td>
			</tr>
		<?php } ?>
	</table>
</form>
