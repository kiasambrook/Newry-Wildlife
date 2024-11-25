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
    <div id="__next">
        <div id="main-body" class="flex flex-col h-full overflow-y-auto overflow-x-hidden smooth-scroll transition-all">
            <header id="website-header" class="z-40" style="background-color: rgb(18, 41, 27); color: rgb(255, 255, 255);">
                <div class="grid items-center lg:gap-6 xl:gap-10 mx-auto pt-6 pb-6 px-6 lg:px-12" style="grid-template-columns:auto auto auto">
                    <div class="col-span-2 lg:col-span-1">
                        <a class="flex items-center gap-3 w-full max-w-[224px] lg:max-w-[260px] text-left" target="_self" href="/">
                            <h2 class="heading-small lg:heading-medium" style="color: rgb(255, 255, 255); font-size: 19.08px; line-height: 1.2; font-family: var(--header-logo-fontFamily); font-weight: var(--header-logo-fontWeight); width: 148.945px;"><?php echo get_bloginfo( 'name' ); ?></h2>
                        </a>
                    </div>
                    <?php get_template_part('parts/menu'); ?>
                </div>
            </header>