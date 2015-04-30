<?php get_header(); ?>
<main class="site-main">
	
	<?php
	the_archive_title('<h3 class="archive-title">', '</h3>');
	if (have_posts()):
		while (have_posts()):
			the_post(); 
				if ( is_single() ) {
					get_template_part( 'content', 'single' );
				} else {
					get_template_part( 'content', 'loop' );
				}
		endwhile; ?>
		<div class="posts-nav">
			<?php next_posts_link('older'); ?>
			&nbsp;
			<?php previous_posts_link('newer'); ?>
		</div>
	<?php else: ?>
		<section>
			<header>
				<h1>404! Not found!</h1>
			</header>
		</section>
	<?php 
	endif;
	?>
</main>
<?php get_footer(); ?>