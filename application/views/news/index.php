<?php

foreach ($news as $news_item): ?>

	<h2><?php echo $news_item['title'] ?></h2>
	<div class="content">
		<?php echo $news_item['text'] ?>
	</div>
	<p><a href="<?php echo $news_item['slug'] ?>">View article.</a></p>

<?php endforeach; ?>

<iframe src="//player.vimeo.com/video/80853281?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="538" height="455" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>