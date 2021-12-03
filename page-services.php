<?php get_header(); ?>

<main>

    <div class="container">
        <?php if(have_posts()) {
        while(have_posts()) {
            the_post(); ?>
            <h1> <?php the_title();  ?> </h1> <?php
            the_content();
        }
        } ?>

        <div class="donation-services"> 
        <?php 
        $args = array(
        'post_type' => 'service_options',
        'tax_query' => array(
        array(
            'taxonomy' => 'service_option',
            'field' => 'slug',
            'terms' => 'donate',       
        )
        )
        );

$loop = new WP_Query($args);

if($loop->have_posts()) {

    while($loop->have_posts()) {
        $loop->the_post(); ?>
        <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
        <?php
        the_post_thumbnail('thumbnail');
        the_content();

    }
    } ?>
 </div>

 <hr>

        <div class="support-services"> 
        <?php 
        $args = array(
        'post_type' => 'service_options',
        'tax_query' => array(
        array(
            'taxonomy' => 'service_option',
            'field' => 'slug',
            'terms' => 'support',       
        )
        )
        );

$loop = new WP_Query($args);

if($loop->have_posts()) {

    while($loop->have_posts()) {
        $loop->the_post();?>
        <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
        <?php
        the_post_thumbnail('thumbnail');
        the_content();

    }
    } ?>
</div> 
  </div>

</main>
<?php get_footer(); ?>