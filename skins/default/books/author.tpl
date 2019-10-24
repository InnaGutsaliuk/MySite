<div class="content">
<a href="/books/authors_all" class="a_link">Просмотреть всех авторов</a>
	<div class="clearfix">
		<div class="w300 float-left">
			<img src="<?php echo $row['img'] ?>">
		</div>
		<div class="w850 float-left">
			<h1 class="goods_title">
				<?php echo hs($row['name']); ?>
			</h1>
			<p class="goods_description">
				<?php echo hs($row['biogr']); ?>
			</p>

			Книги автора:
			<div class="clearfix">

				<?php
				while($res = $books -> fetch_assoc()){
					echo '<a href="/books/book&title='.hs($res['title']).'" class="books"><img src="'.$res['img_small'].'" width="80px" height="100px">'.hs($res['title']).'</a>';
				} ?>
			</div>

		</div>
	</div>
</div>