<?php get_header(); ?>

  <main>
    
    <h2>You are viewing the <?php single_cat_title(); ?> category!</h2>
  <?php if(have_posts()) {
      while(have_posts()) {
      the_post();
      get_template_part('template-parts/content', 'archive');
      ?><hr><?php
    }
  } ?>

  </main>
  
<?php get_footer(); ?>
    