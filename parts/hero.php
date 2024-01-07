<?php $hero_image = get_field('hero_image'); ?>
<?php $call_to_action_button = get_field('call_to_action_button'); ?>


<section class="relative">
    <div id="banner-0" data-text-color="#FFFFFF" class="flex-shrink-0 flex relative break-word items-center" style="min-height: calc(30px); z-index: 39;">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-0 z-10" style="background-color: rgb(33, 57, 42); opacity: 0.7;"></div>
            <?php if ($hero_image) : ?>
                <div class="absolute inset-0 z-0 bg-white">
                    <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                        <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" />
                    </span>
                </div>
            <?php endif; ?>
        </div>
        <div class="relative z-10 container mx-auto pt-20 lg:pt-48 pb-20 lg:pb-48">
            <div class="transition-all transition-all ease-in-out duration-500  opacity-100 translate-y-0 max-w-3xl text-left ml-0 mr-auto">
                <h2 class="mb-6 break-word text-left heading-xlarge" style="color: rgb(255, 255, 255);"><?php the_field('title'); ?></h2>
                <p class="body-large" style="color: rgb(255, 255, 255);"><?php the_field('subtitle'); ?></p>
                <?php if ($call_to_action_button) : ?>
                    <div class="flex md:inline-flex flex-col md:flex-row md:gap-4 ">
                        <a class="button xl w-full md:w-max mt-6 lg:mt-8" target="<?php echo esc_attr($call_to_action_button['target']); ?>" href="<?php echo esc_url($call_to_action_button['url']); ?>" style="border-width: 2px; border-style: solid; box-shadow: none; font-family: var(--body-fontFamily); font-weight: var(--body-fontWeight); font-style: var(--body-fontStyle); background-color: rgb(245, 223, 178); color: rgb(17, 24, 39); border-radius: 8px; border-color: rgb(245, 223, 178);"><?php echo esc_html($call_to_action_button['title']); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>