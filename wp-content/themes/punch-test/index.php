<?php
/**
 * The main template file
 *
*/

get_header(); ?>

<?php if ( have_posts() ) : ?>

<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// echo "index.php file fired";

		// End the loop.
		endwhile;

	else :
		// echo "index.php file else";

	endif;
	?>

<!-- <?php get_sidebar(); ?> -->

<?php get_footer(); ?>