<?php
/*
  Template Name: Home
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) :
	while (have_posts()) :
		the_post();
?>
		<div class="home">
			<a class="home-img" href="<?= home_url("/resize"); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
			<div class="home-sign">
				<img src="../img/logoGraffitiSign.png" alt="Boosted By Graffiti" />
			</div>
		</div>

<?php
	endwhile;
endif;
?>