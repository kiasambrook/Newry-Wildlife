<?php

/**
 * @var mixed $data Custom data for the template.
 */
?>
<div class="group w-full relative overflow-hidden rounded-lg md:rounded-xl lg:rounded-2xl" style="flex: 0 0 calc(50% - 20px);">
    <div class="transition-all transition-all ease-in-out duration-500 delay-100 opacity-100 translate-y-0">
        <div class="flex-shrink-0 relative aspect-w-16 aspect-h-9">
            <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                <?php $data->template_loader->get_template_part('thumb_widget' . $data->event->plan); ?>
            </span>
        </div>
        <div class="">
            <div class="flex flex-col text-left items-start py-6" style="color: rgb(17, 24, 39);">
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
</div>


