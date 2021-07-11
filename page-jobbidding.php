
<?php get_header(); ?>

<!-- <div class="row  color-reverse-darker"> 
    <div class="container page-header-spacer"> 
        <h3> <?php the_title(); ?> </h3>
    </div>
</div> -->


<div class="container nav-spacer">

    <h1> Job Bidding </h1>
     
    <?php 
        // Most recent  post in full
        get_template_part( 'template-parts/jobbidding', 'resources');
    ?>

    

    <div class="row"> 
        <hr/>
        <?php 
            //  Loop of other president's reports
            get_template_part( 'template-parts/jobbidding', 'feed');
        ?>
    </div>


    
</div>


<?php 
    wp_footer();
    get_footer();
?>    
 
</body>
</html>