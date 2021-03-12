

<footer class="site-footer flex">
    <nav class="menu-container flex">
        <?php wp_nav_menu(array(
            'theme_location'    => 'footer',
            'menu_class'        => 'main-menu-list',
            'container'         => NULL,
        )) ?>
    </nav>
    <p class="copyright">Amaze Theme &#169; 2021 by Andrew McGowin.</p>
    <p class="copyright">Bamadrew95 &#169; 2021 by Andrew McGowin.</p>
</footer>

<?php wp_footer(); ?>

</body>
</html>