<html>
	<head>
		<?php wp_head(); ?>
	</head>
</html>
<?php
if (have_posts()):
	while(have_posts()):
		the_post(); ?>
	<section>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		<?php the_date(); ?>
	</section>
<?php
	endwhile;
else:
	echo '404! Not found!';
endif;
?>
<footer>
	<?php wp_footer(); ?>
</footer>