<?php

/**
 * Front end display of shortcode loop
 * can be overridden in child themes / themes or in wp-content/widget-for-eventbrite-api folder if you don't have a child theme and you don't want to lose changes due to themes updates
 *
 * To customise create a folder in your theme directory called widget-for-eventbrite-api and a modified version of this file or any template_parts renamed as appropriate
 *
 * The main structure is in get_template_part( 'loop__free_widget' );
 *
 * @var mixed $data Custom data for the template.
 */

$data->template_loader->get_template_part('paginate_links_top' . $data->event->plan);
if ($data->utilities->get_element('widgetwrap', $data->args)) { ?>
	<section class="widget">
	<?php }
// Recent posts wrapper
	?>
	<section class="relative">
		<div id="list-2" class="relative flex flex-none flex-shrink-0 break-word items-center" style="min-height: calc(134px); z-index: 37;">
			<div class="absolute inset-0 pointer-events-none">
				<div class="absolute inset-0 z-10" style="background-color: rgb(238, 244, 249);"></div>
			</div>
			<div class="relative z-10 container mx-auto pt-16 lg:pt-32 pb-16 lg:pb-32">
				<div>
					<div class="transition-all transition-all ease-in-out duration-500  opacity-100 translate-y-0">
						<h2 class="heading-large mb-6 text-left" style="color: rgb(17, 24, 39);"><?php the_field('section_title'); ?></h2>
						<p class="mb-6"><?php the_field('events_text'); ?></p>
					</div>
					<div class="flex flex-wrap relative justify-start" style="gap: 40px;">
						<?php if (false !== $data->events && $data->events->have_posts()) {
							$data->template_loader->get_template_part('paginate_links_top' . $data->event->plan);
						?>
							<?php while ($data->events->have_posts()) {
								$data->events->the_post();
								$data->event->booknow = $data->utilities->get_booknow_link($data->args);
								$data->event->cta     = $data->utilities->get_cta($data->args);
								$data->event->classes = $data->utilities->get_event_classes();
								$data->event->classes = ' ' . $data->event->cta->availability_class;
								$data->template_loader->get_template_part('loops/loop_dean2023');
							}
							?>
						<?php
							$data->template_loader->get_template_part('paginate_links_bottom' . $data->event->plan);
						} else {
							?>
							<p>Sorry, we have no events upcoming yet, but check back regularly</p>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	if ($data->utilities->get_element('widgetwrap', $data->args)) { ?>
	</section><!-- End widget wrap -->
<?php }
	$data->template_loader->get_template_part('paginate_links_bottom' . $data->event->plan);
	$data->template_loader->get_template_part('full_modal');

?>

<!-- START -->


<!-- END -->