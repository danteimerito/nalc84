
</div>


<?php
        $ourCurrentPage = get_query_var('paged');
        $post_args=array(
            'post_type'                => array('footer_content'),
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

<?php endwhile;  ?>
             
             <?php
                 }
                 wp_reset_query($post_my_query);
             ?>