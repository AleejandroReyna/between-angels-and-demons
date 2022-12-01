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
        </div>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>