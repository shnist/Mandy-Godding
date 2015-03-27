   <?php get_header(); ?>

   <div id="photoShow">
   <!--[if !IE]> -->
	   <object type="application/x-shockwave-flash" data="/wp-content/themes/godding/_flash
/wp-content/themes/godding/_imagesslideShowHomePage.swf" width="970" height="330">
   <!-- <![endif]-->
   <!--[if IE]>
	   <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
	   width="970" height="330">
		   <param name="movie" value="/wp-content/themes/godding/_flash
/wp-content/themes/godding/_imagesslideShowHomePage.swf" />
	   <!--><!--dgx-->
		   <param name="loop" value="true" />
		   <param name="menu" value="false" />
		   <param name="wmode" value="transparent" />
		   <img src="/wp-content/themes/godding/_images/photoOne.png" alt="A sample photograph of the latest show">
		   <!-- proper image fallback is needed here -->
	   </object>
   <!-- <![endif]-->
   </div>
	<!-- content -->
		<div id="cont">
			<!-- logos -->
			<img class="orgLogos" src="/wp-content/themes/godding/_images/bboLogo.jpg" alt="British Ballet Organisation" />
			<img class="orgLogos" src="/wp-content/themes/godding/_images/istdLogo.jpg" alt="Imperial Society of Teachers of Dancing" />
		</div>

		<?php get_footer(); ?>