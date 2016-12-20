<?php
/**
 * Template name: About us
 *
 */
get_header(); ?>

    <section class="picture">
        <div class="column row">
            <div class="showcase">
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
