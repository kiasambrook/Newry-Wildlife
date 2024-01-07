<?php

/**
 * @var mixed $data Custom data for the template.
 */

?>
 <?php
	switch ($data->template) {
		case 'divi':
			$button_markup = '<a target="_blank" %1$s class="text-primary hover:underline" %3$s  aria-label="Learn More %5$ %4$s">Learn More →</a>';
			break;
		default:
			$button_markup = '<a target="_blank" %1$s class="text-primary hover:underline" %3$s  aria-label="Learn More %5$ %4$s">Learn More →</a>';
	}
	printf(
		$button_markup,
		$data->event->booknow,
		wp_kses_post($button_markup),
		($data->utilities->get_element('newtab', $data->args)) ? 'target="_blank"' : '',
		esc_attr(get_the_title()),
		__('on Eventbrite for', 'widget-for-eventbrite-api')
	);
	?>