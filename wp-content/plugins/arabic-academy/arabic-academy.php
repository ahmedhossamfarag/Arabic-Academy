<?php
/*
Plugin Name: Arabic Academy
Description: Custom Plugin for the Arabic Academy Website
Author: Ahmed Farag
Version: 1.0.0
*/


// Do not load directly.
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

if(!function_exists('arabic_academy_register_custom_post_types_and_taxonomies')){
    function arabic_academy_register_custom_post_types_and_taxonomies(){
        // Lesson Post Type
        $labels = [
            'name'          => __( 'Lessons', 'arabic-academy' ),
			'singular_name' => __( 'Lesson', 'arabic-academy' ),
            'search_items'      => __( 'Search Lessons', 'arabic-academy' ),
            'all_items'         => __( 'All Lessons', 'arabic-academy' ),
            'edit_item'         => __( 'Edit Lesson', 'arabic-academy' ),
            'update_item'       => __( 'Update Lesson', 'arabic-academy' ),
            'add_new_item'      => __( 'Add New Lesson', 'arabic-academy' ),
            'new_item_name'     => __( 'New Lesson Name', 'arabic-academy' ),
            'menu_name'         => __( 'Lessons', 'arabic-academy' ),
        ];
        $args = [
            'labels'      => $labels,
			'public'      => true,
			'has_archive' => false,
            'show_in_rest' => true,
			'rewrite'     => array( 'slug' => 'lessons' ),
        ];
        register_post_type('lesson', $args );

        // Test Post Type
        $labels = [
            'name'          => __( 'Tests', 'arabic-academy' ),
            'singular_name' => __( 'Test', 'arabic-academy' ),
            'search_items'      => __( 'Search Tests', 'arabic-academy' ),
            'all_items'         => __( 'All Tests', 'arabic-academy' ),
            'edit_item'         => __( 'Edit Test', 'arabic-academy' ),
            'update_item'       => __( 'Update Test', 'arabic-academy' ),
            'add_new_item'      => __( 'Add New Test', 'arabic-academy' ),
            'new_item_name'     => __( 'New Test Name', 'arabic-academy' ),
            'menu_name'         => __( 'Tests', 'arabic-academy' ),
        ];
        $args = [
            'labels'      => $labels,
			'public'      => true,
			'has_archive' => false,
            'show_in_rest' => true,
			'rewrite'     => array( 'slug' => 'tests' ),
        ];
        register_post_type('test', $args );

        // Class Taxonomy
        $labels = array(
            'name'              => _x( 'Classes', 'taxonomy general name', 'arabic-academy' ),
            'singular_name'     => _x( 'Class', 'taxonomy singular name', 'arabic-academy' ),
            'search_items'      => __( 'Search Classes', 'arabic-academy' ),
            'all_items'         => __( 'All Classes', 'arabic-academy' ),
            'edit_item'         => __( 'Edit Class', 'arabic-academy' ),
            'update_item'       => __( 'Update Class', 'arabic-academy' ),
            'add_new_item'      => __( 'Add New Class', 'arabic-academy' ),
            'new_item_name'     => __( 'New Class Name', 'arabic-academy' ),
            'menu_name'         => __( 'Classes', 'arabic-academy' ),
        );
        $args   = array(
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'show_in_rest'      => true,
            'rewrite'           => [ 'slug' => 'classes' ],
        );
        register_taxonomy( 'class', [ 'lesson', 'test' ], $args );

        // Branch Taxonomy
        $labels = array(
            'name'              => _x( 'Branches', 'taxonomy general name', 'arabic-academy' ),
            'singular_name'     => _x( 'Branch', 'taxonomy singular name', 'arabic-academy' ),
            'search_items'      => __( 'Search Branches', 'arabic-academy' ),
            'all_items'         => __( 'All Branches', 'arabic-academy' ),
            'edit_item'         => __( 'Edit Branch', 'arabic-academy' ),
            'update_item'       => __( 'Update Branch', 'arabic-academy' ),
            'add_new_item'      => __( 'Add New Branch', 'arabic-academy' ),
            'new_item_name'     => __( 'New Branch Name', 'arabic-academy' ),
            'menu_name'         => __( 'Branches', 'arabic-academy' ),
        );
        $args   = array(
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'publicly_queryable'   => false,
            'rewrite'           => false,
        );
        register_taxonomy( 'branch', [ 'lesson', 'test' ], $args );

    }

    add_action('init', 'arabic_academy_register_custom_post_types_and_taxonomies');
}