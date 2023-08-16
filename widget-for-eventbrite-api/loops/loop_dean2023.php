<?php

/**
 * @var mixed $data Custom data for the template.
 */
?>
<div class="border-b py-4">
    <div class="md:flex md:items-center">
        <?php $data->template_loader->get_template_part('thumb_widget' . $data->event->plan); ?>
        <div class="md:w-2/3">
            <?php $data->template_loader->get_template_part('title_widget' . $data->event->plan); ?>
            <?php $data->template_loader->get_template_part('date_widget'); ?>
            <?php $data->template_loader->get_template_part('location' . $data->event->plan); ?>
            <?php $data->template_loader->get_template_part('prices' . $data->event->plan); ?>
            <?php $data->template_loader->get_template_part('availability' . $data->event->plan); ?>
            <?php $data->template_loader->get_template_part('excerpt_widget'); ?>
            <?php $data->template_loader->get_template_part('booknow' . $data->event->plan); ?>
        </div>
    </div>
</div>