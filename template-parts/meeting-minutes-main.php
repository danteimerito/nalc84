<?php
        // $ourCurrentPage = get_query_var('paged');
        $post_args=array(
            'post_type'                => array('meeting_minutes'),
            'post_status'              => 'publish',
            'posts_per_page'           => 1,
            'orderby'                  => 'date',
            'order'                    => 'DESC',
            // 'paged'                    => $ourCurrentPage
        );
    
        $post_my_query = new WP_Query($post_args);

        if( $post_my_query->have_posts() ) 
        {
            while ($post_my_query->have_posts()) : $post_my_query->the_post(); 

            ?>
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

            <?php endwhile;  ?>
             
    <?php
        }
        wp_reset_query($post_my_query);
    ?>
