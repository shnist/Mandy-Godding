   <?php get_header(); ?>

	<?php include ('blocks/slideshow.php') ?>
	<!-- content -->
		<div id="cont">
			<?php
				$my_id = 5;
				$post_id_5 = get_post($my_id);
				$content = $post_id_5->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo $content;

			?>

			<?php include('blocks/qualifications.php'); ?>
		</div>
		<div class="overlay"></div>
		<div class="overlayContainer">
			<a href="#" class="close">Close</a>
			<img id="advert" src="/wp-content/themes/godding/_images/advertisement.jpg" alt="Summer classes available. Contact us to find out more">
		</div>

		<?php get_footer(); ?>