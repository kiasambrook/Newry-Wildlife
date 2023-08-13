<?php $imageSide = get_field('image_side'); ?>
<?php $hero_image = get_field('hero_image'); ?>
<?php $title = get_field('title'); ?>
<?php $subTitle = get_field('subtitle'); ?>
<?php $call_to_action_button = get_field('call_to_action_button'); ?>

<section class="relative py-16 md:py-20 lg:py-24">
    <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center justify-between relative z-20">

        <?php if ($imageSide == 'right') : ?>
            <div class="w-full lg:w-1/2">
                <h1 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-semibold text-white mb-4">
                    <?= $title ?>
                </h1>
                <p class="text-base md:text-lg lg:text-xl xl:text-2xl text-white mb-6">
                    <?= $subTitle ?>
                </p>
                <?php if ($call_to_action_button) : ?>
                    <a href="<?= esc_url($call_to_action_button['url']) ?>" target="<?= esc_attr($call_to_action_button['target']) ?>" class="bg-secondary text-white px-4 py-2 rounded-full hover:bg-green-600 transition duration-300"><?= esc_html($call_to_action_button['title']) ?></a>
                <?php endif ?>
            </div>
            <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                <?php if ($hero_image) : ?>
                    <img src="<?= $hero_image['url'] ?>" alt="<?= $hero_image['alt'] ?>" class="w-full rounded-lg shadow-md">
                <?php endif ?>
            </div>
        <?php else : ?>
            <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                <?php if ($hero_image) : ?>
                    <img src="<?= $hero_image['url'] ?>" alt="<?= $hero_image['alt'] ?>" class="w-full rounded-lg shadow-md">
                <?php endif ?>
            </div>
            <div class="w-full lg:w-1/2">
                <h1 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-semibold text-white mb-4">
                    <?= $title ?>
                </h1>
                <p class="text-base md:text-lg lg:text-xl xl:text-2xl text-white mb-6">
                    <?= $subTitle ?>
                </p>
                <?php if ($call_to_action_button) : ?>
                    <a href="<?= esc_url($call_to_action_button['url']) ?>)" target="<?= esc_attr($call_to_action_button['target']) ?>" class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 transition duration-300"><?= esc_html($call_to_action_button['title']) ?></a>
                <?php endif ?>
            </div>
        <?php endif  ?>
    </div>
</section>