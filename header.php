<?php
/**
 * Default Header Template
 *
 */
?>

    <!DOCTYPE html>
    <html <?php language_attributes(); ?> class="no-js">

    <head>
        <meta charset="<?php bloginfo('charset')?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php bloginfo('name');?> |
                <?php wp_title('', 'true', 'right');?>
        </title>
        <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
        <?php wp_head(); ?>
    </head>



    <body <?php body_class(); ?>>

        <nav class="head">
            <div class="row">
                <div class="column small-12">
                    <div class="top-bar">
                        <div class="top-bar-title">
                            <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
                                <button class="menu-icon dark" type="button" data-toggle></button>
                            </span>
                            <strong>
                                      <h1>
                                           <a href="http://crvenazvezdafk.com/en">
                                        <span>Red</span></a><a href="<?php echo home_url('/');?>">AndWhite</a>
                                      </h1>

                            </strong>
                        </div>
                        <div id="responsive-menu">
                            <div class="top-bar-left">
                                <?php h5bs_primary_nav();?>
                            </div>
                            <div class="top-bar-right">
                                <ul class="menu ">
                                    <li><a href="https://www.youtube.com/user/crvenazvezdafkcom"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="https://sr-rs.facebook.com/crvenazvezdafk/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                    <li><a href="http://google.com"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    <li><a href="https://en.wikipedia.org/wiki/Red_Star_Belgrade"><i class="fa fa-wikipedia-w" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </nav>




        <!--<header class="header">
            <nav>
                <div class="row">
                    <div class="title-bar" data-responsive-toggle="nav-main" data-hide-for="medium">
                        <button class="menu-icon" type="button" data-toggle></button>
                        <div class="title-bar-title">Menu</div>
                    </div>
                    <div class="column small-12 medium-3 header-text">
                        <h1><a href="http://crvenazvezdafk.com/en"><span>Red</span></a><a href="<?php echo home_url('/');?>">AndWhite</a></h1>
                    </div>
                    <div class="column small-12 medium-6 header-menu">
                        <?php h5bs_primary_nav();?>
                    </div>
                    <div class="column small-12 medium-3 header-links">
                        <ul class="menu postfix">
                            <li><a href="https://www.youtube.com/user/crvenazvezdafkcom"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href="https://sr-rs.facebook.com/crvenazvezdafk/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="http://google.com"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                            <li><a href="https://en.wikipedia.org/wiki/Red_Star_Belgrade"><i class="fa fa-wikipedia-w" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>-->
