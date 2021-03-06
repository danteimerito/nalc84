<?php 
//  Inject css style sheets with wp core
    function nalc84_register_styles(){
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('nalc84-custom-css', get_template_directory_uri()."/style.css", array("nalc84-materialize-css"), $version, 'all');
        wp_enqueue_style('nalc84-materialize-css',"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css", array(), '1.0.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'nalc84_register_styles');
    //  Inject JS scripts with wp core
    function nalc84_register_scripts(){
    //    wp_enqueue_script('nalc84-materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array(), '1.0.0', true);
       wp_enqueue_script('nalc84-custom', get_template_directory_uri()."/assets/js/main.js", array(), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts', 'nalc84_register_scripts');



    /** * Search Form */ 
    function wpdocs_my_search_form( $form ) {
        $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
        <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
        <input type="text" placeholder="Search this site..." value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
        </div>
        </form>';
     
        return $form;
    }
    add_filter( 'get_search_form', 'wpdocs_my_search_form' );

    



function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(https://branch84.org/wp-content/themes/nalc84/assets/images/nalc-logo-badge-type-2.svg);
            height: 65px;
            width: 320px;
            background-size: 320px 65px;
            background-repeat: no-repeat;
            padding-bottom: 30px;
            background-color: #2850af;
            padding-top: 30px;
            background-position: center;
            margin-bottom: 0;
        }
        #login form, .login form {
            margin-top: 0;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// add categories to pages
function add_categories_to_pages() {
    register_taxonomy_for_object_type( 'category', 'page' );
    }
   add_action( 'init', 'add_categories_to_pages' );