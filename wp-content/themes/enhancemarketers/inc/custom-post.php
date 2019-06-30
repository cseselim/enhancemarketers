<?php 

add_action( 'init', 'services' );
/**
 * Register a service post type.
 *
 * 
 */
function services() {
	$labels = array(
		'name'               => _x( 'Service', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'service', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Service', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Service', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Service', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Service', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Service', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Service', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Service:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No services found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No services found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor','thumbnail')
	);

	register_post_type( 'service', $args );
}



add_action( 'init', 'client_logo' );
/**
 * Register a client_logo post type.
 *
 * 
 */
function client_logo() {
	$labels = array(
		'name'               => _x( 'Client', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Client', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Clients', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Clients', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'client', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Client', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Client', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Client', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Client', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Client', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Client', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Client:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No clients found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No clients found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'client' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'thumbnail' )
	);

	register_post_type( 'client', $args );
}


add_action( 'init', 'team' );
/**
 * Register a team post type.
 *
 * 
 */
function team() {
	$labels = array(
		'name'               => _x( 'Team', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Team', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Teams', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Teams', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'team', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New team', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Team', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Team', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Team', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Team', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Team', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Team:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No teams found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No teams found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor','thumbnail')
	);

	register_post_type( 'team', $args );
}


add_action( 'init', 'project' );
/**
 * Register a project post type.
 *
 * 
 */
function project() {
	$labels = array(
		'name'               => _x( 'Project', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Project', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Projects', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Projects', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'project', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New project', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Project', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Project', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Project', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Project', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Project', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Project:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No projects found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No projects found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'project' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor','thumbnail' )
	);

	register_post_type( 'project', $args );
}


?>