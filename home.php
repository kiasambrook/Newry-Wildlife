<?php get_header(); ?>

<div>
    <section class="relative z-10" style="background-color:#FFFFFF">
        <div class="container mx-auto py-12 lg:py-14 xl:py-20 relative z-10">
            <div class="flex items-center justify-between gap-6 mb-6 lg:mb-10 flex-wrap">
                <h2 class="heading-large font-medium" style="color: rgb(17, 24, 39);">Blog</h2>
            </div>
            <!-- Posts grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10 mb-8 lg:mb-14">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <div class="group relative cursor-pointer">
                            <div class="relative overflow-hidden mb-6 rounded-lg md:rounded-xl lg:rounded-2xl">
                                <a href="<?php the_permalink(); ?>" class="relative flex items-center justify-center h-64 overflow-hidden transition-all duration-300 group-hover:scale-110" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-position: center center; background-size: cover;"></a>
                            </div>
                            <h3 class="heading-medium mb-2" style="color: rgb(17, 24, 39);">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="body-normal" style="color: rgb(17, 24, 39);"><?php echo get_the_date(); ?></p>
                        </div>
                <?php
                    endwhile;
                else :
                    echo '<p>No posts found</p>';
                endif;
                ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
