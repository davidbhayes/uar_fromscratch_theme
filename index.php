<?php get_header(); ?>
<main class="site-main">
	<?php
	if (have_posts()):
		while(have_posts()):
			the_post(); 
				get_template_part( 'content', 'entity' );
		endwhile ?>
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