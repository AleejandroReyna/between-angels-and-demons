<?php 

get_header(); ?>

<div class="page-container category-container">
    <div class="page-content">
        <h1 class="category-title"><?php single_tag_title(); ?></h1>
        <span>Maybe there's something interesting here...</span>

        <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
            <?php require ( "template-parts/contents/main-content.php" ); ?>
        <?php endwhile; endif; ?>

        <?php 
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( 'Prev', 'demons' ),
                'next_text' => __( 'Next', 'demons' ),
            ) );
        ?>
    </div>
</div>

<?php get_footer(); ?>