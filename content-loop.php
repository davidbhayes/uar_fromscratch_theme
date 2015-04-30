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