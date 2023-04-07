<?php 
get_header(); ?>

<div class="page-container">
    <div class="page-content">

    <h1>In progress...</h1>
    <p>But, these are the last articles that I've added.</p>
    <hr>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php require ( "template-parts/contents/main-content.php" ); ?>
    <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>