<?php

/**
 * Template Name: Teachers
 */

get_header();

?>

<?php get_template_part('blocks/slideshow.php'); ?>

<article class="container teachers">
  <?php the_content() ?>
</article>

<?php get_footer(); ?>
