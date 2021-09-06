
<?php get_header(); ?>

<div class="container nav-spacer">
     
    <?php 
        // Most recent  post in full
        get_template_part( 'template-parts/presidents-report', 'main');
    ?>

    <?php 
        //  Loop of other president's reports
        get_template_part( 'template-parts/presidents-report', 'suggested');
    ?>
    
</div>


<?php 
    wp_footer();
    get_footer();
?>    
 
</body>
</html>