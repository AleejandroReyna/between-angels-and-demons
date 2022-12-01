<header class="main-header">
    <?php
        if ( has_custom_logo() ) {
            the_custom_logo();
        } else { ?>
            <a class="blog-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo bloginfo( 'name' );?></a>
        <?php }
    ?>

    <?php
        $menu_args = array( 'theme_location' => 'top_menu' , 'container' => 'nav' );
        wp_nav_menu( $menu_args );
    ?>
</header>