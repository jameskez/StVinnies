<article>
  <h2 class="post-title"><?php the_title(); ?></h2>
  <ul class="post-tags"><?php the_tags('<span class="post-tag">', '</span><span class="post-tag">', '</span>'); ?></ul>
  <?php if (has_post_thumbnail()) { ?>
    <?php the_post_thumbnail(); ?>
  <?php } ?>
  <p class="post-content"><?php the_content(); ?></p>
</article>
