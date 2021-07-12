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
    <div class="stripes"></div>
    


    <div>
                <div class="stripes"></div>
                <div class="row di-top-bar z-depth-1" id="nalc-top-bar">

                    <div class="container">
                        <div>
                            <nav class="nav-extended">
                                <div class="nav-wrapper">

                                    <div class="logo-sticky">
                                        <a href="/">
                                            <img id="logo-sticky" 
                                            src="<?php echo get_template_directory_uri() ?>/assets/images/nalc-logo-badge-type-3.svg" alt="NALC Logo" />
                                        </a>
                                    </div>

                                    <a href="#!" data-target="mobile-demo" class="sidenav-trigger right" id="trigger"><i class="material-icons">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/stamp.svg" alt="Menu Toggle" />
                                    </i></a>

                                    <ul id="nav-mobile" class="nav-mobile right">
                                        <li>
                                            <a href="/">Home</a>
                                        </li>

                                        <li>
                                            <a href="/news" id="news">News</a>
                                        </li>

                                        <li>
                                            <a href="/events" id="events">Events</a>
                                        </li>

                                        <li>
                                            <button id="trigger-2" class="dropdown-trigger" data-target="dropdown2">Local 84</button>
                                            <ul id="dropdown2" class="dropdown-content">
                                                <li>
                                                    <a href="/localissues/about">About Branch 84</a>
                                                </li>
                                               
                                                <li>
                                                    <a href="/localissues/localagreement">Local Agreement</a>
                                                </li>
                                               
                                                <li>
                                                    <a href="/localissues/newsletter">Newsletter</a>
                                                </li>
                                               
                                                <li>
                                                    <a href="/localissues/meetingminutes">Meeting Minutes</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <button id="trigger-3" class="dropdown-trigger" data-target="dropdown3">Topics</button>

                                            <ul id="dropdown3" class="dropdown-content">
                                                <li>
                                                    <a href="/topics/covid19">Covid-19</a>
                                                </li>
                                                <li>
                                                    <a href="/topics/cca">CCA's</a>
                                                </li>
                                                <li>
                                                    <a href="/topics/jobbidding">Job Bidding</a>
                                                </li>
                                                <li>
                                                    <a href="/topics/retirement">Retirement</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li>
                                            <button id="trigger-1" class="dropdown-trigger" data-target="dropdown1">Reference</button>

                                            <ul id="dropdown1" class="dropdown-content">
                                                <li>
                                                    <a href="/reference/handbooksandmanuals">Handbooks & Manuals</a>
                                                </li>
                                                <li>
                                                    <a href="/reference/mous">MOU's</a>
                                                </li>
                                                <li>
                                                    <a href="/reference/nalcbulletins">NALC Bulletins</a>
                                                </li>
                                                <li>
                                                    <a href="/reference/nalcstatements">NALC Statements</a>
                                                </li>
                                                <li>
                                                    <a href="/reference/uspsstatements">USPS Statements</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="/contact">Contact</a>
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


                                                    <a href="/">
                                                        <div class="collapsed">
                                                            <span>Home</span>
                                                        </div>
                                                    </a>

                                                    <a href="/news">
                                                        <div class="collapsed">
                                                            <span>News</span>
                                                        </div>
                                                    </a>
                                                    <a href="/events">
                                                        <div class="collapsed">
                                                            <span>Events</span>
                                                        </div>
                                                    </a>

                                                    <div class="">
                                                        <span class="multi">Local 84</span>
                                                        <a href="/localissues/about">About Branch 84</a>
                                                        <a href="/localissues/localagreement">Local Agreement</a>
                                                        <a href="/localissues/newsletter">Newsletter</a>
                                                        <a href="/localissues/meetingminutes">Meeting Minutes</a>
                                                    </div>

                                                    <div class="collapsed">
                                                        <span class="multi">Topics</span>
                                                        <a href="/topics/covid19">Covid-19</a>
                                                        <a href="/topics/cca">CCA's</a>
                                                        <a href="/topics/jobbidding">Job Bidding</a>
                                                        <a href="/topics/retirement">Retirement</a>
                                                    </div>

                                                    <div class="collapsed">
                                                        <span class="multi">Reference</span>
                                                        <a href="/reference/handbooksandmanuals">Handbooks & Manuals</a>
                                                        <a href="/reference/mous">MOU's</a>
                                                        <a href="/reference/nalcbulletins">NALC Bulletins</a>
                                                        <a href="/reference/nalcstatements">NALC Statements</a>
                                                        <a href="/reference/uspsstatements">USPS Statements</a>

                                                    </div>

                                                    <a href="/contact">
                                                        <div class="collapsed">
                                                            <span>Contact</span>
                                                        </div>
                                                    </a>

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
    
        







    