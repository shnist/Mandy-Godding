<?php

/**
 * Template Name: Home
 */

get_header();

?>

<?php
if (have_posts()) {

  while (have_posts()) {
    the_post();

    get_template_part('template-parts/home', 'page');
  }
}
?>


<?php get_footer(); ?>
