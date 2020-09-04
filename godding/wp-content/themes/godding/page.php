
<?php while (have_posts()) : the_post();
  if (is_front_page()) :
    get_template_part('templates/home');
  elseif (is_page('Teachers')) :
    get_template_part('templates/teachers');
  elseif (is_page('Contact')) :
    get_template_part('templates/contact');
  else :
    get_template_part('templates/content');
  endif;
endwhile; ?>
