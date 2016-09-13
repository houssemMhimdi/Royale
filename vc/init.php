<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
* @category    Core
* @author      Andrew Creswell
* @copyright   Copyright (c) 2015, PixelBin
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.0
*/

if(!class_exists('Paca_Shortcodes')) :

	class Paca_Shortcodes {

		public static function init(){

			self::declare_constants();
			add_action('init', array(__CLASS__, 'init_js_composer'), 8);

		}

		public static function declare_constants(){
			DEFINE('PS_PATH', trailingslashit(get_template_directory() . '/vc') );
		}

		public static function declare_shortcodes(){

			$shortcodes = array(
				'custom-button' => 'ps_buttons.php',
			);

			foreach( $shortcodes as $shortcode ) :
				include(PS_PATH . 'shortcodes/' . $shortcode);
			endforeach;

		}

		/**
		 * Check if VC is init
		 * @return  null
		 */
		static function init_js_composer(){

			if(defined('WPB_VC_VERSION')){//check if visual composer is active and the version is 3.7 or greater.

				if( version_compare(WPB_VC_VERSION, '3.7') <= 0){

					add_action( 'admin_notices', array(__CLASS__, 'admin_version_notification') );
 
				} else {

					self::add_actions();
					require_once(PS_PATH . 	'config/setup.php');
					self::declare_shortcodes();
				}

			} else {

				add_action( 'admin_notices', array(__CLASS__, 'admin_activation_notification') );
			}
		}

		static function admin_version_notification(){

			echo '<div class="updated"><p><strong>VC shortcodes : </strong>Visual Composer version need to be 3.7 or greater please update.</p></div>';

		}

		static function admin_activation_notification(){

			echo '<div class="updated"><p><strong>VC shortcodes : </strong><strong>Visual Composer</strong> Plugin need to be installed and activated.</p></div>';
		}

		public static function add_actions(){


		}



	}
	Paca_Shortcodes::init();

endif; // endif class exists