<?php $menu_items = wp_get_nav_menu_items('main-menu'); ?>
<nav class="hidden lg:flex item-center justify-end gap-10 lg:col-span-2">
    <ul class="hidden items-center flex-wrap lg:flex justify-end gap-x-6" style="color: rgb(255, 255, 255);">
        <?php if ($menu_items) {
            foreach ($menu_items as $menu_item) {
                $custom_field = get_field('your_custom_field_name', $menu_item->ID);
                echo '<li class="border-b-2" style="border-color:transparent;background-color:transparent;color:currentColor">
                            <a href="' . esc_url($menu_item->url) . '"  class="text-white hover:text-opacity-70">' . esc_html($menu_item->title) . '</a></li>';
                if ($custom_field) {
                    echo  esc_html($custom_field);
                }
            }
        }
        ?>
    </ul>
</nav>
<?php get_template_part('parts/mobile-menu', "mobile-menu", ["menu_items" => $menu_items]); ?>