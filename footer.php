<footer class="footer">
    <?php
    if (!is_front_page()) {
        wp_nav_menu(
            array(
                'menu' => 'footer',
                'theme_location' => 'footer',
                'container' => 'div', // Afin d'éviter d'avoir une div autour 
                'container_class' => 'footer-wrappers',
            )
        );
    ?>
        <div class="footer-wrappers">
            <?php get_template_part('parts/newsletter'); ?>
        </div>
</footer>
<?php }; ?>



<?php wp_footer(); ?>
</div>
</body>

</html>