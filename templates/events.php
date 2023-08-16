<?php

/**
 * Template name: Events page
 */
get_header();
?>

<section class="py-10 bg-gray-100">
    <div class="container mx-auto items-center lg:flex-row lg:items-start">
        <div class="w-full lg:w-100 lg:order-2 mt-8 lg:mt-0 md:ml-2 mb-6">
            <h2 class="text-3xl font-semibold mb-4 text-gray-800"><?php the_field( 'section_title' ); ?></h2>
            <p class="text-gray-700 mb-6">
                <?php the_field('events_text'); ?>
            </p>
        </div>
        <?= do_shortcode(get_field( 'events_shortcode' )); ?>
    </div>
</section>

<?php get_footer() ?>