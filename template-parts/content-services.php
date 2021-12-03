<article class="service-detailed">
  <h1 class="post-title"><?php the_title();?></h1>
  <ul class="post-tags"><?php the_tags('<span class="post-tag">', '</span><span class="post-tag">', '</span>'); ?></ul>
  <?php if (has_post_thumbnail()) { ?>
    
    <h2><?php the_field('description');?></h2>
    <?php the_post_thumbnail(); ?>

  <?php } ?>
  <p class="post-content"><?php the_content(); ?></p>
</article>