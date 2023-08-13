<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body>
    <header class="relative">
        <div class="absolute inset-0 bg-primary h-full md:w-9/12 w-100 z-10"></div>
        <nav class="bg-opacity-100 container mx-auto flex flex-wrap justify-between items-center py-4 relative z-20">
            <h5 class="text-lg font-semibold text-white mb-4 sm:mb-0">
                Dean McCullough
            </h5>
            <button class="block sm:hidden text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M3 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0V5H4v8h10V9a1 1 0 0 1 2 0v1a1 1 0 1 1-2 0v4a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" clip-rule="evenodd" />
                </svg>
            </button>
            <div class="hidden sm:flex items-center space-x-2 sm:space-x-4">
            <?php
                $menu_items = wp_get_nav_menu_items('main-menu');

                if ($menu_items) {
                foreach ($menu_items as $menu_item) {
                    $custom_field = get_field('your_custom_field_name', $menu_item->ID);
                    echo '<a href="' . esc_url($menu_item->url) . '"  class="text-gray-800 hover:text-opacity-70">' . esc_html($menu_item->title) . '</a>';
                    if ($custom_field) {
                    echo  esc_html($custom_field);
                    }
                }
                }
                ?>
            </div>
            <a href="#" class="bg-primary text-white px-2 sm:px-4 py-1 sm:py-2 rounded-full hover:bg-green-600 transition duration-300 mt-4 sm:mt-0">Contact</a>
        </nav>

        <?php get_template_part('parts/hero'); ?>

    </header>