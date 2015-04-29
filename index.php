<!DOCTYPE html>
<html>
	<head>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="site container">
			<div id="content" class="site-content">
				<header class="site-header">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</header>
				<main class="site-main">
					<?php
					if (have_posts()):
						while(have_posts()):
							the_post(); ?>
						<section <?php post_class(); ?>>
							<header>
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
					<?php
						endwhile;
					else: ?>
						<section>
							<header>
								<h1>404! Not found!</h1>
							</header>
						</section>
					<?php 
					endif;
					?>
				</main>
			</div>
		</div>
		<footer class="site-footer">
			<p>Made pretty by the FromScratch Theme</p>
			<p>Proudly powered by <a href="http://www.wordpress.org/">WordPress</a></p>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>