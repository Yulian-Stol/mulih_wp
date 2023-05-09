<?php 

//------------------Register Custom Post House----------------------
	function house_post_type() {
			$labels = array(
					'name'                  => _x( 'House', 'Post Type General Name', 'text_domain' ),
					'singular_name'         => _x( 'House', 'Post Type Singular Name', 'text_domain' ),
					'menu_name'             => __( 'House', 'text_domain' ),
					'all_items'             => __( 'House', 'text_domain' ),
					'add_new_item'          => __( 'Добавити House', 'text_domain' ),
					'add_new'               => __( 'Добавити House', 'text_domain' ),
			);
			$args = array(
					'label'                 => __( 'House', 'text_domain' ),
					'labels'                => $labels,
					'supports'              => array( 'thumbnail','title', 'editor','excerpt' ),// 'title','editor','author','thumbnail',,'trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
					'hierarchical'          => false,
					'public'                => true,
					'show_ui'               => true,
					'show_in_menu'          => true,
					'menu_position'         => 4,
					'menu_icon'             => 'dashicons-images-alt2',
					'show_in_admin_bar'     => true,
					'show_in_nav_menus'     => true,
					'can_export'            => true,
					'has_archive'           => true,
					'exclude_from_search'   => false,
					'publicly_queryable'    => true,
					'capability_type'       => 'page',
					'show_in_rest' => true, // Important !
					add_theme_support( 'post-thumbnails' ),
					// 'taxonomies'          => array( 'category' ),
			);
			register_post_type( 'house', $args );
			
	}
	add_action( 'init', 'house_post_type', 0 );