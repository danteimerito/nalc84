       
        <?php get_header(); ?>
        
        <div class="sky parallax-spacer">
          <div class="contain-full-width-graphic">
            <div class="container graphic-main">
              <img alt="Photo of NALC Branch 84 Building" src="<?php echo get_template_directory_uri()."/assets/images/nalc84-building_1400px_optimized.png" ?>" />
            </div>
          </div>
        </div>

      <div class="row color-reverse-darker">
        <div class="container">
          <div class="text-bold-center">
            <h1>National Association of Letter Carriers</h1>
            <h3>Branch 84, Pittsburgh, PA</h3>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row contain-featured-items">

          <?php

            // The Query
            query_posts( array ( 
              'post_type' => 'any', 
              'post_status' => 'publish', 
              'category_name' => 'featured-post', 
              'posts_per_page' => -1
            ) );

            // The Loop
            while ( have_posts() ) : the_post(); ?>
         

            <div class="featured-pad">
            
              <a href="<?php the_permalink();?>">
                <h2> <?php the_title(); ?> </h2>
              </a> 

              <a href="<?php the_permalink();?>">
                <?php the_excerpt(); ?>
              </a> 

              <div class="details-btn hide800">
                <a href="<?php the_permalink();?>">
                  <div class="waves-effect waves-light btn"> Read More </div>
                </a> 
              </div>
            
          </div>

            <?php endwhile;

            // Reset Query
            wp_reset_query();

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