<?php 
/*
Template Name: Archive Page
*/
?>
<?php get_header(); ?>
<main class="site-main">
	<?php
	while ( have_posts() ):
		the_post(); ?>
		<section <?php post_class(); ?>>
			<header>
				<h2 class="post-title">Our Archives</h2>
			</header>
			<?php the_content(); ?>
		
	<?php
	endwhile; ?>
			<ul>
<?php 
			$q = new WP_Query(array(
				'ignore_sticky_posts' => false,
				'post_per_page' => -1
			));
			while ( $q->have_posts() ):
				$q->the_post();
				?>
				<li>
					<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?></a> &mdash;
					<?php the_date(); ?>
				</li>
				<?php 
			endwhile;
			wp_reset_postdata();
?>
			</ul>
		</section>
</main>
<?php get_footer(); ?>