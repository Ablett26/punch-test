<?php
/**
 * The template for displaying all single posts and attachments
 *
**/

get_header(); ?>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			echo "single.php";

		// End of the loop.
		endwhile;
		?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
