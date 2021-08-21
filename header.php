<!DOCTYPE html>
<html>
    <head>
        <meta charSet="utf-8"/><meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <?php 
            wp_head();
        ?>
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        
    </head>

    <body>

    <div>

    <div class="search-bar" id="search-bar">
        <div class="container search-layout" id="searchform">
            <?php get_search_form(); ?>
            <div class="searchform-close1"> 
                <div class="search-close" id="search-close"> <span>X</span> </div>
            </div>    
        </div>
    </div>
    
    <div>
    <div class="stripes-backer"> </div>
        <div class="stripes"></div>
    
                <div class="row di-top-bar z-depth-1" id="nalc-top-bar">
                

                    <div class="container">
                        <div>
                            <nav class="nav-extended">
                                <div class="nav-wrapper">

                                    <div class="logo-sticky">
                                        <a href="<?php echo get_site_url() ?>/">
                                            <img id="logo-sticky" 
                                            src="<?php echo get_template_directory_uri() ?>/assets/images/nalc-logo-badge-type-3.svg" alt="NALC Logo" />
                                        </a>
                                    </div>

                                    <div id="search-mobile" class="mobile-menu-search">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-search.svg" alt="Menu Close" />
                                    </div>

                                    <a href="#!" data-target="mobile-demo" class="sidenav-trigger right" id="trigger"><i class="material-icons">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/stamp.svg" alt="Menu Toggle" />
                                    </i></a>

                                    <ul id="nav-mobile" class="nav-mobile right">
                                        <li>
                                            <a href="<?php echo get_site_url() ?>/" id="home">Home</a>
                                        </li>

                                        <li>
                                            <a href="<?php echo get_site_url() ?>/news" id="news">News</a>
                                        </li>

                                        <li>
                                            <a href="<?php echo get_site_url() ?>/events" id="events">Events</a>
                                        </li>

                                        <li>
                                            <button id="trigger-2" class="dropdown-trigger" data-target="dropdown2">Local 84</button>
                                            <ul id="dropdown2" class="dropdown-content">
                                                <li>
                                                    <a href="<?php echo get_site_url() ?>/local84/about">About Branch 84</a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo get_site_url() ?>/local84/presidents-report" id="presidents-report">President's Report</a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo get_site_url() ?>/local84/local-agreements">Local Agreements</a>
                                                </li>
                                               
                                                <li>
                                                    <a href="<?php echo get_site_url() ?>/local84/meeting-minutes" id="meeting-minutes">Meeting Minutes</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <button id="trigger-3" class="dropdown-trigger" data-target="dropdown3">Topics</button>

                                            <ul id="dropdown3" class="dropdown-content">
                                                <li>
                                                    <a href="<?php echo get_site_url() ?>/topics/covid19">Covid-19</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo get_site_url() ?>/topics/cca">CCA's</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo get_site_url() ?>/topics/jobbidding">Job Bidding</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo get_site_url() ?>/topics/retirement">Retirement</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li>
                                            <button id="trigger-1" class="dropdown-trigger" data-target="dropdown1">Reference</button>

                                            <ul id="dropdown1" class="dropdown-content">
                                                <li>
                                                    <a href="<?php echo get_site_url() ?>/reference/externalresources">External Resources</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo get_site_url() ?>/reference/handbooksandmanuals" id="handbooks-manuals">Handbooks & Manuals</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo get_site_url() ?>/reference/documents" id="documents">Documents</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="search-icon-dekstop search-toggle-desktop" id="search">
                                            
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-search.svg" alt="Search Icon" /> 
                                             
                                            
                                        </li>
                                    </ul>
                                </div>
                            </nav>








                            <div class="sidenav" id="mobile-demo">
                                

                                <div id="mobile-menu-close" class="mobile-menu-close">
                                    <i class="material-icons">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/stamp-close.svg" alt="Menu Close" />
                                    </i>

                                </div>





                                <aside class="left-off-canvas-menu">

                                    <div class="row">
                                        <nav data-topbar>
                                            <div class="ir-menu-wrap">

                                                <div class="sdmenu" id="my_menu" style="float:left">
                                               
                                                    <a href="<?php echo get_site_url() ?>/">
                                                        <div class="collapsed">
                                                            <span>Home</span>
                                                        </div>
                                                    </a>

                                                    <a href="<?php echo get_site_url() ?>/news/">
                                                        <div class="collapsed">
                                                            <span>News</span>
                                                        </div>
                                                    </a>
                                                    <a href="<?php echo get_site_url() ?>/events/">
                                                        <div class="collapsed">
                                                            <span>Events</span>
                                                        </div>
                                                    </a>

                                                    <div class="">
                                                        <span class="multi">Local 84</span>
                                                        <a href="<?php echo get_site_url() ?>/local84/about/">About Branch 84</a>
                                                        <a href="<?php echo get_site_url() ?>/local84/presidents-report/">President's Report</a>
                                                        <a href="<?php echo get_site_url() ?>/local84/local-agreements/">Local Agreements</a>
                                                        <a href="<?php echo get_site_url() ?>/local84/meeting-minutes/">Meeting Minutes</a>
                                                    </div>

                                                    <div class="collapsed">
                                                        <span class="multi">Topics</span>
                                                        <a href="<?php echo get_site_url() ?>/topics/covid19/">Covid-19</a>
                                                        <a href="<?php echo get_site_url() ?>/topics/cca/">CCA's</a>
                                                        <a href="<?php echo get_site_url() ?>/topics/jobbidding/">Job Bidding</a>
                                                        <a href="<?php echo get_site_url() ?>/topics/retirement/">Retirement</a>
                                                    </div>

                                                    <div class="collapsed">
                                                        <span class="multi">Reference</span>
                                                        <a href="<?php echo get_site_url() ?>/reference/externalresources/">External Resources</a>
                                                        <a href="<?php echo get_site_url() ?>/reference/handbooksandmanuals/">Handbooks & Manuals</a>
                                                        <a href="<?php echo get_site_url() ?>/reference/documents/">Documents</a>
                                                    </div>


                                                </div>
                                            </div>
                                        </nav>
                                    </div>

                                </aside>






                                <div class="logo-slide-out container">
                                </div>

                            
                            </div>

                            <div id='sidenav-overlay' class='sidenav-overlay'></div>
                            <div id='btn-overlay' class='overlay-clear'></div>

                        </div>

                    </div></div>
            </div>
    
        







    