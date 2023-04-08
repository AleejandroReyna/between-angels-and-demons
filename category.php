<?php 

$category = get_the_category()[0];

get_header(); ?>

<div class="page-container category-container">
    <div class="page-content">
        <h1 class="category-title"><?php echo $category->name; ?></h1>
        <span>What are you looking for?</span>

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