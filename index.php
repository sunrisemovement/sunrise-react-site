<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <?php wp_head(); ?>
  </head>
  <body>
    <?php if( have_posts() ) {
      while( have_posts() ) {
        the_post(); ?>
        <h1><?php the_title(); ?></h1>
      <?php
        the_content();
      }

    } ?>
    <?php wp_footer(); ?>
  </body>
</html>
