<?php
// This file is generated. Do not modify it manually.
return array(
	'mcq-option-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'arabic-academy/mcq-option-block',
		'version' => '0.1.0',
		'title' => 'MCQ Option Block',
		'category' => 'widgets',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'color' => array(
				'background' => true,
				'text' => false
			),
			'html' => false
		),
		'attributes' => array(
			'text' => array(
				'type' => 'string',
				'default' => 'Option'
			),
			'label' => array(
				'type' => 'string',
				'default' => 'A'
			),
			'correct' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'textdomain' => 'mcq-option-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	)
);
