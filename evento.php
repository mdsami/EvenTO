<?php

/**
 * Plugin Name: EvenTO - Event & Seminar Seat Booking System
 * Plugin URI: http://codecanyon.net/user/rifat636/portfolio?ref=rifat636
 * Description: Create, edit, delete, manages your Event & Seminar Seats . Create registration forms , Booking Forms.
 * Version: 1.0 
 * Author: The Soft King
 * Author URI: https://codecanyon.net/user/rifat636/portfolio
 * License: GPL2
 */


    // Prohibit direct file accessing.
    defined( 'ABSPATH' ) or die( 'Access not allowed!' );


    // Directory constants value for plugin files, assets.
    define( 'EVENTO_DIR', __DIR__ );
    define( 'EKATTOR_BASE_URL', admin_url() . 'admin.php?page=evento' );




        // Database installation and custom role creation during plugin activation.
    register_activation_hook( __FILE__, 'install_evento_plugin' );		
    function install_evento_plugin() {
        /*
        * Runs database table creation query.
        * Creates user role for teacher, parent, student.
        * Creates directory for user image and study material document upload.
        */
        include ( EVENTO_DIR . '/plugin-installer.php' );
    }


        // Adding plugin to admin menu.
    add_action( 'admin_menu', 'evento_plugin' );
    function evento_plugin() {
        $menu = add_menu_page( 'EvenTO - Event ,Seminar Seat Booking System', 'EvenTO', 'read' , 'evento', 'evento_manager' );

        // Css and javascript adding action calling.
        add_action( 'admin_print_styles-' . $menu, 'evento_add_styles' );
        add_action( 'admin_print_scripts-' . $menu, 'evento_add_scripts' );
    }



	// Enqueue plugin template css files.
	function evento_add_styles() {


		wp_enqueue_style( 'login-2',            plugins_url( 'assets/css/login-2.css', __FILE__ ) );
		wp_enqueue_style( 'login-4',            plugins_url( 'assets/css/login-4.css ', __FILE__ ) );
		wp_enqueue_style( 'login-min',          plugins_url( 'assets/css/login.min.css ', __FILE__ ) );
		wp_enqueue_style( 'portfolio-minportfolio-min',   plugins_url( 'assets/css/portfolio.min.css', __FILE__ ) );
		wp_enqueue_style( 'profile-2.min',      plugins_url( 'assets/css/profile-2.min.css ', __FILE__ ) );
		wp_enqueue_style( 'search-min',         plugins_url( 'assets/css/search.min.css', __FILE__ ) );
		wp_enqueue_style( 'login-2-min',        plugins_url( 'assets/css/login-2.min.css', __FILE__ ) );
		wp_enqueue_style( 'login-4-min',        plugins_url( 'assets/css/login-4.min.css', __FILE__ ) );
		wp_enqueue_style( 'normalize',          plugins_url( 'assets/css/normalize.css', __FILE__ ) );
		wp_enqueue_style( 'pricing',            plugins_url( 'assets/css/pricing.css', __FILE__ ) );
		wp_enqueue_style( 'profile',            plugins_url( 'assets/css/profile.css', __FILE__ ) );
		wp_enqueue_style( 'style',              plugins_url( 'assets/css/style.css', __FILE__ ) );
		wp_enqueue_style( 'login-3',            plugins_url( 'assets/css/login-3.css', __FILE__ ) );
		wp_enqueue_style( 'login-5',            plugins_url( 'assets/css/login-5.css', __FILE__ ) );
		wp_enqueue_style( 'plugins-min',        plugins_url( 'assets/css/plugins.min.css', __FILE__ ) );
		wp_enqueue_style( 'pricing-min',        plugins_url( 'assets/css/pricing.min.css', __FILE__ ) );
		wp_enqueue_style( 'profile-min',        plugins_url( 'assets/css/profile.min.css', __FILE__ ) );
		wp_enqueue_style( 'normalize',          plugins_url( 'assets/css/normalize.css', __FILE__ ) );
		wp_enqueue_style( 'tasks',              plugins_url( 'assets/css/tasks.css', __FILE__ ) );
		wp_enqueue_style( 'login-3-min',        plugins_url( 'assets/css/login-3.min.css', __FILE__ ) );
		wp_enqueue_style( 'login-5-min',        plugins_url( 'assets/css/login-5.min.css', __FILE__ ) );
		wp_enqueue_style( 'portfolio ',         plugins_url( 'assets/css/portfolio.css', __FILE__ ) );
		wp_enqueue_style( 'profile-2',          plugins_url( 'assets/css/profile-2.css', __FILE__ ) );
		wp_enqueue_style( 'search',             plugins_url( 'assets/css/search.css', __FILE__ ) );
		wp_enqueue_style( 'tasks.min',          plugins_url( 'assets/css/tasks.min.css', __FILE__ ) );
		wp_enqueue_style( 'error-min',          plugins_url( 'assets/css/error.min.css', __FILE__ ) );
		wp_enqueue_style( 'image-crop',         plugins_url( 'assets/css/image-crop.css', __FILE__ ) );
		wp_enqueue_style( 'invoice-2.min',      plugins_url( 'assets/css/invoice-2.min.css', __FILE__ ) );
		wp_enqueue_style( 'layout-min',         plugins_url( 'assets/css/layout.min.css', __FILE__ ) );
		wp_enqueue_style( 'lock.css',           plugins_url( 'assets/css/lock.css', __FILE__ ) );
		wp_enqueue_style( 'faq',                plugins_url( 'assets/css/faq.css', __FILE__ ) );
		wp_enqueue_style( 'image-crop-min',     plugins_url( 'assets/css/image-crop.min.css', __FILE__ ) );
		wp_enqueue_style( 'invoice',            plugins_url( 'assets/css/invoice.css', __FILE__ ) );
		wp_enqueue_style( 'lock-2',             plugins_url( 'assets/css/lock-2.css', __FILE__ ) );
		wp_enqueue_style( 'lock.min',           plugins_url( 'assets/css/lock.min.csss', __FILE__ ) );
		wp_enqueue_style( 'faq-min',            plugins_url( 'assets/css/faq.min.css', __FILE__ ) );
		wp_enqueue_style( 'invoice-2',          plugins_url( 'assets/css/invoice-2.css', __FILE__ ) );
		wp_enqueue_style( 'invoice-min',        plugins_url( 'assets/css/invoice.min.css ', __FILE__ ) );
		wp_enqueue_style( 'lock-2-min',         plugins_url( 'assets/css/lock-2.min.css', __FILE__ ) );
		wp_enqueue_style( 'login',              plugins_url( 'assets/css/login.css', __FILE__ ) );
		wp_enqueue_style( 'about',          	plugins_url( 'assets/css/about.css', __FILE__ ) );
		wp_enqueue_style( 'blog-min',           plugins_url( 'assets/css/blog.min.css', __FILE__ ) );
		wp_enqueue_style( 'coming-soon-min',    plugins_url( 'assets/css/coming-soon.min.css', __FILE__ ) );
		wp_enqueue_style( 'contact-min',        plugins_url( 'assets/css/contact.min.css', __FILE__ ) );
		wp_enqueue_style( 'error-css',          plugins_url( 'assets/css/error.css', __FILE__ ) );
		wp_enqueue_style( 'about-min',          plugins_url( 'assets/css/about.min.css', __FILE__ ) );
		wp_enqueue_style( 'bootstrap-min',       plugins_url( 'assets/css/bootstrap.min.css', __FILE__ ) );
		wp_enqueue_style( 'components-rounded-min', plugins_url( 'assets/css/components-rounded.min.css', __FILE__ ) );
		wp_enqueue_style( 'custom-min',          plugins_url( 'assets/css/custom.min.css', __FILE__ ) );
		wp_enqueue_style( 'blog-css',           plugins_url( 'assets/css/blog.css', __FILE__ ) );
		wp_enqueue_style( 'coming-soon',        plugins_url( 'assets/css/coming-soon.css ', __FILE__ ) );
		wp_enqueue_style( 'contact',            plugins_url( 'assets/css/contact.css', __FILE__ ) );
		wp_enqueue_style( 'darkblue-min',       plugins_url( 'assets/css/darkblue.min.css', __FILE__ ) );




	}


	// Enqueue plugin template js files.
	function evento_add_scripts() {
		wp_enqueue_script( 'app-min-js',        plugins_url( 'assets/js/app.min.js ', __FILE__ ), '', '', true );
		wp_enqueue_script( 'datatable-min',     plugins_url( 'assets/js/datatable.min.js', __FILE__ ), '', '', true );
		wp_enqueue_script( 'layout-min-js',     plugins_url( 'assets/js/layout.min.js ', __FILE__ ), '', '', true );
		wp_enqueue_script( 'table-datatables',  plugins_url( 'assets/js/table-datatables-buttons.js', __FILE__ ), '', '', true );
		wp_enqueue_script( 'demo.min',          plugins_url( 'assets/js/demo.min.js', __FILE__ ), '', '', true );
		wp_enqueue_script( 'login-min',         plugins_url( 'assets/js/login.min.js ', __FILE__ ), '', '', true );
		wp_enqueue_script( 'datatable',         plugins_url( 'assets/js/datatable.js', __FILE__ ), '', '', true );

		wp_enqueue_script( 'index',             plugins_url( 'assets/js/index.js', __FILE__ ), '', '', true );
		wp_enqueue_script( 'quick-sidebar.min', plugins_url( 'assets/js/quick-sidebar.min.jstable-datatables-responsive.min.js', __FILE__ ), '', '', true );
		wp_enqueue_script( 'app',               plugins_url( 'assets/js/app.js', __FILE__ ), '', '', true );

	}

?>

                                                                       ..


