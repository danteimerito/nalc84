
<?php get_header(); ?>


<?php
        $ourCurrentPage = get_query_var('paged');
        $post_args=array(
            'post_type'                => array('retirement_content'),
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



<div class="container nav-spacer">
      <div class="row">
        <h1><?php the_title(); ?></h1>

        <div class="col l5 m11">
            <?php the_field('page_left') ?>
        </div>

        <div class="col l5 m11 offset-l1">
          <?php the_field('page_right') ?>
        </div>

      </div>

      <div class="row publications">
        <h2>Retirement Publications</h2>

        <ul>

          <li>
            <div class="pub-image">
              <a href="<?php the_field('pub_1_pdf') ?>" target="blank">
                <img src="<?php the_field('pub_1_image') ?>" />
              </a>
            </div>
            <a href="<?php the_field('pub_1_pdf') ?>" target="blank" class="waves-effect waves-light btn-small pub-button">View</a>
            <div class="pub-description">
            <?php the_field('pub_1_description') ?>
            </div>
          </li>

          <li>
            <div class="pub-image">
              <a href="<?php the_field('pub_2_pdf') ?>" target="blank">
                <img src="<?php the_field('pub_2_image') ?>" />
              </a>
            </div>
            <a href="<?php the_field('pub_2_pdf') ?>" target="blank" class="waves-effect waves-light btn-small pub-button">View</a>
            <div class="pub-description">
            <?php the_field('pub_2_description') ?>
            </div>
          </li>

          <li>
            <div class="pub-image">
              <a href="<?php the_field('pub_3_pdf') ?>" target="blank">
                <img src="<?php the_field('pub_3_image') ?>" />
              </a>
            </div>
            <a href="<?php the_field('pub_3_pdf') ?>" target="blank" class="waves-effect waves-light btn-small pub-button">View</a>
            <div class="pub-description">
            <?php the_field('pub_3_description') ?>
            </div>
          </li>

          <li>
            <div class="pub-image">
              <a href="<?php the_field('pub_4_pdf') ?>" target="blank">
                <img src="<?php the_field('pub_4_image') ?>" />
              </a>
            </div>
            <a href="<?php the_field('pub_4_pdf') ?>" target="blank" class="waves-effect waves-light btn-small pub-button">View</a>
            <div class="pub-description">
            <?php the_field('pub_4_description') ?>
            </div>
          </li>
  
        </ul>
      </div>
    </div>
</div>

    <?php endwhile;  ?>
             
             <?php
                 }
                 wp_reset_query($post_my_query);
             ?>


<?php 
    wp_footer();
    get_footer();
?>    
 
</body>
</html>