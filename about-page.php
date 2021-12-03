<?php /* template name: AboutPage */ ?>
<?php get_header(); ?>

<main>
    <div class="container"> 

       <h1> <?php the_title() ?> </h1> 

        <div id="about1" class="about"> 
            <div class="left">
            <?php 
        $args = array(
        'post_type' => 'about_content',
        'name' => 'about-1'
        );
    
        $loop = new WP_Query($args);

        if($loop->have_posts()) {
        
            while($loop->have_posts()) {
                $loop->the_post();  
                the_title(); 
                the_post_thumbnail('thumbnail');
                the_content();
                
            }
            } ?>
         </div>

    <div>
    <?php 
        $args = array(
        'post_type' => 'about_content',
        'name' => 'about-2'
        );
    
        $loop = new WP_Query($args);

        if($loop->have_posts()) {
        
            while($loop->have_posts()) {
                $loop->the_post();  
                the_title(); 
                the_post_thumbnail('thumbnail');
                the_content();
                
            }
            } ?>
    </div>

        </div> 

<div class="about">
    <div class="left">
    <?php 
        $args = array(
        'post_type' => 'about_content',
        'name' => 'about-3'
        );
    
        $loop = new WP_Query($args);

        if($loop->have_posts()) {
        
            while($loop->have_posts()) {
                $loop->the_post();  
                the_title(); 
                the_post_thumbnail('thumbnail');
                the_content();
                
            }
            } ?>
    </div>
    <div>
    <?php 
        $args = array(
        'post_type' => 'about_content',
        'name' => 'about-4'
        );
    
        $loop = new WP_Query($args);

        if($loop->have_posts()) {
        
            while($loop->have_posts()) {
                $loop->the_post();  
                the_title(); 
                the_post_thumbnail('thumbnail');
                the_content();
                
            }
            } ?>
    </div>
</div>

</div>

</main>

<?php get_footer(); ?>