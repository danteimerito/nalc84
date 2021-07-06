
<?php get_header(); ?>

<div class="container nav-spacer">
    <div class="row">
        <div class="col l8">
            <h1><?php the_title(); ?></h1>
            <p>Published on <?php the_time("F jS, Y"); ?> by 
            
            <?php 
                // $author = get_the_author(); 
                // echo $author;
                // the_author();
                $display_name = get_the_author_meta( 'display_name', $post->post_author );
                echo $display_name;
            ?>
            </p>

            <?php the_content(); ?>  
        </div>

        <div class="col l3 offset-l1">
            <div class="row">
                <h2> Other News </h2>            
            </div>
        <?php
        $post_args=array(
            'type'                     => 'post',
            'post_status'              => 'publish',
            'posts_per_page'           => 3,
            'orderby'                  => 'date',
            'order'                    => 'DESC',

        );

        $post_my_query = null;
        $post_my_query = new WP_Query($post_args);

        if( $post_my_query->have_posts() ) 
        {
            while ($post_my_query->have_posts()) : $post_my_query->the_post(); 
            ?>
           
            <div class="sidebar-listing">
            <div class="sidebar-item">
                
                    <div class="row main">
                        
                        <div class="col l12">
                            <div>
                                <h3>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo get_the_title( $post_my_query->ID );?>
                                    </a>
                                </h3>
                                <div>
                                    <p>
                                        <?php echo get_the_excerpt( $post_my_query->ID ); ?>
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
            </div>
        </div>


            <?php endwhile; 
        }
        wp_reset_query($post_my_query);
    ?>























        </div>


    </div>
</div>







<?php 
    wp_footer();
    get_footer();
?>    
</body>
</html>