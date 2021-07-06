
<?php get_header(); ?>

<div class="row  color-reverse-darker"> 
    <div class="container page-header-spacer"> 
        <h3> <?php the_title(); ?> </h3>
    </div>
</div>


<div class="container archive-spacer">
    <div class="row"> 
        <?php 
        // Most recent  post in full
            get_template_part( 'template-parts/presidents-report', 'main')
        ?>
    </div>

    <?php
        $ourCurrentPage = get_query_var('paged');
        $post_args=array(
            'post_type'                => array('presidents-report'),
            'post_status'              => 'publish',
            // 'posts_per_page'           => 2,
            'orderby'                  => 'date',
            'order'                    => 'DESC',
            'paged'                    => $ourCurrentPage,
            'offset'                   => 1     
        );
    
        $post_my_query = new WP_Query($post_args);

        if( $post_my_query->have_posts() ) 
        {
            while ($post_my_query->have_posts()) : $post_my_query->the_post(); 

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


            <?php endwhile;  ?>
            <div class="contain-pagination">
                <?php echo paginate_links(array(
                    'total' => $post_my_query->max_num_pages 
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