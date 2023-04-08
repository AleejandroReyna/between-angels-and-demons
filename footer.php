        <?php  get_template_part ( 'template-parts/footers/main-footer' ); ?>
        <button id="toogleDarkModeButton" class="toogle-dark-mode-button">
            <img  class="dark-visible" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/icon.svg" alt="">
            <img class="light-visible" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/dark-icon.svg" alt="">
        </button>
    </main>
</body>
<?php wp_footer(); ?>
</html>