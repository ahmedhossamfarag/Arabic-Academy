<?php
// This file is generated. Do not modify it manually.
return array(
	'lessons-list-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'arabic-academy/lessons-list-block',
		'version' => '0.1.0',
		'title' => 'Lessons List Block',
		'category' => 'widgets',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'text' => false
			)
		),
		'attributes' => array(
			'class' => array(
				'type' => 'string'
			),
			'branch' => array(
				'type' => 'string'
			),
			'version' => array(
				'type' => 'string',
				'default' => 'v1'
			)
		),
		'textdomain' => 'lessons-list-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	)
);
