<?php 
get_header(); ?>

<div class="single-container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="single single-post" id="single-post-<?php the_ID(); ?>">

            <div class="single-header">
                <h1 class="single-title high-title"><?php the_title(); ?></h1>
                <p class="text-right">
                    <span><?php echo get_the_author_meta('first_name'); ?> <?php echo get_the_author_meta('last_name'); ?></span>
                    -
                    <span><?php the_date(); ?></span>
                </p>
                <hr>
                <br><br>
            </div>
            <?php the_content(); ?>
            <hr>
            <div class="single-footer-content">
                    <?php if ( has_category() ) { ?>

                        <div class="single-categories">
                            <?php
                            $categories_list = get_the_category_list( __( ', ', 'demons' ) );
                            if ( $categories_list ) {
                                printf(
                                    '<span class="cat-links">' . esc_html__( 'Categorized as %s', 'demons' ) . ' </span>',
                                    $categories_list
                                );
                            }
                            ?>

                        </div>
                    <?php } 
                    if (has_tag()) { ?>
                        <div class="single-tags">
                            <?php 
                                $tags_list = get_the_tag_list( '', __( ', ', 'demons' ) );
                                if ( $tags_list ) {
                                    printf(
                                        /* translators: %s: list of tags. */
                                        '<span class="tags-links">' . esc_html__( 'Tagged %s', 'demons' ) . '</span>',
                                        $tags_list // phpcs:ignore WordPress.Security.EscapeOutput
                                    );
                                }
                            ?>
                        </div>
                    <?php } ?>
            </div>
        </div>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>