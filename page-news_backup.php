
<?php get_header(); ?>


<div class="container nav-spacer">

<h1> News </h1>

    <?php
        $post_args=array(
            'post_type'                => 'any',
            // 'post_type'                => array('post', 'presidents-report'),
            'post_status'              => 'publish',
            // 'posts_per_page'           => -1,
            'orderby'                  => 'date',
            'order'                    => 'DESC',
        );
        $exclude = array(
            // 'post_type' => 'page'
            'news', 'about'
        );

        // $post_my_query = null;
        $post_my_query = new WP_Query($post_args);


        if( $post_my_query->have_posts() ) 
        {
            while ($post_my_query->have_posts()) : $post_my_query->the_post(); 

            // if ( is_page() && ! empty($exclude) && (
            //     in_array($post_my_query->post_name, (array)$exclude) ||
            //     in_array($post_my_query->post_title, (array)$exclude)
            // ) ) continue; // skip

            ?>
           
            <div class="sidebar-listing">
            <div class="item">
               
                    <div class="row">
                        
                        <div class="col l12">
                            <div>
                                <h2>
                                    <a href="<?php the_permalink();?>">
                                        <?php echo get_the_title( $post_my_query->ID );?>
                                    </a>
                                </h2>
                                <div>
                                    <p>
                                        <?php echo get_the_excerpt( $post_my_query->ID ); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col l12 m12 s12">
                                <div class="details-btn right">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="waves-effect waves-light btn right">Read More</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
              
            </div>
        </div>


            <?php endwhile; 
            echo paginate_links();
        }
        wp_reset_query($post_my_query);
    ?>

<h3> Other Stuff </h3>
<?php 

    $ourCurrentPage = get_query_var('paged');
    $otherStuff = new WP_Query(array(
        'post_type' => 'any',
        'category_name' => 'featured-post',
        'posts_per_page' => 3,
        'paged' => $ourCurrentPage
    ));

    if ($otherStuff->have_posts()) :
        while($otherStuff->have_posts()) :
            $otherStuff->the_post();
            ?> <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> <?php
        endwhile;
        // previous_posts_link();
        // next_posts_link('Next page', $otherStuff->max_num_pages);
        echo paginate_links(array(
           'total' => $otherStuff->max_num_pages 
        ));
    endif;
?>

</div>



<?php 
    wp_footer();
    get_footer();
?>    
 
</body>
</html>