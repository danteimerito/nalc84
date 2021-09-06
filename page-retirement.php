
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
        <h1>Retirement</h1>

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
              <a href="<?php echo get_site_url() ?>/wp-content/uploads/2021/07/Preparing-for-Retirement.pdf" target="blank">
                <img src="<?php echo get_site_url() ?>/wp-content/uploads/2021/07/preparing-for-retirement.png" />
              </a>
            </div>

            <a href="<?php echo get_site_url() ?>/wp-content/uploads/2021/07/Preparing-for-Retirement.pdf" target="blank" class="waves-effect waves-light btn-small pub-button">View</a>

            <div class="pub-description">
              Preparing For Retirement; Checklist for letter carriers during their final year at work</div>

          </li>


          <li>
            <div class="pub-image">
              <a href="<?php echo get_site_url() ?>/wp-content/uploads/2021/07/when-a-retired-letter-carrier-dies.pdf" target="blank">
                <img src="<?php echo get_site_url() ?>/wp-content/uploads/2021/07/when-a-retired-letter-carrier-dies.png"/>
              </a>
            </div>
            <a href="<?php echo get_site_url() ?>/wp-content/uploads/2021/07/when-a-retired-letter-carrier-dies.pdf" target="blank" class="waves-effect waves-light btn-small pub-button">View</a>
            <div class="pub-description"> When a Retired Letter Carrier Dies... </div>
          </li>

          <li>
            <div class="pub-image">
              <a href="<?php echo get_site_url() ?>/wp-content/uploads/2021/07/when-an-active-letter-carrier-dies.pdf" target="blank">
                <img src="<?php echo get_site_url() ?>/wp-content/uploads/2021/07/when-an-active-letter-carrier-dies.png" />
              </a>
            </div>
            <a href="<?php echo get_site_url() ?>/wp-content/uploads/2021/07/when-an-active-letter-carrier-dies.pdf" target="blank" class="waves-effect waves-light btn-small pub-button">View</a>
            <div class="pub-description"> When an Active Letter Carrier Dies... </div>
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
























<footer class="page-footer">
    <div class="container">
        <div class="row">

            <div class="col l4 m6 s12 footer-section mailing-address">
                <div class="footer-icon-headers">
                    <img class="icon-envelope" alt="envelope icon" src="<?php echo get_site_url(); ?>/wp-content/themes/nalc84/assets/images/icon-envelope.svg"/>
                    <h4 class="white-text">Mailing Address</h4>
                </div>
                <p class="grey-text text-lighten-4 mailing-address">
                    <?php the_field('mailing_address') ?>
                </p>
            </div>

            <div class="col l4 m6 s12 footer-section phone-numbers">
                <div class="footer-icon-headers">
                    <img class="icon-phone" alt="phone icon" src="<?php echo get_site_url(); ?>/wp-content/themes/nalc84/assets/images/icon-phone.svg"/>
                    <h4 class="white-text">Phone Numbers</h4>
                </div>
                <?php the_field('phone_numbers') ?>
            </div>

            <div class="col l3 m4 s12 footer-section office-hours">
                <div class="footer-icon-headers">
                    <img class="icon-clock" alt="clock icon" src="<?php echo get_site_url(); ?>/wp-content/themes/nalc84/assets/images/icon-clock.svg"/>
                    <h4 class="white-text">Office Hours</h4>
                </div>
                <?php the_field('office_hours') ?>
            </div>

        </div>

        <div class="row">
            <a href="<?php echo get_site_url() ?>/privacy-policy">Privacy Policy</a>
        </div>
      
    </div>
    
    <div class="footer-copyright">

   
        <div class="container footer-sub">
            
            <div class="nalc-copyright">Copyright © 2020 - <?php echo date("Y"); ?> NALC Branch 84</div>
            <a href="<?php echo get_site_url() ?>/">
                <img id="logo-sticky" src="<?php echo get_template_directory_uri() ?>/assets/images/nalc-logo-badge-type-2.svg" alt="NALC Logo" />
            </a>
        </div>
    </div>
</footer>



















<?php 
    wp_footer();
    get_footer();
?>    
 
</body>
</html>