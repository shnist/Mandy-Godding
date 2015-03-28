<?php get_header(); ?>

<?php include ('blocks/slideshow.php') ?>

<article class="container">
	<?php
		$my_id = 27;
		$post_id_27 = get_post($my_id);
		$content = $post_id_27->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
	?>	
</article>

<?php get_footer(); ?>