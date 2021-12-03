<?php get_header(); ?>

<main>
<div class="container"> 

  <?php if (have_posts()) {
    while (have_posts()) {
      the_title();
      the_post();
      // the_content();
      get_template_part('template-parts/content', 'posts');
    }
    } ?>

</div>
</main>

<?php get_footer(); ?>
