<?php
/*
Plugin Name: Inicio
Plugin URI: 
Description: 
Version: 
Author: 
Author URI: 
License: 
License URI: 
*/
if ( ! function_exists('inicia_ac') ) {

// Register Custom Post Type
function inicia_ac() {

	$labels = array(
		'name'                  => _x( 'inicios', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'inicio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Inicio', 'text_domain' ),
		'name_admin_bar'        => __( 'Tipo de mensaje', 'text_domain' ),
		'archives'              => __( 'Archivos del artículo', 'text_domain' ),
		'attributes'            => __( 'Atributos del elemento', 'text_domain' ),
		'parent_item_colon'     => __( 'Artículo principal:', 'text_domain' ),
		'all_items'             => __( 'Todos los artículos', 'text_domain' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'text_domain' ),
		'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
		'edit_item'             => __( 'Editar elemento', 'text_domain' ),
		'update_item'           => __( 'Elemento de actualización', 'text_domain' ),
		'view_item'             => __( 'Ver ítem', 'text_domain' ),
		'view_items'            => __( 'Ver artículos', 'text_domain' ),
		'search_items'          => __( 'Elemento de búsqueda', 'text_domain' ),
		'not_found'             => __( 'Extraviado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la Papelera', 'text_domain' ),
		'featured_image'        => __( 'Foto principal', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
		'items_list'            => __( 'Lista de elementos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de elementos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'inicio', 'text_domain' ),
		'description'           => __( 'Pagina de inicio', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => '',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'inicio', $args );

}
add_action( 'init', 'inicia_ac', 0 );

}