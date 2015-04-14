<?php 
wp_head();

if (have_posts()) {
	while(have_posts()) {
		the_post();
		the_title();
		the_content();
		the_date();
	}
} else {
	echo '404! Not found!';
}

wp_footer();