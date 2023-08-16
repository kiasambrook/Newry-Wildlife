<?php
/**
 * @var mixed $data Custom data for the template.
 */
if ( property_exists( $data->event, 'cta' ) ) {
	$cta_text = $data->event->cta->text;
} else {
	$cta_text = $data->utilities->get_element( 'booknow_text', $data->args );
}
if ( $data->utilities->get_element( 'booknow', $data->args ) ) {
	?>
    <div class="text-right mt-4"> <?php
	switch ( $data->template ) {
		case 'divi':
			$button_markup = '<a %1$s class="bg-primary text-white px-4 py-2 rounded-full hover:bg-green-600 transition duration-300" %3$s  aria-label="%2$s %5$ %4$s">%2$s</a>';
			break;
		default:
			$button_markup = '<a %1$s class="bg-primary text-white px-4 py-2 rounded-full hover:bg-green-600 transition duration-300" %3$s  aria-label="%2$s %5$ %4$s">%2$s</a>';
	}
	printf( $button_markup,
		$data->event->booknow,
		wp_kses_post( $cta_text ),
		( $data->utilities->get_element( 'newtab', $data->args ) ) ? 'target="_blank"' : '',
		esc_attr( get_the_title() ),
		__( 'on Eventbrite for', 'widget-for-eventbrite-api' )
	);
	?></div><?php
}
