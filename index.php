<?php get_header(); ?>
<main class="site-main">
	<?php
	if (have_posts()):
		while(have_posts()):
			the_post(); ?>
		<section <?php post_class(); ?>>
			<header>
				<div class="post-image">
					<?php the_post_thumbnail( 'better-thumb' ); ?>
				</div>
				<a href="<?php the_permalink(); ?>">
					<h2 class="post-title"><?php the_title(); ?></h2>
				</a>
				<p class="byline">
					by <?php the_author(); ?> on <?php the_date(); ?>
				</p>
			</header>
			<?php the_content(); ?>
			<footer>
				<a href="<?php the_permalink(); ?>">&infin;</a>
			</footer>
		</section>
	<?php endwhile ?>
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