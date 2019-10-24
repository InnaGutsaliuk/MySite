<?php if (isset($info)) { ?>
<span class="text-red bold form-text font-size-26"><?php echo $info; ?></span>
<?php }

 ?>

<form action="" method="post" class="search-form">
	Поиск по логину:
	<input type="text" name="search">
	<input type="submit" name="submit_search" value="Найти">
</form>

<form action="" method="post">
	<input type="submit" name="submit" class="goods_button black-button button-red comment_button" value="Удалить выбранные" onclick="return myDelete();">

	<table class="table_goods" cellspacing="0">
		<tr>
			<th></th>
			<th>Аватар</th>
			<th>Логин</th>
			<th>e-mail</th>
			<th>Возраст</th>
			<th>Доступ</th>
			<th>ip</th>
			<th>Дата регистрации</th>
			<th></th>
			<th></th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($res)) { ?>
			<tr>
				<td class="w30">
					<input type="checkbox" name="ids[]" value="<?php echo $row['id'];?>">
				</td>
				<td class="padding-left-5">
					<?php echo '<img src="'.$row['avatar'].'">'; ?>
				</td>

				<td class="padding-left-5">
					<?php echo hs($row['login']); ?>
				</td>
				<td class="padding-left-5">
					<?php echo hs($row['email']); ?>
				</td>
				<td class="padding-left-5">
					<?php echo hs($row['age']); ?>
				</td>
				<td class="padding-left-5">
					<?php
					switch ($row['active']) {
						case '1': echo 'Не подтвержден e-mail'; break;
						case '2': echo 'Зарегистрирован и подтвержден'; break;
						case '3': echo 'Забанен'; break;
						case '5': echo 'Администратор'; break;
					}
					?>
				</td>
				<td class="padding-left-5">
					<?php echo hs($row['ip']); ?>
				</td>
				<td class="padding-left-5">
					<?php echo hs($row['date']); ?>
				</td>
				<td class="w30">
					<a href="/admin/users&action=delete&id=<?php echo $row['id'];?>"  title="Удалить" onclick="return myDelete();"><img src="/skins/admin/img/del-icon.png"></a>
				</td class="w30">
				<td class="w30">
					<a href="/admin/users/edit&id=<?php echo $row['id'];?>" title="Редактировать"><img src="/skins/admin/img/edit-icon.png"></a>
				</td>
			</tr>

		<?php } ?>
	</table>
</form>
