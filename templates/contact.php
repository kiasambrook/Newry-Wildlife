<?php

/**
 * Template name: Contact page
 */
get_header();
$logo_url = get_option('logo_url');
$email = get_option('contact_email');
$twitter =  get_option('twitter');
$instagram =  get_option('instagram');
$linkedin =  get_option('linkedin');
?>

<section class="py-10 bg-gray-100">
    <div class="container mx-auto">
        <div class="lg:flex lg:items-center">
            <div class="lg:w-1/2 lg:mr-8 mb-6">
                <h2 class="text-3xl font-semibold mb-4 text-gray-800"><?php the_field('contact_title'); ?></h2>
                <p class="text-gray-700 mb-6">
                    <?php the_field('contact_description'); ?>
                </p>
                <?php if ($email) : ?>
                    <a href="mailto:<?= $email ?>" class="border-t">
                        <i class="fa fa-envelope"></i> <?= $email ?>
                    </a>
                <?php endif ?>
                <div class="border-t social_icons">
                    <?php if ($twitter) : ?>
                        <a href="<?= $twitter ?>" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    <?php endif ?>
                    <?php if ($instagram) : ?>
                        <a href="<?= $instagram ?>" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                        </a>
                    <?php endif ?>
                    <?php if ($linkedin) : ?>
                        <a href="<?= $linkedin ?>" target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    <?php endif ?>
                </div>

            </div>
            <div class="lg:w-1/2 p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Contact Form</h3>
                <?= do_shortcode(get_field('contact_form')); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
