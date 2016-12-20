<?php
/**
 * Template name: Contact us
 *
 */
get_header(); ?>

    <section class="picture">
        <div class="column row">
            <div class="showcase">
                <h1>
                <?php $meta_value = get_post_meta($post->ID, 'contact_title', true);?>
                <?php if(!empty($meta_value)) : ?>
                <?php echo $meta_value; ?>
                <?php endif;?>
                </h1>
                <p>
                    <?php $meta_value = get_post_meta($post->ID, 'contact_phone', true);?>
                        <?php if(!empty($meta_value)) : ?>
                            <?php echo $meta_value; ?>
                                <?php endif;?>
                </p>
                <p>
                    <?php $meta_value = get_post_meta($post->ID, 'contact_email', true);?>
                        <?php if(!empty($meta_value)) : ?>
                            <?php echo $meta_value; ?>
                                <?php endif;?>
                </p>
                <p>
                    <?php $meta_value = get_post_meta($post->ID, 'contact_fax', true);?>
                        <?php if(!empty($meta_value)) : ?>
                            <?php echo $meta_value; ?>
                                <?php endif;?>
                </p>

            </div>
        </div>
    </section>

    <?php wp_footer();?>
        <?php get_footer(); ?>
