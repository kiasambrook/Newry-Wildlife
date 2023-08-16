<?php
/**
 * @var mixed $data Custom data for the template.
 */
if ( $data->utilities->get_element( 'excerpt', $data->args ) ) {
	?>
    <p class="text-gray-700 mt-2">
	    <?php
	    echo wp_trim_words( apply_filters( 'eawp_excerpt', get_the_excerpt() ), $data->utilities->get_element( 'length', $data->args ), ' &hellip;' );
	    $data->template_loader->get_template_part( 'full_modal_details_button' );
	    ?>
    </p>
	<?php
}
