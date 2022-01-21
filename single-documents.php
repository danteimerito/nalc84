
<?php get_header(); ?>

<div class="container nav-spacer">
    <div class="row">
        <div class="col l9">

            <h1><?php the_title(); ?></h1>
            <?php 
                get_template_part( 'template-parts/content', 'single')
            ?>
            
            <div class="document-layout"> 
                <div> 
                   
                    
                    <a class="document-graphic" href="<?php the_field('file') ?>" target="blank">
                        <img src="<?php the_field('cover-photo'); ?>" />
                    </a>
                </div>
                <div class="document-details">
                    <?php the_content(); ?>

                    <div class="all-events-button">

                        <a class="" href="<?php the_field('file') ?>" target="blank">
                            <div class="btn document-button"> View Document </div>
                        </a>

                    </div>
                    
                </div>
                
            </div>

        </div>

        <div class="col l3 offset-l1"> </div>

    </div>
</div>

<?php 
    wp_footer();
    get_footer();
?>

</body>
</html>