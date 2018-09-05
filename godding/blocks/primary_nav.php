<!-- <nav class="primary-nav">
	<a href="<?php echo get_permalink( 6 ); ?>">Home</a>
	<a href="<?php echo get_permalink( 27 ); ?>">News</a>
	<a href="<?php echo get_permalink( 9 ); ?>">Dance</a>
	<a href="<?php echo get_permalink( 12 ); ?>">Singing</a>
	<a href="<?php echo get_permalink( 14 ); ?>">Drama</a>
	<a href="<?php echo get_permalink( 16 ); ?>">Teachers</a>
	<a href="<?php echo get_permalink( 101 ); ?>">Timetable</a>
	<a href="<?php echo get_permalink( 18 ); ?>">Contact</a>
</nav> -->
<?php
  wp_nav_menu(
    array(
      'theme_location' => 'primary-nav',
      'container_class' => 'primary-nav'
    )
  );
?>
