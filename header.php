<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="bg-white p-4 text-black">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-3xl font-bold"><?php bloginfo('name'); ?></h1>

            <nav>
                <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => 'flex space-x-4'
            ));
            ?>
            </nav>
        </div>
    </header>