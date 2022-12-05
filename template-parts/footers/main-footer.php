<footer class="main-footer">
    <div class="footer-container">
        <?php
            $menu_args = array('theme_location'=>'footer_menu', 'container' => 'nav', 'menu_class' => 'main-footer-menu');
            wp_nav_menu($menu_args);
        ?><br>
        <hr>
        <div class="flex space-between">
            <div>
                <br>
                <a target="_blank" href="https://alejandroreyna.com"><?php bloginfo( 'description', 'display' ); ?></a>
                <br>
                <br>
            </div>
            <div></div>
        </div>
    </div>

</footer>