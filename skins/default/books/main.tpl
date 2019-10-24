<div class="content">
	<hr>
	<?php while($row = $res->fetch_assoc()) { ?>
		<div class="clearfix">
		<div class="w300 float-left">
			<img src="<?php echo $row['img'] ?>">
		</div>
		<div class="float-left">
			<h1 class="goods_title">
				<?php echo hs($row['title']); ?>
			</h1>
			<p class="goods_price">
				Цена: <?php echo (float)$row['price']; ?> руб.
			</p>
			<p class="goods_description">
				<?php echo hs($row['description']); ?>
			</p>
			<p class="goods_description">
				<?php
				foreach($name = explode(', ', $row['name']) as $v) {
					echo '<a href="/books/author&name='.hs($v).'">'.hs($v).'</a><br>';
				} ?>
			</p>
			</div>
</div>
		<hr>
	<?php }
	$res->close();
	echo $pagination_books->getLinks();?>
</div>