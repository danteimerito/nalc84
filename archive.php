       
        <?php 
            get_header();
        ?>
        
    <div class="container nav-spacer">
        <?php 
        // wordpress 'posts' loop
            if( have_posts() ){
                get_post_types();
                while( have_posts() ){
                    the_post();
                    // the_title();
                    // the_content();
                }
            }
        ?>

        <?php  
            // $new_query = new WP_Query('post_type=events&posts_per_page=-1');
            // or ...
            // $new_query = new WP_Query(array(
            //     'post_type'			=> 'events',
            //     'posts_per_page'	=> -1,
            //     'meta_key'			=> 'event_datetime',
            //     'orderby'			=> 'meta_value',
            //     'order'				=> 'ASC'
            // ));
            
            
            while(have_posts()) : 
                the_post();
                
                // the_title();
                // the_content();
                // the_field("event_date");
                // the_date();
                // the_time();
                // echo $eventDate->format('M');
                
        ?>
        <?php 
            // retireve event datetime string and convert to datestamp
            // $dt = get_field('event_datetime');
            // $toTime = strtotime($dt);
            // $type = gettype($toTime);
        ?>
            
            

        <ul class="event-listing">
            <div class="event-item">
                    <div class="row event-list-item">
                        <div class="col l12">
                            <div class="event">
                                <h2><?php the_title(); ?></h2>
                                <div>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                            <div class="col l12 m12 s12">
                                <div class="details-btn right">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="waves-effect waves-light btn right">Details</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </ul>

        <?php endwhile; 
            echo paginate_links();
        ?>
        

    </div>
  
    <?php 
        wp_footer();
        get_footer();
    ?>    
 
</body>
</html>