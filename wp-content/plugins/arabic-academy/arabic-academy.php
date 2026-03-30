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
            'name'          => __( 'Lessons', 'arabic_academy' ),
			'singular_name' => __( 'Lesson', 'arabic_academy' ),
            'search_items'      => __( 'Search Lessons', 'arabic_academy' ),
            'all_items'         => __( 'All Lessons', 'arabic_academy' ),
            'edit_item'         => __( 'Edit Lesson', 'arabic_academy' ),
            'update_item'       => __( 'Update Lesson', 'arabic_academy' ),
            'add_new_item'      => __( 'Add New Lesson', 'arabic_academy' ),
            'new_item_name'     => __( 'New Lesson Name', 'arabic_academy' ),
            'menu_name'         => __( 'Lessons', 'arabic_academy' ),
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
            'name'          => __( 'Tests', 'arabic_academy' ),
            'singular_name' => __( 'Test', 'arabic_academy' ),
            'search_items'      => __( 'Search Tests', 'arabic_academy' ),
            'all_items'         => __( 'All Tests', 'arabic_academy' ),
            'edit_item'         => __( 'Edit Test', 'arabic_academy' ),
            'update_item'       => __( 'Update Test', 'arabic_academy' ),
            'add_new_item'      => __( 'Add New Test', 'arabic_academy' ),
            'new_item_name'     => __( 'New Test Name', 'arabic_academy' ),
            'menu_name'         => __( 'Tests', 'arabic_academy' ),
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
            'name'              => _x( 'Classes', 'taxonomy general name', 'arabic_academy' ),
            'singular_name'     => _x( 'Class', 'taxonomy singular name', 'arabic_academy' ),
            'search_items'      => __( 'Search Classes', 'arabic_academy' ),
            'all_items'         => __( 'All Classes', 'arabic_academy' ),
            'edit_item'         => __( 'Edit Class', 'arabic_academy' ),
            'update_item'       => __( 'Update Class', 'arabic_academy' ),
            'add_new_item'      => __( 'Add New Class', 'arabic_academy' ),
            'new_item_name'     => __( 'New Class Name', 'arabic_academy' ),
            'menu_name'         => __( 'Classes', 'arabic_academy' ),
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
            'name'              => _x( 'Branches', 'taxonomy general name', 'arabic_academy' ),
            'singular_name'     => _x( 'Branch', 'taxonomy singular name', 'arabic_academy' ),
            'search_items'      => __( 'Search Branches', 'arabic_academy' ),
            'all_items'         => __( 'All Branches', 'arabic_academy' ),
            'edit_item'         => __( 'Edit Branch', 'arabic_academy' ),
            'update_item'       => __( 'Update Branch', 'arabic_academy' ),
            'add_new_item'      => __( 'Add New Branch', 'arabic_academy' ),
            'new_item_name'     => __( 'New Branch Name', 'arabic_academy' ),
            'menu_name'         => __( 'Branches', 'arabic_academy' ),
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