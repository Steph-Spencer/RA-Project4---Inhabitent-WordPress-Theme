<?php


/**
 * Register a book post type._
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function get_post_args($post_name) {
	$labels = array(
		'name'               => _x( $post_name, 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( $post_name, 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( $post_name.'s', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( $post_name, 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', $post_name, 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New ' .$post_name, 'your-plugin-textdomain' ),
		'new_item'           => __( 'New ' .$post_name, 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit ' . $post_name, 'your-plugin-textdomain' ),
		'view_item'          => __( 'View '.$post_name, 'your-plugin-textdomain' ),
		'all_items'          => __( 'All '.$post_name.'s', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search ' .$post_name.'s', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent ' .$post_name.'s:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No '.$post_name.'s'. 'found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No '.$post_name.'s'.' found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => $post_name ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	return $args;
}

function create_post_types(){
	$post_names = array("product","adventure");

	foreach($post_names as $post_name) {
		$post_args = get_post_args($post_name);
		register_post_type($post_name, $post_args);
	}

};

add_action( 'init', 'create_post_types' );

add_action( 'init', 'create_taxonomies', 0 );
function get_tax_args($tax_name,$val) {

	$labels = array(
		'name'              => _x( $tax_name.'s', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( $tax_name, 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search '.$tax_name, 'textdomain' ),
		'all_items'         => __( 'All '.$tax_name, 'textdomain' ),
		'parent_item'       => __( 'Parent '.$tax_name, 'textdomain' ),
		'parent_item_colon' => __( 'Parent ' .$tax_name, 'textdomain' ),
		'edit_item'         => __( 'Edit '.$tax_name, 'textdomain' ),
		'update_item'       => __( 'Update'.$tax_name, 'textdomain' ),
		'add_new_item'      => __( 'Add New '.$tax_name, 'textdomain' ),
		'new_item_name'     => __( 'New'.$tax_name.'Name', 'textdomain' ),
		'menu_name'         => __( $tax_name, 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => $tax_name ),
	);

	// return $args;	
	register_taxonomy( $tax_name, $val, $args );

}

function create_taxonomies(){
	$post_taxonomies = array("type" => "product");

	foreach($post_taxonomies as $tax_key => $tax_val) {
	get_tax_args($tax_key,$tax_val);

}

}

?>
