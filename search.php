            
<?php get_header(); ?>

<div class="row  color-reverse-darker"> 
    <div class="container page-header-spacer"> 
        <h3> 
            <?php
            $allsearch = new WP_Query("s=$s&showposts=0"); 
            if ($allsearch ->found_posts == 1) {
                echo $allsearch ->found_posts.' result for: ';
            } else { 
                echo $allsearch ->found_posts.' results for: ';
            }
            ?>
            "<?php the_search_query(); ?>" 
        
        </h3>  
    </div>
</div>

<div class="container archive-spacer">

      <div class="row">
      
      
<?php
      if( have_posts() ) 
        {
            while (have_posts()) : the_post(); 

            ?>

            <div class="sidebar-listing">
            <div class="item">
               
                    <div class="row">
                        <div class="item-news-contain"> 
                        
                        <div class="item-text-contain">
                            <div>
                            <div class="result-type">
                                        <?php 
                                            $post_type = get_post_type_object( get_post_type() ); 
                                            echo $post_type->labels->singular_name.':';
                                        ?>
                                    </div>
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
                                    <div class="waves-effect waves-light btn right"> View </div>
                                </a>
                            </div>
                        </div>
                        </div>
                            
                    </div>
                </div>
            
        </div>


            <?php endwhile;  ?>
            <div class="contain-pagination">
                <?php echo paginate_links( array(
                    'base'          => str_replace( 9999999999, '%#%', esc_url( get_pagenum_link( 9999999999 ) ) ),
                    'format'        => '?paged=%#%',
                    'current'       => max( 1, get_query_var( 'paged' ) ),
                    'total'         => $wp_query->max_num_pages,
                    'end_size'      => 0,
                    'mid_size'      => 1,
                    'prev_next'     => False
                ) ); ?>
            </div> 
            
    <?php
        }

        ?>



     
      </div>
    </div>



<?php 
    wp_footer();
    get_footer();
?>    
 
</body>
</html>