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

		}

		static function require_files(){

			//require_once('core/customiser.php');
			
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


	}

	PapaCiga::init();






































