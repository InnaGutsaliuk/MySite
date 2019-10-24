<?php
	while($comments = $res->fetch_assoc()){
		echo '<div class="comment">';
		echo '<span class="bold login">'.hs($comments['login']).'</span>';
		echo '<span class="date"> '.$comments['date'].'</span>';
		echo '<p class="text">'.hs($comments['comment']).'</p>';
		echo '</div>';
	} ?>
