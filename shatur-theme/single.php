<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<main class="wp-block-group">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
  else :
    echo '<p>' . __( 'No content found', 'shatur-theme' ) . '</p>';
  endif;
  ?>
</main>

<?php
get_footer();
