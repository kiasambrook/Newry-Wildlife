<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2G2ZPT9RKY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2G2ZPT9RKY');
</script>

<body>
    <?php $menu_items = wp_get_nav_menu_items('main-menu'); ?>


    <div id="__next">
        <div id="main-body" class="flex flex-col h-full overflow-y-auto overflow-x-hidden smooth-scroll transition-all">
            <header id="website-header" class="z-40" style="background-color: rgb(18, 41, 27); color: rgb(255, 255, 255);">
                <div class="grid items-center lg:gap-6 xl:gap-10 mx-auto pt-6 pb-6 px-6 lg:px-12" style="grid-template-columns:auto auto auto">
                    <div class="col-span-2 lg:col-span-1">
                        <a class="flex items-center gap-3 w-full max-w-[224px] lg:max-w-[260px] text-left" target="_self" href="/">
                            <h2 class="heading-small lg:heading-medium" style="color: rgb(255, 255, 255); font-size: 19.08px; line-height: 1.2; font-family: var(--header-logo-fontFamily); font-weight: var(--header-logo-fontWeight); width: 148.945px;"><?php echo get_bloginfo( 'name' ); ?></h2>
                        </a>
                    </div>
                    <div class="hidden lg:flex item-center justify-end gap-10 lg:col-span-2">
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
                    </div>
                    <div id="menu-toggle" class="ml-auto lg:hidden">
                        <button id="toggle-btn" class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none" style="color: rgb(255, 255, 255);">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="block h-5 w-5">
                                <path fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Mobile Menu -->
            <div class="mobile-menu-overlay hidden absolute top-0 left-0 h-screen w-screen bg-primary text-white z-50  bg-opacity-95 justify-center items-center gap-2 flex-col md:flex-row">
                <button id="close-btn" class="close mobile-menu-close absolute top-5 right-5 text-xl">&#x2715;</button>
                <div class="divider items-center md:border-r-2 md:w-1/4 md:pr-3 border-white text-center md:text-end">
                    <h1 class="heading-xlarge"><?php echo get_bloginfo( 'name' ); ?></h1>
                </div>

                <div class="mobile-menu-container text-center md:text-left">
                    <ul class="flex flex-col gap-y-4">
                        <?php if ($menu_items) {
                            foreach ($menu_items as $menu_item) {
                                $custom_field = get_field('your_custom_field_name', $menu_item->ID);
                                echo '<li class="hover:underline hover:underline-offset-8">
                            <a href="' . esc_url($menu_item->url) . '" class="hover:text-gray-700 opacity-100">' . esc_html($menu_item->title) . '</a></li>';
                                if ($custom_field) {
                                    echo  esc_html($custom_field);
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>