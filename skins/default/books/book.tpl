<div class="content">
	<a href="/books" class="a_link">Показать все книги</a>
	<div class="clearfix">
		<div class="w300 float-left">
			<img src="<?php echo $row['img'] ?>">
		</div>
		<div class="w850 float-left">
			<h1 class="goods_title">
				<?php echo hs($row['title']); ?>
			</h1>
			<p class="goods_description">
				<?php echo hs($row['description']); ?>
			</p>

			Автор(-ы):
			<p class="goods_description">
				<?php
				foreach($name as $v){
					echo '<a href="/books/author&name='.hs($v).'">'.hs($v).'</a><br>';
				} ?>
			</p>
		</div>

	</div>
</div>