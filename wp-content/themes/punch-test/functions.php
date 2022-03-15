<?php
/*
*
* CUSTOM PHP THEME FUNCTIONS
*
*/

//include all required files form inc folder
include('inc/no-comments.php');
include('inc/post-types.php');
include('inc/enqueue.php');
include('inc/cf7-check.php');
include('inc/disable-emoji.php');
include('inc/register-menus.php');
include('inc/mime-types.php');
include('inc/theme-support.php');
include('inc/sidebars.php');
include('inc/shortcodes.php');
include('inc/widgets.php');

//Create ACF options page
if( function_exists('acf_add_options_page') ) {
	// acf_add_options_page();
}

//hook for appending excerpt to Wordpress
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Continue Reading', 'shgblog') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


/* GET PAGE ID FROM SLUG */
function get_ID_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}


/* CHANGE EXERPT LIMIT */

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}