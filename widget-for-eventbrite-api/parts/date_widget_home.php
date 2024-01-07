<?php
/**
 * @var mixed $data Custom data for the template.
 */
if ( $data->utilities->get_element( 'date', $data->args ) ) : ?> 
		<?php
		$date = $data->utilities->get_event_time($data->args);
		$date = date('jS M Y', strtotime($date));
		printf( '<time class="" datetime="%1$s">%2$s</time>', esc_html( get_the_modified_date() ), esc_html( $date ) );
		?>
<?php endif ?>
