<?php

/**
 * Template Name: Facebook News Feed
 */

get_header();

?>

<?php
if (have_posts()) {

  while (have_posts()) {
    the_post();

    get_template_part('template-parts/facebook-news-feed', 'page');
  }
}
?>


<?php get_footer(); ?>
