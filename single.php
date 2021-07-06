
<?php get_header(); ?>

<div class="container nav-spacer">
    <div class="row">
        <div class="col l9">

            <h5 class="byline">Published <?php the_time("F jS, Y"); ?> by 
                <?php 
                    $display_name = get_the_author_meta( 'display_name', $post->post_author );
                    echo $display_name;
                ?>
            </h5>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?> 
            
        </div>

        <div class="col l3 offset-l1"> </div>
    </div>



            
    <?php wp_reset_query($post_my_query); ?>
    
    </div>






</div>

<?php 
    wp_footer();
    get_footer();
?>    
</body>
</html>