<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <div>
        <section class="relative flex items-center justify-center overflow-hidden min-h-120 flex-none z-10" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>'); background-position: center center; background-size: cover;">
            <div class="w-full h-full absolute top-0 left-0 z-0" style="background-color: rgba(67, 35, 34, 0.5);"></div>
            <div class="relative container mx-auto px-6 z-10 py-12 lg:py-32 xl:py-40">
                <div class="flex flex-col items-center max-w-4xl mx-auto">
                    <h1 class="text-xlarge text-h1 xl:text-7xl xl:leading-tight mb-4 text-center" style="color: rgb(255, 255, 255);"><?php the_title(); ?></h1>
                    <div class="flex flex-col lg:flex-row gap-2 items-center lg:justify-center body-large" style="color: rgb(255, 255, 255);">
                        <span><?php echo get_the_date(); ?></span>
                        <span class="hidden lg:inline-block">·</span>
                        <span>By <?php the_author(); ?></span>
                    </div>
                    <div class="flex items-center justify-center h-8 w-8 lg:h-10 lg:w-10 rounded-full overflow-hidden mt-3">
                        <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="<?php echo get_the_author(); ?>" class="rounded-full overflow-hidden bg-white">
                    </div>
                </div>
            </div>
        </section>
        <section class="relative z-10" style="background-color: rgb(255, 255, 255); color: rgb(17, 24, 39);">
            <div class="container mx-auto px-6 py-14 xl:py-28 relative z-10">
                <div class="max-w-3xl mx-auto">
                    <div class="rich-text-block max-w-xl mx-auto">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>
