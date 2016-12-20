<?php
/**
 * Default Single Post Template
 *
 */

get_header(); ?>

    <div class="blog-page">
        <div class="row column">
            <div class="column small-12 large-8 blog-main">
                <article class="callout">
                    <?php while ( have_posts() ) : the_post();?>
                        <?php get_template_part('parts/post-index', get_post_format() )?>
                            <?php endwhile;?>

                </article>
            </div>
            <div class="column small-6 large-4 sidebar">
                <div class="sidebar-text callout">
                    <?php if(is_active_sidebar('sidebar1')) : ?>
                        <?php dynamic_sidebar('sidebar1'); ?>
                            <?php endif; ?>
                </div>
                <div class="sidebar-text callout">
                    <?php if(is_active_sidebar('sidebar2')) : ?>
                        <?php dynamic_sidebar('sidebar2'); ?>
                            <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->

    <?php // get_sidebar(); ?>

        <?php get_footer(); ?>
