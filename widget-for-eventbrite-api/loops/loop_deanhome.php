<?php

/**
 * @var mixed $data Custom data for the template.
 */
?>
<div class="relative bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="relative">
        <?php $data->template_loader->get_template_part('thumb_widget_home'); ?>

        <div class="bg-primary text-white px-4 py-2 absolute bottom-0 left-0">
            <span class="font-semibold">Date: <?php $data->template_loader->get_template_part('date_widget_home'); ?></span>
        </div>
    </div>

    <div class="p-4">
        <?php $data->template_loader->get_template_part('title_widget_home'); ?>
        <?php $data->template_loader->get_template_part('excerpt_widget_home'); ?>
        <?php $data->template_loader->get_template_part('booknow_home'); ?>
    </div>
</div>