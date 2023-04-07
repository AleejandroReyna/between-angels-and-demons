<article class="main-article">
    <a class="flex align-center" href="<?php the_permalink();?>">
        <h2 style="margin-right: .5em;"><?php the_title(); ?></h2>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/icon.svg" alt="">
    </a>
    <?php the_excerpt(); ?>
    <div class="text-right">
        <a href="<?php the_permalink();?>">Read more...</a>
    </div>
    <hr>
</article>