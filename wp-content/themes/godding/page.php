<?php if ( have_posts() ) : the_post(); ?>

<?php
if (is_front_page()) {		
		get_template_part('loop', 'home');
}
elseif(is_page('dance')){
		get_template_part('loop', 'dance');
}
elseif(is_page('singing')){
		get_template_part('loop', 'singing');
}
elseif(is_page('drama')){
	get_template_part('loop', 'drama');
}
elseif(is_page('teachers')){
	get_template_part('loop', 'teachers');
}
elseif(is_page('contact')){
	get_template_part('loop', 'contact');
}
elseif(is_page('news')){
	get_template_part('loop', 'news');
}
else{//standard page template
		get_template_part('loop', 'page');
}
?>
<?php endif; ?>