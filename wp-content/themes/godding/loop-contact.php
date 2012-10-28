   <?php get_header(); ?>
   
   <?php include ('blocks/slideshow.php') ?>
	<!-- content -->
		<div id="cont">
			
			<?php
				$my_id = 18;
				$post_id_18 = get_post($my_id);
				$content = $post_id_18->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo $content; ?>
			
			<?php include('blocks/qualifications.php'); ?>
		</div>
		
		<?php get_footer(); ?>