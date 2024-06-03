<footer class="bg-[#120634] py-8 text-white mt-8 text-center">
    <div class="container mx-auto text-center">
        <nav class="flex justify-center mb-8">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => false,
                'menu_class' => 'flex space-x-4'
            ));
            ?>
        </nav>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>