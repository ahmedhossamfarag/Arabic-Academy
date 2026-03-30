<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$processor = new WP_HTML_Tag_Processor( $content );
$id = 1;
while ( $processor->next_tag( 'div' ) ) {
    if ( $processor->has_class( 'wp-block-arabic-academy-mcq-option-block' ) ) {
		$processor->set_attribute('data-value', $id);
        $processor->set_attribute( 'data-wp-on--click', 'actions.setSelected' );
		$processor->set_attribute('data-wp-class--selected', 'context.isSelected' . $id);
		$id++;
    }
}

$content = $processor->get_updated_html();

?>

<div
	data-wp-interactive="arabic-academy-test"
	<?php echo wp_interactivity_data_wp_context( array("selected" => -1) ); ?>
	data-wp-class--active="state.active"
>
	<?php echo $content; ?>
</div>
