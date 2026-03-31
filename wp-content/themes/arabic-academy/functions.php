<?php

add_action( 'wp_enqueue_scripts', 'arabic_academy_enqueue_styles' );

function arabic_academy_enqueue_styles() {
	wp_enqueue_style( 
		'theme-slug-style', 
		get_stylesheet_uri()
	);
}

include __DIR__ . '/blocks/mcq-option-block/mcq-option-block.php';
include __DIR__ . '/blocks/interactive-mcq-options-list-block/interactive-mcq-options-list-block.php';
include __DIR__ . '/blocks/interactive-finish-button-block/interactive-finish-button-block.php';
include __DIR__ . '/blocks/lessons-list-block/lessons-list-block.php';
