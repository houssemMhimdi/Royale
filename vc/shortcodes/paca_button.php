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
add_action( 'vc_after_init', 'paca_button', 800 );
function paca_button() {

	vc_map( array(
	    'name' => __('Button', 'js_composer'),
	    'base' => 'paca_button',
		'icon' => '',	
		'category' => array(
			__( 'Structure', 'js_composer' ),
			__( 'Royal', 'js_composer' ),
		),
		'params' => array(

			array(
	            'type' => 'textfield',
	            'heading' => __('Button', 'js_composer'),
	            'param_name' => 'button_title',
	            'description' => __('', 'js_composer'),
	            'admin_label' => true,
	        ),
			array(
	            'type' => 'vc_link',
	            'heading' => __('Button link', 'js_composer'),
	            'param_name' => 'button_url',
	            'description' => __('', 'js_composer'),
	            'admin_label' => true,
	        ),
			array(
	            'type' => 'paca_check_box',
	            'heading' => __('Button', 'js_composer'),
	            'param_name' => 'button_icon_status',
	            'description' => __('', 'js_composer'),
	            'admin_label' => true,
	        ),
			array(
	            'type' => 'iconpicker',
	            'value' => 'fa fa-angle-right',
	            'heading' => __('Button Icon', 'js_composer'),
	            'param_name' => 'button_icon',
			    'dependency' => array(
			        'element' => 'button_icon_status',
			        'value' => 'true',
			        'not_empty' => true,
			    ),
	            'description' => __('', 'js_composer'),
	        ),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Button Shape', 'js_composer' ),
				'param_name' => 'btn_shape',
				'value' => paca_buttons_shapes(),
				'std' => 'normal',
				'description' => __( '', 'js_composer' ),
				'admin_label' => true,

			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Button Size', 'js_composer' ),
				'param_name' => 'btn_size',
				'value' => paca_buttons_sizes(),
				'std' => 'normal',
				'description' => __( '', 'js_composer' ),
				'admin_label' => true,

			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Button Colour', 'js_composer' ),
				'param_name' => 'btn_colour',
				'value' => paca_buttons_colours(),
				'std' => 'normal',
				'description' => __( '', 'js_composer' ),
				'admin_label' => true,

			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Button Hover', 'js_composer' ),
				'param_name' => 'btn_hover',
				'value' => paca_buttons_hover(),
				'std' => 'hover-right',
				'description' => __( '', 'js_composer' ),
				'admin_label' => true,

			),
			array(
	            'type' => 'paca_check_box',
	            'heading' => __('Centred Button', 'js_composer'),
	            'param_name' => 'btn_centre',
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
		
	) );

	if ( class_exists( 'WPBakeryShortCode' ) ) {

	    class WPBakeryShortCode_Paca_Button extends WPBakeryShortCode {

	      	protected $template_vars = array();

	      	public function buildTemplate( $atts, $content ) {

				$output = array();

				$output['content'] = wpb_js_remove_wpautop( $content, true );

				$this->template_vars = $output;
			}

			public function getTemplateVariable( $string ) {
				if ( is_array( $this->template_vars ) && isset( $this->template_vars[ $string ] ) ) {

					return $this->template_vars[ esc_attr($string) ];
				}

				return '';
			}

	    }
	}


}
