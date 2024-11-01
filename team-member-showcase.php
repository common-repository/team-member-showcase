<?php
/*
Plugin Name: Team Member Showcase
Plugin URI: https://wordpress.org/plugins/team-member-showcase/
Description: Team Member Showcase is a super modern Team Member wordpress plugin. With this plugin you can display a set of pictures and information in different layouts. The main purpose of the plugin is to display team/staff members. Unlimited Colors, 100% responsive, automatic resize images, flexible, unlimited items, shortcode powered, custom link and more.
Author: codecans
Author URI: https://codecans.com/
Version: 2.6.2
*/

//Loading CSS
function rd_team_member_effects_style() {
	wp_enqueue_style('team_mainstyle_css', plugins_url( '/css/team-main-style.css' , __FILE__ ) );
	wp_enqueue_style('team_styleone_css', plugins_url( '/css/team-style-one.css' , __FILE__ ) );
	wp_enqueue_style('team_fontawesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' , __FILE__ );
}
add_action( 'wp_enqueue_scripts', 'rd_team_member_effects_style' );

// added widgets filters
add_filter('widget_text', 'do_shortcode');

//Loading Framework
require_once ('framework/cs-framework.php');

function team_showcase_enqueue_add_init() {
    if ( is_admin() ) {
		wp_enqueue_style( 'team_showcase_master_fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', __FILE__ );
    }
}
add_action( 'admin_enqueue_scripts', 'team_showcase_enqueue_add_init' );

// Registering Custom Post
function rd_team_member_custom_post() {
	register_post_type( 'rd_team_member',
		array(
			'labels' => array(
				'name' => __( 'Team Member' ),
				'singular_name' => __( 'Team Member' ),
				'add_new_item' => __( 'Add New Item' )
			),
			'public' => true,
			'supports' => array('title'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'team-members'),
			'menu_icon' => 'dashicons-groups',
			'menu_position' => 21,
		)
	);	
}
add_action( 'init', 'rd_team_member_custom_post' );

require_once ('shortcode/shortcode.php');
require_once ('shortcode/shortcode_button.php');
?>