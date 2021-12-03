<?php /* Template Name: FrontPage */ ?>
<?php get_header(); ?>

<main>

<div id="front-page-container">

<div class="splash-image">
<?php 
        $args = array(
        'post_type' => 'home_content',
        'name' => 'splash-image'
        );
    
        $loop = new WP_Query($args);

        if($loop->have_posts()) {
        
            while($loop->have_posts()) {
                $loop->the_post();
                the_post_thumbnail('thumbnail');
                the_content();
        
            }
            } ?>
</div>

<div class="desc">
    <?php if ( have_posts()) {
        while( have_posts()) { 
        the_post();   
        the_content();
        }
        } ?>
</div>


    <div class="boxbox">

        <div class="box">
        <?php 
        $args = array(
        'post_type' => 'home_content',
        'name' => 'donate'
        );
    
        $loop = new WP_Query($args);

        if($loop->have_posts()) {
        
            while($loop->have_posts()) {
                $loop->the_post();
                the_post_thumbnail('thumbnail');
                the_content();
        
            }
            } ?>
    
        </div>

        <div class="box">
        <?php 
        $args = array(
        'post_type' => 'home_content',
        'name' => 'help'
        );
    
        $loop = new WP_Query($args);

        if($loop->have_posts()) {
        
            while($loop->have_posts()) {
                $loop->the_post();
                the_post_thumbnail('thumbnail');
                the_content();
        
            }
            } ?>

</div> 
        

    </div>


<div class="boxbox">
    <div class="box social-media">
    <?php 
        $args = array(
        'post_type' => 'home_content',
        'name' => 'instagram'
        );
    
        $loop = new WP_Query($args);

        if($loop->have_posts()) {
        
            while($loop->have_posts()) {
                $loop->the_post();
                the_post_thumbnail('thumbnail');
                the_content();
        
            }
            } ?>
    </div>
    <div class="box social-media">
        
    <?php 
        $args = array(
        'post_type' => 'home_content',
        'name' => 'facebook'
        );
    
        $loop = new WP_Query($args);

        if($loop->have_posts()) {
        
            while($loop->have_posts()) {
                $loop->the_post();
                the_post_thumbnail('thumbnail');
                the_content();
        
            }
            } ?>

    </div>
</div>

<?php if(get_theme_mod('setting_show_feature', 0)): ?>
<div class="sponsors"> 
<h3><?php echo get_theme_mod('setting_feature_title'); ?></h3>
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('setting_feature_image')); ?>" alt="featured_img">
</div>
<?php endif; ?>
    </div>   
</main>



<?php get_footer(); ?>
    