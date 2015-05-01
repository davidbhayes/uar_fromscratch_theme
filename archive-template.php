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
				<li>Post Name</li>
			</ul>
		</section>
</main>
<?php get_footer(); ?>