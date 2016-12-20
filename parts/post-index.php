<article class="callout">

    <?php if(is_search() || is_single()) : ?>
        <h2> <?php the_title();?></h2>
        <?php else : ?>
            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
            <?php endif;?>
                <p class="meta">
                    Posted on
                    <?php the_time('F j, Y g:i a ')?> , by
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
                            <?php the_author();?>
                        </a>| Posted in
                        <?php
                        $categories = get_the_category();
                        $separator = ', ';
                        $output = '';

                    if($categories){
                        foreach($categories as $cat){
                            $output .= '<a class="cate" href="'.get_category_link($cat->term_id).'">' . $cat->name.'</a>'. $separator;
                        }
                        echo trim($output, $separator);
                        }
                        ?>
                </p>

                <p class="blog-text">
                    <?php if(!is_archive()) :?>
                        <?php if(has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                                <?php endif;?>
                                    <?php if(is_single()) : ?>
                                        <?php the_content(); ?>
                                            <?php else : ?>
                                                <?php the_excerpt();?>
                                                    <a class="secondary button" href="<?php the_permalink()?>">Read more</a>
                                                    <?php endif;?>
                                                        <?php endif;?>

                </p>
</article>
