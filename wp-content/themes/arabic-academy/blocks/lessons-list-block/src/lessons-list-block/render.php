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
if (is_tax('class')) {
	$class = get_queried_object()->term_id;
	$attributes['class'] = $class;
}

if (!empty($attributes['class']) && !empty($attributes['branch'])) {
	$lessons = new WP_Query([
		'post_type' => 'lesson',
		'tax_query'      => [
			'relation' => 'AND',
			[
				'taxonomy' => 'branch',
				'field'    => 'term_id',
				'terms'    => $attributes['branch'],
			],
			[
				'taxonomy' => 'class',
				'field'    => 'term_id',
				'terms'    => $attributes['class'],
			],
		],
		'posts_per_page' => 20,
		'orderby' => 'date',
		'order' => 'ASC'
	]);
	$lessons = $lessons->get_posts();
}else{
	$lessons = [];
}

?>
<div <?php echo get_block_wrapper_attributes(["class" => $attributes['version']]); ?>>
	<?php foreach ($lessons as $i => $lesson): ?>
		<a href="<?php echo esc_url(get_permalink($lesson)) ?>">
			<div class='container'>
				<div class='label'>
					<p>
						<?php echo esc_html($i + 1) ?>
					</p>
				</div>
				<div class='text'>
					<p>
						<?php echo esc_html(get_the_title($lesson)) ?>
					</p>
				</div>
				<div class='trailing'>
					<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M5.83333 11.6667L0 5.83333L5.83333 0L6.86875 1.03542L2.07083 5.83333L6.86875 10.6313L5.83333 11.6667Z" fill="#00464A" />
					</svg>
				</div>
			</div>
		</a>
	<?php endforeach ?>
</div>