<?php

/**
 * Template Name: Content
 */

get_header();

?>
<?php get_template_part('blocks/slideshow.php') ?>

<article class="container">
  <?php the_content() ?>
</article>

<?php get_footer(); ?>
