
<?php get_header(); ?>

<div class="container nav-spacer">
    <div class="row">
        <div class="col l9">

            
            <div class="sans-above-header-large"> <?php the_field('meeting_date'); ?> </div>
            <h1><?php the_title(); ?></h1>
            
            
            <?php the_content(); ?> 

            <h5 class="byline-below-content">— Published <?php the_time("F jS, Y"); ?> by 
                <?php 
                    $display_name = get_the_author_meta( 'display_name', $post->post_author );
                    echo $display_name;
                ?>
            </h5>
            
        </div>

        <div class="col l3 offset-l1"> </div>

    </div>



    <div class="row further-reading">

    <?php
        $ourCurrentPage = get_query_var('paged');
        $currentID = get_the_ID(); // get current post ID and convert it into a variable
        $post_args=array(
            'post_type'                => array('meeting_minutes'),
            'post_status'              => 'publish',
            'posts_per_page'           => 3,
            'orderby'                  => 'date',
            'order'                    => 'DESC',
            // 'paged'                    => $ourCurrentPage,
            // 'offset'                   => 1,
            'post__not_in' => array( $currentID )     
        );
    
        $post_my_query = new WP_Query($post_args);
        ?>

        <div class="other-posts-contain"> 

        
        <?php

        if( $post_my_query->have_posts() ) 
        {
            while ($post_my_query->have_posts()) : $post_my_query->the_post(); 

            ?>
            
            
            <div class="suggested-item item">
               
                    
                                <div class="suggestion-detail"> <?php the_field('meeting_date'); ?> </div>
                                <h3>
                                    <a href="<?php the_permalink();?>">
                                        <?php echo get_the_title( $post_my_query->ID );?>
                                    </a>
                                </h3>

                                
                            
                                
                            
                            
                       
                            </div>
              
          


            <?php endwhile; } ?>

            </div>

            
    <?php
        
        wp_reset_query($post_my_query);
    ?>
    
    </div>






</div>

<?php 
    wp_footer();
    get_footer();
?>    
</body>
</html>