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

// Generates a unique id for aria-controls.
$unique_id = wp_unique_id('p-');

// Adds the global state.
wp_interactivity_state(
	'arabic-academy',
	array(
		'isDark'    => false,
		'darkText'  => esc_html__('Switch to Light', 'interactive-finish-button-block'),
		'lightText' => esc_html__('Switch to Dark', 'interactive-finish-button-block'),
		'themeText'	=> esc_html__('Switch to Dark', 'interactive-finish-button-block'),
	)
);
?>

<div
	<?php echo get_block_wrapper_attributes(); ?>
	data-wp-interactive="arabic-academy-test"
	data-wp-on--click="actions.finish"
	>
	<button>
		<?php echo esc_html__(
		'Finish',
		'arabic-academy'
		); ?>
	</button>
</div>