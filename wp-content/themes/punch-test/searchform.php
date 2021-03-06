<?php
/**
 * Template for displaying search forms
 *
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo 'Search for:' ?></span>
		<input type="search" class="search-field" placeholder="Search term" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text">Search</span></button>
</form>
