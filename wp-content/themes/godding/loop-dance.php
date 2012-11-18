   <?php get_header(); ?>
   
   <?php include ('blocks/slideshow.php') ?>
	<!-- content -->
		<div id="cont">
			
			<?php
				$my_id = 9;
				$post_id_9 = get_post($my_id);
				$content = $post_id_9->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo $content;
			?>
			
			<!-- logos -->
			<img class="orgLogos" src="/assets/images/bboLogo.jpg" alt="British Ballet Organisation" />
			<img class="orgLogos" src="/assets/images/istdLogo.jpg" alt="Imperial Society of Teachers of Dancing" />
		</div>
		
		<?php get_footer(); ?>