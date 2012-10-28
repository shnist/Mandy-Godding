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
			<h1> Sorry, something has gone wrong (404) </h1>
			<p>
				The page you are looking for is currently lost. To get back on track, why not
				<a href="/"> return to our homepage? </a>
			</p>
			
			<!-- logos -->
			<img class="orgLogos" src="/assets/images/bboLogo.jpg" alt="British Ballet Organisation" />
			<img class="orgLogos" src="/assets/images/istdLogo.jpg" alt="Imperial Society of Teachers of Dancing" />
		</div>
		
		<?php get_footer(); ?>