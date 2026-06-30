<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main class="wp-block-group container">
  <?php
  if ( have_posts() ) {
      while ( have_posts() ) : the_post();
          the_content();
      endwhile;
  } else {
      echo '<p>' . __( 'No content found', 'shatur-theme' ) . '</p>';
  }
  ?>
</main>
<?php
get_footer();
