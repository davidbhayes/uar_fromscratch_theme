<html>
	<head>
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="site container">
			<div id="content" class="site-content">
				<main class="site-main">
					<?php
					if (have_posts()):
						while(have_posts()):
							the_post(); ?>
						<section>
							<header>
								<h2><?php the_title(); ?></h2>
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
		<footer>
			<p>Made pretty by the FromScratch Theme</p>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>