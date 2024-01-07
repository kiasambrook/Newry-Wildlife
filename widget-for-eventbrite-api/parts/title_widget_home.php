<?php
/**
 * @var mixed $data Custom data for the template.
 */
?>
<h3 class="text-xl font-semibold mb-2">
	<?php
	printf( '<a %1$s title="%2$s" rel="bookmark" %4$s><h3 class="text-xl font-semibold mb-2">%3$s</h3></a>',
		$data->event->booknow,
		sprintf( esc_attr__( 'Eventbrite link to %1$s', 'widget-for-eventbrite-api' ), the_title_attribute( 'echo=0' ) ),
		the_title_attribute( 'echo=0' ),
		( $data->utilities->get_element( 'newtab', $data->args ) ) ? 'target="_blank"' : ''
	);
	?>
</h3>
