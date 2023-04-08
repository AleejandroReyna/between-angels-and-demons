<article class="main-article">
    <a href="<?php the_permalink();?>">
        <h2>
            <img class="dark-visible" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/dark-icon.svg" alt="">
            <?php the_title(); ?>
            <img class="light-visible" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/icon.svg" alt="">
        </h2>
    </a>
    <?php the_excerpt(); ?>
    <div class="text-right">
        <a href="<?php the_permalink();?>">Read more...</a>
    </div>
    <hr>
</article>