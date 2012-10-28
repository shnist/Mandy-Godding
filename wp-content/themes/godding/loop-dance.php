   <?php get_header(); ?>
   
   <div id="photoShow">
   <!--[if !IE]> -->
	   <object type="application/x-shockwave-flash" data="/assets/flash/slideShowHomePage.swf" width="970" height="330">
   <!-- <![endif]-->
   <!--[if IE]>
	   <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
	   width="970" height="330">
		   <param name="movie" value="/assets/flash/slideShowHomePage.swf" />
	   <!--><!--dgx-->
		   <param name="loop" value="true" />
		   <param name="menu" value="false" />
		   <param name="wmode" value="transparent" /> 
		   <img src="/assets/images/photoOne.png" alt="A samle photograph of the latest show">
		   <!-- proper image fallback is needed here -->
	   </object>
   <!-- <![endif]-->
   </div>
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