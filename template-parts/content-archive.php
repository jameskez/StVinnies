<article> 
<h2><?php the_title(); ?></h2>
<div><?php the_category(); ?></div><?php the_tags(); ?></div>
<p><?php the_excerpt(); ?></p>
<span><?php echo get_the_date(); ?></span>
<a href="<?php the_permalink(); ?>">Read More &rarr;</a>
</article>





