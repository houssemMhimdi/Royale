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
add_action( 'vc_after_init', 'paca_boxed_content', 800 );
function paca_boxed_content() {

	vc_map( array(
	    'name' => __('Boxed content', 'js_composer'),
	    'base' => 'paca_boxed_content',
		'icon' => '',	
		'category' => array(
			__( 'Structure', 'js_composer' ),
			__( 'Royal', 'js_composer' ),
		),
		'params' => array(

			array(
	            'type' => 'colorpicker',
	            'heading' => __('Background Colour', 'js_composer'),
	            'param_name' => 'bg_colour',
	            'value' => '#000000',
	            'description' => __('', 'js_composer'),
	            'admin_label' => true,
	        ),
			array(
	            'type' => 'colorpicker',
	            'heading' => __('Text Colour', 'js_composer'),
	            'param_name' => 'text_colour',
	            'value' => '#ffffff',
	            'description' => __('', 'js_composer'),
	            'admin_label' => true,
	        ),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'js_composer' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
			),
			array(
				'type' => 'css_editor',
				'heading' => __( 'CSS box', 'js_composer' ),
				'param_name' => 'css',
				'group' => __( 'Design Options', 'js_composer' ),
			),	        

		),		
	    'content_element' => true,
	    'show_settings_on_create' => true,
	    'is_container' => true,
	    'js_view' => 'VcColumnView'
		
	) );

	if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	    class WPBakeryShortCode_Paca_Boxed_Content extends WPBakeryShortCodesContainer {
	    }
	}


}
