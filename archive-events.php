       
        <?php get_header(); ?>

        <div class="row  color-reverse-darker"> 
            <div class="container page-header-spacer"> 
                <h3> Events </h3>
            </div>
        </div>

    <div class="container events-spacer">
   
        <?php  
            // $new_query = new WP_Query('post_type=events&posts_per_page=-1');
            // or ...
            $ourCurrentPage = get_query_var('paged');
            $post_args = array(
                'post_type'			=> 'events',
                'post_status'       => 'publish',
                'posts_per_page'	=> -1,
                'meta_key'			=> 'event_datetime',
                'orderby'			=> 'meta_value',
                'order'				=> 'ASC',
                'paged' => $ourCurrentPage
            );
            $post_my_query = new WP_Query($post_args);

        if( $post_my_query->have_posts() ) {
            
            while($post_my_query->have_posts()) : $post_my_query->
                the_post();                
        ?>
        <?php 
            // retireve event datetime string and convert to datestamp
            $dt = get_field('event_datetime');
            $toTime = strtotime($dt);
            $type = gettype($toTime);
        ?>

        <div class="event-listing">
            <div class="event-item">
                    <div class="row event-list-item-contain">
                        <a href="<?php the_permalink(); ?>">
                            <div class="calendar">
                                <div class="year-wkdy">
                                <?php  ?>
                                    <div class="wkdy">
                                        <?php 
                                        $d = date('D', $toTime);
                                        echo $d;
                                        ?>
                                    </div>
                                    <div class="year">
                                    <?php 
                                        $d = date('Y', $toTime);
                                        echo $d; 
                                    ?>
                                    </div>
                                </div>
                                <div class="stripes-cal">.</div>
                                <div class="date">
                                    <?php 
                                        $d = date('d', $toTime);
                                        echo $d;
                                    ?>
                                </div>
                                <div class="month">                            <?php 
                                        $d = date('M', $toTime);
                                        echo $d;
                                    ?>   
                                </div>
                            </div>
                        </a>
                        
                        <div class="event-list-item"> 
                            <div class="event">
                                <h2>
                                    <a href="<?php the_permalink(); ?>">    
                                        <?php the_title(); ?>
                                    </a> 
                                </h2>
                                <div>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                            
                        



            
                                <div class="details-btn right">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="waves-effect waves-light btn right">Details</div>
                                    </a>
                                </div>
                        </div>  

                    </div>
            </div>
        </div>

        <?php endwhile; 
        }
        ?>
        <div class="contain-pagination">
                <?php echo paginate_links(array(
                    // 'total' => $post_my_query->max_num_pages,
                    
                    // 'base'          => str_replace( 9999999999, '%#%', esc_url( get_pagenum_link( 9999999999 ) ) ),
                    // 'format'        => '?paged=%#%',
                    // 'current'       => max( 1, get_query_var( 'paged' ) ),
                    // 'total'         => $wp_query->max_num_pages,
                    // 'end_size'      => 0,
                    // 'mid_size'      => 1,
                    // 'prev_next'     => False
                )); ?>
        </div>

        <?php
        
        wp_reset_query($post_my_query);
    ?>
        
    </div>

<?php 
        wp_footer();
        get_footer();
    ?>    
 
</body>
</html>