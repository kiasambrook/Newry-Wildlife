<?php
/**
 * The template for displaying all single posts and attachments
 *
 */
get_header(); ?>

<section class="py-10 bg-gray-100">
    <div class="container mx-auto">
        <div class="lg:flex lg:items-center">
            <div class="lg:w-1/2 lg:mr-8 mb-6">
                <h2 class="text-3xl font-semibold mb-4 text-gray-800"><?php the_title() ?></h2>
                <p class="text-gray-700 mb-6">
                    <?php the_content() ?>
                </p>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>