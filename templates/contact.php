<?php
/**
 * Template name: Contact page
 */
get_header();
$email =  get_field( 'contact_email' );
$twitter =  get_field( 'twitter_link' );
$instagram =  get_field( 'instagram_link' );
$linkedin =  get_field( 'linkedin_link' );
?>

<section class="py-10 bg-gray-100">
    <div class="container mx-auto">
        <div class="lg:flex lg:items-center">
            <div class="lg:w-1/2 lg:mr-8 mb-6">
                <h2 class="text-3xl font-semibold mb-4 text-gray-800"><?php the_field('contact_title'); ?></h2>
                <p class="text-gray-700 mb-6">
                    <?php the_field('contact_description'); ?>
                </p>
                <?php if($email) : ?>
                    <p class="border-t">
                    <i class="fa fa-envelop"></i> <?= $email ?>
                    </p>
                <?php endif ?>
            
            </div>
            <div class="lg:w-1/2 p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Contact Form</h3>
                <?= do_shortcode(get_field('contact_form')); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
