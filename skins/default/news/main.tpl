<div class="content">
	<div class="clearfix">
		<a href="/news" class="category form-text">Показать все новости</a>
		<?php while ($row2 = $cat -> fetch_assoc()) { ?>
			<a href="/news&cat=<?php echo $row2['name']; ?>" class="category form-text"><?php echo $row2['name']; ?></a>
		<?php }
		$cat -> close();?>
	</div>

	<?php while($row = $res -> fetch_assoc()) { ?>
		<div class="clearfix">
			<div class="float-left w300">
				<img src="<?php echo $row['img'] ?>">
			</div>
			<div class="float-left">
				<p>
					Категория: <?php echo hs($row['category']); ?>
				</p>
				<h1 class="goods_title">
					<?php echo hs($row['title']); ?>
				</h1>
				<p class="goods_description">
					<?php echo hs($row['text']); ?>
				</p>
			</div><hr>
		</div>
	<?php }
	$res -> close();
	echo $pagination_news->getLinks(); ?>
</div>