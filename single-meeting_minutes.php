
<?php get_header(); ?>

<div class="container nav-spacer">
    <div class="row">
        <div class="col l9">

            <h5 class="byline">Published <?php the_time("F jS, Y"); ?> by 
                <?php 
                    $display_name = get_the_author_meta( 'display_name', $post->post_author );
                    echo $display_name;
                ?>
            </h5>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?> 
            
        </div>

        <div class="col l3 offset-l1"> </div>

    </div>


    <hr/>



    <div class="row"> 
    

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


        <!-- <h2>Further Reading </h2> -->
        <div class="other-posts-contain"> 
            

        <?php

        if( $post_my_query->have_posts() ) 
        {
            while ($post_my_query->have_posts()) : $post_my_query->the_post(); 

            ?>
            
            
            <div class="suggested-item">
               
                    
                            
                                <h3>
                                    <a href="<?php the_permalink();?>">
                                        <?php echo get_the_title( $post_my_query->ID );?>
                                    </a>
                                </h3>
                                
                                <p>
                                    <?php 
                                        echo get_the_excerpt( $post_my_query->ID ); ?>
                                </p>
                                
                            
                            <div class="col l12 m12 s12">
                                <div class="details-btn">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="waves-effect waves-light btn">Read More</div>
                                    </a>
                                </div>
                            </div>
                       
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