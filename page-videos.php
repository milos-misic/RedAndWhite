<?php
/**
 * Template name: About us
 *
 */
get_header(); ?>

    <section class="picture">
        <div class="column row">
            <div class="showcase videos">

                <div class="row">
                    <div class="column small-12 medium-6">
                        <h3 class="video-h3"><?php
                          $meta_value = get_post_meta($post->ID, 'videos_title1', true);
                          if(!empty($meta_value)){
                             echo $meta_value;
                          }
                          ?></h3>
                        <div class="flex-video">
                            <iframe src="<?php
                          $meta_value = get_post_meta($post->ID, 'videos_link1', true);
                          if(!empty($meta_value)){
                             echo $meta_value;
                          }
                          ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="column small-12 medium-6">
                        <h3 class="video-h3"><?php
                          $meta_value = get_post_meta($post->ID, 'videos_title2', true);
                          if(!empty($meta_value)){
                             echo $meta_value;
                          }
                          ?></h3>
                        <div class="flex-video">
                            <iframe src="<?php
                          $meta_value = get_post_meta($post->ID, 'videos_link2', true);
                          if(!empty($meta_value)){
                             echo $meta_value;
                          }
                          ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="column small-12 medium-6">
                        <h3 class="video-h3"><?php
                          $meta_value = get_post_meta($post->ID, 'videos_title3', true);
                          if(!empty($meta_value)){
                             echo $meta_value;
                          }
                          ?></h3>
                        <div class="flex-video">
                            <iframe src="<?php
                          $meta_value = get_post_meta($post->ID, 'videos_link3', true);
                          if(!empty($meta_value)){
                             echo $meta_value;
                          }
                          ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="column small-12 medium-6">
                        <h3 class="video-h3"><?php
                          $meta_value = get_post_meta($post->ID, 'videos_title4', true);
                          if(!empty($meta_value)){
                             echo $meta_value;
                          }
                          ?></h3>
                        <div class="flex-video">
                            <iframe src="<?php
                          $meta_value = get_post_meta($post->ID, 'videos_link4', true);
                          if(!empty($meta_value)){
                             echo $meta_value;
                          }
                          ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <h1><?php $meta_value = get_post_meta($post->ID, 'about_title', true); ?>
                    <?php if(!empty($meta_value)) : ?>
                    <?php echo $meta_value;?>
                    <?php endif;?>
                </h1>
                <p>
                    <?php $meta_value = get_post_meta($post->ID, 'about_content', true); ?>
                        <?php if(!empty($meta_value)) : ?>
                            <?php echo $meta_value;?>
                                <?php endif;?>
                </p>
                <p>
                    <?php $meta_value = get_post_meta($post->ID, 'about_content1', true); ?>
                        <?php if(!empty($meta_value)) : ?>
                            <?php echo $meta_value;?>
                                <?php endif;?>
                </p>
                <p>
                    <?php $meta_value = get_post_meta($post->ID, 'about_content2', true); ?>
                        <?php if(!empty($meta_value)) : ?>
                            <?php echo $meta_value;?>
                                <?php endif;?>
                </p>
            </div>
        </div>
    </section>

    <?php wp_footer();?>
        <?php get_footer(); ?>
