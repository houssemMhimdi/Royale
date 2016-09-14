<?php
	/*
	 *  Author: Jason Van Hil
	 *  Author URI: #
	 *  Text Domain: papa-ciga
	 */
	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


	class PapaCiga {

		protected static $version = '1.0.0';
		static function init(){

			self::require_files();
			self::add_actions();

		}

		/**
		 * Load The actions
		 * @return NULL
		 */
		static function add_actions(){

			add_action('wp_enqueue_scripts', array(__CLASS__, 'load_default_css'), 100);
			add_action('wp_enqueue_scripts', array(__CLASS__, 'load_header_js'));
			add_action('wp_footer', array(__CLASS__, 'load_footer_js'));
			add_action( 'after_setup_theme', array(__CLASS__, 'papaciga_setup') );
			add_action( 'comment_form_before', array(__CLASS__, 'papaciga_enqueue_comment_reply_script') );
			add_action( 'wp_title', array(__CLASS__, 'papaciga_filter_wp_title') );
			add_action( 'widgets_init', array(__CLASS__, 'papaciga_widgets_init') );
			add_action( 'get_comments_number', array(__CLASS__, 'papaciga_comments_number') );
			add_action( 'init', array(__CLASS__, 'papaciga_include_files') , 1 );

		}

		static function require_files(){

			//require_once('core/customiser.php');
			require_once('vc/init.php');

			
		}

		/**
		 * Load Default Theme CSS
		 * @return  null
		 */
		static function load_default_css(){

			wp_register_style('styles', get_template_directory_uri() . '/assets/styles.css', array(), '1.0', 'all');
		    wp_enqueue_style('styles'); // Enqueue it!

		}
		/**
		 * Load Default WP Scripts In Header
		 * @return NULL
		 */

		static function load_header_js(){
			wp_enqueue_script('jquery'); // Enqueue it!
			wp_enqueue_script('jquery-ui-core'); // Enqueue it!
		}

		/**
		 * Load JS File Into footer
		 * @return  null
		 */
		static function load_footer_js(){

			wp_register_script('bootstrap', get_template_directory_uri() . '/assets/javascripts/bootstrap.min.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('bootstrap'); // Enqueue it!
			wp_register_script('slick', get_template_directory_uri() . '/assets/javascripts/slick.min.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('slick'); // Enqueue it!
    		
			wp_register_script('main', get_template_directory_uri() . '/assets/javascripts/main.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('main'); // Enqueue it!
    		
			wp_register_script('lightgallery-js', get_template_directory_uri() . '/assets/javascripts/lightgallery.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('lightgallery-js'); // Enqueue it!
    		
			wp_register_script('lg-fullscreen', get_template_directory_uri() . '/assets/javascripts/lg-fullscreen.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('lg-fullscreen'); // Enqueue it!
    		
			wp_register_script('lg-thumbnail', get_template_directory_uri() . '/assets/javascripts/lg-thumbnail.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('lg-thumbnail'); // Enqueue it!
    		
			wp_register_script('lg-video', get_template_directory_uri() . '/assets/javascripts/lg-video.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('lg-video'); // Enqueue it!
    		
			wp_register_script('lg-autoplay', get_template_directory_uri() . '/assets/javascripts/lg-autoplay.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('lg-autoplay'); // Enqueue it!
    		
			wp_register_script('lg-zoom', get_template_directory_uri() . '/assets/javascripts/lg-zoom.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('lg-zoom'); // Enqueue it!
    		
			wp_register_script('lg-pager', get_template_directory_uri() . '/assets/javascripts/lg-pager.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('lg-pager'); // Enqueue it!
    		
			wp_register_script('mousewheel-min', get_template_directory_uri() . '/assets/javascripts/jquery.mousewheel.min.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('mousewheel-min'); // Enqueue it!
    		
			wp_register_script('masonry-pkgd', 'https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('masonry-pkgd'); // Enqueue it!

			wp_register_script('masonry-pkgd', 'https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('masonry-pkgd'); // Enqueue it!

			wp_register_script('picturefill-min', 'https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script('picturefill-min'); // Enqueue it!

		}

		static function papaciga_setup(){
			load_theme_textdomain( 'papaciga', get_template_directory() . '/languages' );
			add_theme_support( 'title-tag' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'post-thumbnails' );
			global $content_width;
			if ( ! isset( $content_width ) ) $content_width = 640;
			register_nav_menus(
				array( 'main-menu' => __( 'Main Menu', 'papaciga' ) )
			);
			show_admin_bar(false);
		}



		static function papaciga_filter_wp_title( $title ){
			return $title . esc_attr( get_bloginfo( 'name' ) );
		}


		/**
		 * Create the default template widget
		 * @return NULL
		 */
		static function papaciga_widgets_init(){
			register_sidebar( array (
				'name' => __( 'Sidebar Widget Area', 'papaciga' ),
				'id' => 'primary-widget-area',
				'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
				'after_widget' => "</li>",
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
			) );
		}

		/**
		 * papaciga_comments_number
		 * @param  (int) $count
		 * @return (int)
		 */
		static function papaciga_comments_number( $count ){
			if ( !is_admin() ) {
				global $id;
				$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
				return count( $comments_by_type['comment'] );
			} else {
				return $count;
			}
		}

		/**
		 * Include files
		 */
		static function papaciga_include_files(){
			include 'classes/nav-walker.php';
		}


	}

	PapaCiga::init();


	function paca_buttons_shapes(){

		$list = array(
					__( 'Normal', 'js_composer' ) 			=> 'normal',
					__( 'Bordered', 'js_composer' ) 		=> 'bordered',
					__( 'Rounded', 'js_composer' ) 			=> 'rounded',
					__( 'Rounded Bordered', 'js_composer' ) => 'rounded-bordered',
				);
		return $list;

	}

	function paca_buttons_sizes(){

		$list = array(
					__( 'Normal', 'js_composer' ) 				=> 'normal',
					__( 'Medium', 'js_composer' ) 				=> 'medium',
					__( 'Large', 'js_composer' ) 				=> 'large',
					__( 'Extra Large Bordered', 'js_composer' ) => 'x-large',
					__( 'Full Width', 'js_composer' ) 			=> 'full-width',
				);
		return $list;

	}

	function paca_buttons_colours(){

		$list = array(
					__( 'Normal', 'js_composer' ) 			=> 'normal',
					__( 'Apple', 'js_composer' ) 			=> 'paca-button-apple',
					__( 'Black', 'js_composer' ) 			=> 'paca-button-black',
					__( 'Bright Sun', 'js_composer' ) 		=> 'paca-button-bright-sun',
					__( 'Curious Blue', 'js_composer' ) 	=> 'paca-button-curious-blue',
					__( 'Grey', 'js_composer' ) 			=> 'paca-button-grey',
					__( 'Java', 'js_composer' ) 			=> 'paca-button-java',
					__( 'Orange', 'js_composer' ) 			=> 'paca-button-orange',
					__( 'Purple Heart', 'js_composer' ) 	=> 'paca-button-purple-heart',
					__( 'Red', 'js_composer' ) 				=> 'paca-button-red',
				);
		return $list;

	}


	function paca_buttons_hover(){

		$list = array(
					__( 'Hover Left', 'js_composer' ) 			=> 'hover-left',
					__( 'Hover Right', 'js_composer' ) 			=> 'hover-right',
				);
		return $list;

	}











