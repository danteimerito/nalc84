
<?php get_header(); ?>

<div class="row  color-reverse-darker"> 
    <div class="container page-header-spacer"> 
        <h3> <?php the_title(); ?> </h3>
    </div>
</div>





<div class="container nav-spacer">
      <div class="row">
        <h1>Retirement</h1>

        <div class="col l5 m11">
          <h3>The Office of Personnel Management</h3>
          <p>The Office of Personnel Management (OPM) acts as the personnel office for retired letter carriers, and is the agency responsible for administering retirement, health and life insurance benefits. Before you call or write to OPM, be sure to have your Civil Service Annuity (CSA) number ready. OPM can be reached by retirees who have a CSA number by calling <a href="tel:888-767-6738">888-767-6738</a>  or <a href="tel:724-794-2005">724-794-2005</a>, 7:40 a.m.-5 p.m. Monday through Friday (Eastern time), or <a href="tel:202-606-0500">202-606-0500</a> in the Washington, DC, area. Mail your written inquiries to Office of Personnel Management, Retirement Operations Center, Boyers, PA 16017 (unless OPM has specified a different address for a specific action such as health benefits open season).</p>
        </div>

        <div class="col l5 m11 offset-l1">
          <h3>Retirement Contact Information</h3>
          <p>The NALC Retirement Department can be reached by calling <a href="tel:800-424-5186">800-424-5186</a> (toll free) Monday, Wednesday or Thursday, 10 a.m.-Noon or 2 p.m.-4 p.m. (Eastern time), or by calling the NALC Headquarters switchboard at <a href="tel:202-393-4695">202-393-4695</a>  Monday through Friday, 9 a.m.-4:30 p.m. (Eastern time) and asking for the Retirement Department.</p>

          <p>The USPS HR Shared Service Center (HRSSC) can be reached by current employees who are planning or applying for retirement by calling <a href="tel:877-477-3273">877-477-3273</a>, option 5.</p>
        </div>

      </div>

      <div class="row publications">
        <h2>Retirement Publications</h2>
        <ul>
          <li>
            <div class="pub-image">
              <a href="<?php echo get_site_url() ?>/wp-content/uploads/2021/07/RetirementGuide-FERS.pdf" target="blank">
                <img src="<?php echo get_site_url() ?>/wp-content/uploads/2021/07/questions-and-answers-on-fers.png" />
              </a>
            </div>
            <a href="<?php echo get_site_url() ?>/wp-content/uploads/2021/07/RetirementGuide-FERS.pdf" target="blank" class="waves-effect waves-light btn-small pub-button">View</a>
            <div class="pub-description">
              Questions & Answers on FERS Federal Employees Retirement System
            </div>
          </li>
          <li>
            <div class="pub-image">
              <a href={pdf2} target="blank">
                <Image fluid={data.pubPreparingForRetirement.childImageSharp.fluid} />
              </a>
            </div>

            <a href={pdf2} target="blank" class="waves-effect waves-light btn-small pub-button">View</a>
            <a href={pdf2} class="waves-effect waves-light btn-small pub-button" download>Download</a>

            <div class="pub-description">
              Preparing For Retirement; Checklist for letter carriers during their final year at work</div>

          </li>
          <li>
            <div class="pub-image">
              <a href={pdf3} target="blank">
                <Image fluid={data.pubRetiredDies.childImageSharp.fluid} />
              </a>
            </div>
            <a href={pdf3} target="blank" class="waves-effect waves-light btn-small pub-button">View</a>
            <a href={pdf3} class="waves-effect waves-light btn-small pub-button" download>Download</a>
            <div class="pub-description">
              When a Retired Letter Carrier Dies...<br /> Step-by-step Instructions for Survivors to Ensure the Continuation of Benefits
            </div>


          </li>
          <li>
            <div class="pub-image">
              <a href={pdf4} target="blank">
                <Image fluid={data.pubActiveDies.childImageSharp.fluid} />
              </a>
            </div>
            <a href={pdf4} target="blank" class="waves-effect waves-light btn-small pub-button">View</a>
            <a href={pdf4} class="waves-effect waves-light btn-small pub-button" download>Download</a>
            <div class="pub-description">
              When an Active Letter Dies...<br /> Step-by-step Instructions for Survivors to Ensure the Payment of Benefits
              </div>

          </li>
        </ul>

      </div>
    </div>
</div>






<div class="container archive-spacer">
    <?php
        $ourCurrentPage = get_query_var('paged');
        $post_args=array(
            'post_type' => 'any', 
            'post_status' => 'publish', 
            'category_name' => 'cca',
            'posts_per_page'           => 8,
            'orderby'                  => 'date',
            'order'                    => 'DESC',
            'paged' => $ourCurrentPage
        );
    
        $post_my_query = new WP_Query($post_args);

        if( $post_my_query->have_posts() ) 
        {
            while ($post_my_query->have_posts()) : $post_my_query->the_post(); 

            ?>

            <div class="">
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
                                    <?php echo get_the_excerpt( $post_my_query->ID ); ?>
                                </p>
                            </div> 
                        </div>
                            
                        <div class="col l3 m12 s12 item-button-contain">
                            <div class="details-btn">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="waves-effect waves-light btn right">Read More</div>
                                </a>
                            </div>
                        </div>
                        </div>
                            
                    </div>
                </div>
              
            </div>


            <?php endwhile;  ?>
            <div class="contain-pagination">
                <?php echo paginate_links(array(
                    'total' => $post_my_query->max_num_pages,
                    // 'base'          => str_replace( 9999999999, '%#%', esc_url( get_pagenum_link( 9999999999 ) ) ),
                    // 'format'        => '?paged=%#%',
                    // 'current'       => max( 1, get_query_var( 'paged' ) ),
                    // 'total'         => $wp_query->max_num_pages,
                    'end_size'      => 0,
                    'mid_size'      => 1,
                    'prev_next'     => False
                )); ?>
            </div> 
    <?php
        }
        wp_reset_query($post_my_query);
    ?>

</div>


<?php 
    wp_footer();
    get_footer();
?>    
 
</body>
</html>