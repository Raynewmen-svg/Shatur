<?php
// Silence is golden.
// index.php fallback for the theme.

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
endif;

get_footer();
