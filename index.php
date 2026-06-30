<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
if ( have_posts() ) {
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
} else {
    echo '<p>' . __( 'No content found', 'shatur-theme' ) . '</p>';
}
get_footer();
