<footer class="main-footer">
    <div class="footer-container">
        <?php
            $menu_args = array('theme_location'=>'footer_menu', 'container' => 'nav', 'menu_class' => 'main-footer-menu');
            wp_nav_menu($menu_args);
        ?><br>
        <hr>
        <div class="flex space-between align-center">
            <div>
                <?php

                    if ( is_active_sidebar( 'footer-left' ) ) : ?>

                        <aside class="footer-left-area">
                            <?php dynamic_sidebar( 'footer-left' ); ?>
                        </aside><!-- .widget-area -->

                <?php endif; ?>
            </div>
            <div>
                <?php

                if ( is_active_sidebar( 'footer-right' ) ) : ?>

                    <aside class="footer-right-area">
                        <?php dynamic_sidebar( 'footer-right' ); ?>
                    </aside><!-- .widget-area -->

                <?php endif; ?>
            </div>
        </div>
    </div>

</footer>