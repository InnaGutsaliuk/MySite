<div class="content clearfix">
    <hr>
    <?php while($row = $res->fetch_assoc()) { ?>
        <div class="float-left w300">
			<img src="<?php echo $row['img'] ?>">
		</div>
		<div>
			<p>
				Категория: <?php echo hs($row['category']); ?>
			</p>
			<h1 class="goods_title">
				<?php echo hs($row['title']); ?>
			</h1>
			<p class="goods_article">
				арт. <?php echo $row['article']; ?>
			</p>
			<p class="goods_price">
				Цена: <?php echo $row['price']; ?>
			</p>
			<p class="goods_description">
				<?php echo hs($row['description']); ?>
			</p>
			<?php if ($row['available'] == '1') { ?>
				<p class="text-green bold">Есть в наличии</p>
			<?php } elseif ($row['available'] == '2') { ?>
				<p class="text-orange bold">Нет в наличии</p>
			<?php }
			?>
		</div><hr>
	<?php }
	$res->close();?>
	<?php echo $pagination_goods->getLinks(); ?>
</div>