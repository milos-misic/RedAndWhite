<?php
/**
 * Default Page Template
 *
 */
get_header(); ?>

    <section class="picture js--picture">
        <div class="column row">
            <div class="showcase">
                <h1>
                    <?php $meta_value = get_post_meta($post->ID, 'showcase_title', true);?>
                    <?php if(!empty($meta_value)) : ?>
                    <?php echo $meta_value; ?>
                    <?php endif;?>
                </h1>
                <p>
                    <?php $meta_value = get_post_meta($post->ID, 'showcase_content', true);?>
                        <?php if(!empty($meta_value)) : ?>
                            <?php echo $meta_value; ?>
                                <?php endif;?>
                </p>
                <a class="secondary button js-facts" href="#"><span>Red</span>AndWhite</a>
            </div>
        </div>
    </section>

    <section class="facts js-section-facts">
        <div class="row js--wp-1">
            <div class="column small-12 medium-4 each-fact">
                <?php if(is_active_sidebar('sidebar3')) : ?>
                    <?php dynamic_sidebar('sidebar3'); ?>
                        <?php endif; ?>
            </div>
            <div class="column small-12 medium-4 each-fact">
                <?php if(is_active_sidebar('sidebar4')) : ?>
                    <?php dynamic_sidebar('sidebar4'); ?>
                        <?php endif; ?>
            </div>
            <div class="column small-12 medium-4 each-fact">
                <?php if(is_active_sidebar('sidebar5')) : ?>
                    <?php dynamic_sidebar('sidebar5'); ?>
                        <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="gallery js--wp">
        <div class="row small-up-1 medium-up-2 large-up-4">
            <div class="column js--wp-2">
                <img src="<?php echo get_template_directory_uri();
                          $meta_value = get_post_meta($post->ID, 'pic_1', true);
                          if(!empty($meta_value)){
                             echo $meta_value;
                          }
                          ?>" class="thumbnail" alt="Zvezda-Bari-'91">
            </div>
            <div class="column js--wp-3">
                <img src="<?php echo get_template_directory_uri();
                          $meta_value = get_post_meta($post->ID, 'pic_2', true);
                          if(!empty($meta_value)){
                             echo $meta_value;
                          }
                          ?>" class="thumbnail" alt="Zvezda-Bari-'91">
            </div>
            <div class="column js--wp-4">
                <img src="<?php echo get_template_directory_uri();
                          $meta_value = get_post_meta($post->ID, 'pic_3', true);
                          if(!empty($meta_value)){
                             echo $meta_value;
                          }
                          ?>" class="thumbnail" alt="Zvezda-Bari-'91">
            </div>
            <div class="column js--wp-5">
                <img src="<?php echo get_template_directory_uri();
                          $meta_value = get_post_meta($post->ID, 'pic_4', true);
                          if(!empty($meta_value)){
                             echo $meta_value;
                          }
                          ?>" class="thumbnail" alt="Zvezda-Bari-'91">
            </div>
        </div>
    </section>








    <!-- Start Top Bar -->
    <!--<div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="menu-text">Yeti Agency</li>
                <li><a href="#">One</a></li>
                <li><a href="#">Two</a></li>
            </ul>
        </div><div class="small-11medium-7 large-8 columns">
        <div class="top-bar-right">
            <ul class="menu">
                <li><a href="#">Three</a></li>
                <li><a href="#">Four</a></li>
                <li><a href="#">Five</a></li>
                <li><a href="#">Six</a></li>
            </ul>
        </div>
    </div>
    <!-- End Top Bar

    <div class="callout large">
        <div class="row column text-center">
            <h1>Changing the World Through Design</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
            <a href="#" class="button large">Learn More</a>
            <a href="#" class="button large hollow">Learn Less</a>
        </div>
    </div>

    <div class="row">
        <div class="medium-6 columns medium-push-6">
            <img class="thumbnail" src="http://placehold.it/750x350">
        </div>
        <div class="medium-6 columns medium-pull-6">
            <h2>Our Agency, our selves.</h2>
            <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor.</p>
        </div>
    </div>

    <div class="row">
        <div class="medium-4 columns">
            <h3>Photoshop</h3>
            <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
        </div>
        <div class="medium-4 columns">
            <h3>Javascript</h3>
            <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
        </div>
        <div class="medium-4 columns">
            <h3>Marketing</h3>
            <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
        </div>
    </div>

    <hr>

    <div class="row column">
        <ul class="vertical medium-horizontal menu expanded text-center">
            <li>
                <a href="#">
                    <div class="stat">28</div><span>Websites</span></a>
            </li>
            <li>
                <a href="#">
                    <div class="stat">43</div><span>Apps</span></a>
            </li>
            <li>
                <a href="#">
                    <div class="stat">95</div><span>Ads</span></a>
            </li>
            <li>
                <a href="#">
                    <div class="stat">59</div><span>Cakes</span></a>
            </li>
            <li>
                <a href="#">
                    <div class="stat">18</div><span>Logos</span></a>
            </li>
        </ul>
    </div>

    <hr>

    <div class="row column">
        <h3>Our Recent Work</h3>
    </div>

    <div class="row medium-up-3 large-up-4">
        <div class="column">
            <img class="thumbnail" src="http://placehold.it/550x550">
        </div>
        <div class="column">
            <img class="thumbnail" src="http://placehold.it/550x550">
        </div>
        <div class="column">
            <img class="thumbnail" src="http://placehold.it/550x550">
        </div>
        <div class="column">
            <img class="thumbnail" src="http://placehold.it/550x550">
        </div>
        <div class="column">
            <img class="thumbnail" src="http://placehold.it/550x550">
        </div>
        <div class="column">
            <img class="thumbnail" src="http://placehold.it/550x550">
        </div>
        <div class="column">
            <img class="thumbnail" src="http://placehold.it/550x550">
        </div>
        <div class="column">
            <img class="thumbnail" src="http://placehold.it/550x550">
        </div>
        <div class="column">
            <img class="thumbnail" src="http://placehold.it/550x550">
        </div>
        <div class="column">
            <img class="thumbnail" src="http://placehold.it/550x550">
        </div>
        <div class="column">
            <img class="thumbnail" src="http://placehold.it/550x550">
        </div>
        <div class="column">
            <img class="thumbnail" src="http://placehold.it/550x550">
        </div>
    </div>

    <hr>

    <div class="row column">
        <ul class="menu">
            <li><a href="#">One</a></li>
            <li><a href="#">Two</a></li>
            <li><a href="#">Three</a></li>
            <li><a href="#">Four</a></li>
        </ul>
    </div>-->

    <?php wp_footer();?>
        <!-- end content -->

        <?php // get_sidebar(); ?>

            <?php get_footer(); ?>
