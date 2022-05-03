<?php 
/**
 * Functions and definitions 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package WordPress
 * @subpackage Myselfbks1
 */
// This theme requires WordPress 5.3 or later.
	if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
		require get_template_directory() . '/inc/back-compat.php';
	}

	if ( ! function_exists( 'myselfbks_theme_setup' ) ) {
		/**
		 * Sets up theme defaults and registers support for various WordPress features.
		 *
		 * Note that this function is hooked into the after_setup_theme hook, which
		 * runs before the init hook. The init hook is too late for some features, such
		 * as indicating support for post thumbnails.
		 *
		 * @return void
		 *
		 */
        function myselfbks_theme_setup(){
           register_nav_menus(
               array(
                   'primary'=>esc_html__('Primary Menu One','myselfbks')
                   
               )
               );

        }
    }
        add_action('after_setup_theme','myselfbks_theme_setup');
		