<?php
/**
* @package     Royal
* @category    Core
* @author      Jason Van Hil
* @copyright   Copyright (c) 2015, PixelBin
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.0
* 
*/
add_action( 'vc_after_init', 'paca_container', 800 );
function paca_container() {

	vc_map( array(
	    'name' => __('Container', 'my-text-domain'),
	    'base' => 'paca_container',
		'icon' => '',	
		'category' => array(
			__( 'Structure', 'js_composer' ),
			__( 'Royal', 'js_composer' ),
		),
	    'content_element' => true,
	    'show_settings_on_create' => false,
	    'is_container' => true,
	    'js_view' => 'VcColumnView'
	) );



	if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	    class WPBakeryShortCode_Paca_Container extends WPBakeryShortCodesContainer {
	    }
	}


}
