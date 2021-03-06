<?php
        $ourCurrentPage = get_query_var('paged');
        $currentID = get_the_ID(); // get current post ID and convert it into a variable
        $post_args=array(
            'post_type'                => array('presidents-report'),
            'post_status'              => 'publish',
            'posts_per_page'           => 3,
            'orderby'                  => 'date',
            'order'                    => 'DESC',
            // 'paged'                    => $ourCurrentPage,
            'offset'                   => 1,
            'post__not_in' => array( $currentID )     
        );
    
        $post_my_query = new WP_Query($post_args);
        ?>

        <div class="row further-reading">
            <div class="other-posts-contain"> 
                <?php 
                    if( $post_my_query->have_posts() ) 
                    {
                        while ($post_my_query->have_posts()) : $post_my_query->the_post(); 
                ?>
                <div class="suggested-item item">
                    <h3>
                        <a href="<?php the_permalink();?>">
                            <?php echo get_the_title( $post_my_query->ID );?>
                        </a>
                    </h3>    
      
                </div>
                <?php endwhile; } ?>
            </div>
            </div>

            
    <?php
        
        wp_reset_query($post_my_query);
    ?>