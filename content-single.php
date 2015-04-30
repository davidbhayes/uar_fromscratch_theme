<section <?php post_class(); ?>>
	<header>
		<div class="post-image">
			<?php the_post_thumbnail( 'better-thumb' ); ?>
		</div>
		<h2 class="post-title"><?php the_title(); ?></h2>
		<p class="byline">
			by <?php the_author_posts_link(); ?> on <?php the_date(); ?>
		</p>
	</header>
	<?php the_content(); ?>
	<footer class="post-metadata">
		<p>Filed under: <?php echo get_the_category_list(', ') ?></p>
		<?php the_tags('<p>Tags: ', ', ', '</p>') ?>
		<a href="<?php the_permalink(); ?>">&infin;</a>
	</footer>
</section>