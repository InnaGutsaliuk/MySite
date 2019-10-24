<div class="content">
	<hr>
	<?php while($row = $res->fetch_assoc()) { ?>
		<div class="clearfix">
			<div class="w300 float-left">
				<img src="<?php echo $row['img'] ?>">
			</div>
			<div class="float-left">
				<h1 class="goods_title">
					<?php echo hs($row['name']); ?>
				</h1>
				Книги автора:
				<p class="goods_description">
					<?php echo hs($row['title']); ?>
				</p>
				<a href="/books/author&name=<?php echo hs($row['name']); ?>">Подробнее...</a>
			</div>

		</div>
		<hr>
	<?php } ?>
</div>