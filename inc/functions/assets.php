<?php
/**
	 * Enqueue scripts and styles.
	 *
	 * @return void
	 * @since Twenty Twenty-One 1.0
	 *
	 */
    function myselfbks_scripts(){
        wp_enqueue_style('myselfbks-ani',get_template_directory_uri().'/assets/css/plugins/animate.css',array(),wp_get_theme()->get('Version'));
        wp_enqueue_style('myselfbks-bts',get_template_directory_uri().'/assets/css/plugins/bootstrap.css',array(),wp_get_theme()->get('Version'));
        wp_enqueue_style('myselfbks-btsm',get_template_directory_uri().'/assets/css/plugins/bootstrap.min.css',array(),wp_get_theme()->get('Version'));
        wp_enqueue_style('myselfbks-fa',get_template_directory_uri().'/assets/css/plugins/font-awesome.css',array(),wp_get_theme()->get('Version'));
        wp_enqueue_style('myselfbks-mgp',get_template_directory_uri().'/assets/css/plugins/magnific-popup.css',array(),wp_get_theme()->get('Version'));
        wp_enqueue_style('myselfbks-nrml',get_template_directory_uri().'/assets/css/plugins/normalize.css',array(),wp_get_theme()->get('Version'));
        wp_enqueue_style('myselfbks-p7s',get_template_directory_uri().'/assets/css/plugins/pe-icon-7-stroke.css',array(),wp_get_theme()->get('Version'));
        wp_enqueue_style('myselfbks-ocl',get_template_directory_uri().'/assets/css/plugins/owl.carousel.css',array(),wp_get_theme()->get('Version'));
        wp_enqueue_style('myselfbks-ta',get_template_directory_uri().'/assets/css/plugins/transition-animations.css',array(),wp_get_theme()->get('Version'));
        wp_enqueue_style('myselfbks-mn',get_template_directory_uri().'/assets/css/main.css',array(),wp_get_theme()->get('Version'));
        //scripts
        wp_enqueue_script('myselfbks-mn',get_template_directory_uri().'/assets/js/main.js',array(),wp_get_theme()->get('Version'),true);
        wp_enqueue_script('myselfbks-btmn',get_template_directory_uri().'/assets/js/plugins/bootstrap.min.js',array(),wp_get_theme()->get('Version'),true);
        wp_enqueue_script('myselfbks-jqry',get_template_directory_uri().'/assets/js/plugins/jquery-2.1.3.min.js',array(),wp_get_theme()->get('Version'),true);
        wp_enqueue_script('myselfbks-imgloadpkg',get_template_directory_uri().'/assets/js/plugins/imagesloaded.pkgd.min.js',array(),wp_get_theme()->get('Version'),true);
        wp_enqueue_script('myselfbks-hdir',get_template_directory_uri().'/assets/js/plugins/jquery.hoverdir.js',array(),wp_get_theme()->get('Version'),true);
        wp_enqueue_script('myselfbks-jmpn',get_template_directory_uri().'/assets/js/plugins/jquery.magnific-popup.min.js',array(),wp_get_theme()->get('Version'),true);
        wp_enqueue_script('myselfbks-shm',get_template_directory_uri().'/assets/js/plugins/jquery.shuffle.min.js',array(),wp_get_theme()->get('Version'),true);
        wp_enqueue_script('myselfbks-jmpm',get_template_directory_uri().'/assets/js/plugins/masonry.pkgd.min.js',array(),wp_get_theme()->get('Version'),true);
        wp_enqueue_script('myselfbks-jmc',get_template_directory_uri().'/assets/js/plugins/modernizr.custom.js',array(),wp_get_theme()->get('Version'),true);
        wp_enqueue_script('myselfbks-jmocm',get_template_directory_uri().'/assets/js/plugins/owl.carousel.min.js',array(),wp_get_theme()->get('Version'),true);
        wp_enqueue_script('myselfbks-jpt',get_template_directory_uri().'/assets/js/plugins/page-transition.js',array(),wp_get_theme()->get('Version'),true);
        wp_enqueue_script('myselfbks-jv',get_template_directory_uri().'/assets/js/plugins/validator.js',array(),wp_get_theme()->get('Version'),true);
        
    }
    add_action('wp_enqueue_scripts','myselfbks_scripts');