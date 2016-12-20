<?php
/**
 * Default Blog Template
 *
 */

    get_header(); ?>

    <div class="blog-page">
        <div class="row column">
            <div class="column small-12 large-8 blog-main">
                <?php if(have_posts()):?>
                    <?php if(is_archive()):?>
                        <h1> aaaaa
                            <?php if(is_category()) : ?>
                                    <?php echo get_the_archive_title();?>
                                    <?php else :?>
                                        <?php if(is_author()) : ?>
                                            <?php echo 'Archived by author: '. get_the_author();?>
                                        <?php endif;?>
                                        <?php endif;?>
                                        <?php endif;?>
                        </h1>
                        <?php while(have_posts()): the_post();?>
                            <?php get_template_part( 'parts/post-index', get_post_format() );?>
                                <?php endwhile;?>
                                    <?php get_template_part( 'parts/post', 'nav' );?>
                                        <?php else :?>
                                            <p>
                                                <?php __('No posts found');?>
                                            </p>
                                            <?php endif;?>
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
