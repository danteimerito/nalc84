
<?php get_header(); ?>

<div class="row  color-reverse-darker"> 
    <div class="container page-header-spacer"> 
        <h3> <?php the_title(); ?> </h3>
    </div>
</div>


<div class="container archive-spacer">
    <?php
        $ourCurrentPage = get_query_var('paged');
        $post_args=array(
            // 'post_type'                => 'any',
            'post_type'                => array('documents'),
            'post_status'              => 'publish',
            'posts_per_page'           => 8,
            'orderby'                  => 'title',
            'order'                    => 'ASC',
            // 'paged' => $ourCurrentPage



            'paged' => get_query_var('paged') ? get_query_var('paged') : 1 
        );
    
        $post_my_query = new WP_Query($post_args);

        if( $post_my_query->have_posts() ) 
        {
            while ($post_my_query->have_posts()) : $post_my_query->the_post(); 

            ?>

            <div class="">
            <div class="item">
               
                    <div class="row">
                        <div class="item-news-contain"> 
                        
                        <div class="item-text-contain">
                            <div>
                                <h2>
                                    <a href="<?php the_permalink();?>">
                                        <?php echo get_the_title( $post_my_query->ID );?>
                                    </a>
                                </h2>
                               
                                <p>
                                    <a href="<?php the_permalink();?>">
                                        <?php echo get_the_excerpt( $post_my_query->ID ); ?>
                                    </a>
                                </p>
                            </div> 
                        </div>
                            
                        <div class="col l3 m12 s12 item-button-contain">
                            <div class="details-btn hide800">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="waves-effect waves-light btn right">View</div>
                                </a>
                            </div>
                        </div>
                        </div>
                            
                    </div>
                </div>
              
            </div>


            <?php endwhile;  ?>
            <div class="contain-pagination">
            <?php echo paginate_links(array(
                    'total' => $post_my_query->max_num_pages,
                    'end_size'      => 0,
                    'mid_size'      => 1,
                    'prev_next'     => False
                )); ?>
            </div> 
    <?php
        }
        wp_reset_query($post_my_query);
    ?>

</div>


<?php 
    wp_footer();
    get_footer();
?>    
 
</body>
</html>