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
add_action( 'vc_after_init', 'paca_full_screen_slider', 800 );
function paca_full_screen_slider() {

	vc_map( array(
	    'name' => __('Full Screen Slider', 'my-text-domain'),
	    'base' => 'paca_full_screen_slider_container',
		'icon' => 'icon-wpb-ui-button',	
		'category' => array(
			__( 'Content', 'js_composer' ),
			__( 'Royal', 'js_composer' ),
		),
		'params'=>array(
			array(
				'type' => 'dropdown',
				'heading' => __( 'Infinite', 'js_composer' ),
				'param_name' => 'infinite',
				'value' => array(
					__( 'Enable', 'js_composer' ) 			=> 'true',
					__( 'Disable', 'js_composer' ) 			=> 'false',
				),
				'std' => 'true',
				'description' => __( '', 'js_composer' ),
				'admin_label' => true,

	        ),
			array(
	            'type' => 'textfield',
	            'heading' => __('Duration', 'js_composer'),
	            'value' => '6000',
	            'param_name' => 'duration',
	            'description' => __('', 'js_composer'),
	            'admin_label' => true,
	        ),

			array(
				'type' => 'dropdown',
				'heading' => __( 'Dots', 'js_composer' ),
				'param_name' => 'dots',
				'value' => array(
					__( 'Enable', 'js_composer' ) 			=> 'true',
					__( 'Disable', 'js_composer' ) 			=> 'false',
				),
				'std' => 'true',
				'description' => __( '', 'js_composer' ),
				'admin_label' => true,

	        ),

			array(
	            'type' => 'textfield',
	            'heading' => __('Autoplay Speed', 'js_composer'),
	            'value' => '6000',
	            'param_name' => 'autoplaySpeed',
	            'description' => __('', 'js_composer'),
	            'admin_label' => true,
	        ),

			array(
				'type' => 'dropdown',
				'heading' => __( 'Autoplay', 'js_composer' ),
				'param_name' => 'autoplay',
				'value' => array(
					__( 'Enable', 'js_composer' ) 			=> 'true',
					__( 'Disable', 'js_composer' ) 			=> 'false',
				),
				'std' => 'true',
				'description' => __( '', 'js_composer' ),
				'admin_label' => true,

	        ),
		),
	    'as_parent' => array('only' => 'paca_full_screen_slider'),
	    'content_element' => true,
	    'show_settings_on_create' => true,
	    'is_container' => true,
	    'js_view' => 'VcColumnView'
	) );


	vc_map( array(
		'name' => __( 'Slide', 'js_composer' ),
		'base' => 'paca_full_screen_slider',
		'class' => '',
		'icon' => 'icon-wpb-ui-button',
		'as_child' => array('only' => 'paca_full_screen_slider_container'),
		'category' => array(
			__( 'Content', 'js_composer' ),
			__( 'Royal', 'js_composer' ),
		),

		'description' => __( 'A full width and height slider', 'js_composer' ),
		'params' => array(

			array(
	            'type' => 'textfield',
	            'heading' => __('Title', 'js_composer'),
	            'param_name' => 'title',
	            'description' => __('', 'js_composer'),
	            'admin_label' => true,
	        ),
			array(
	            'type' => 'textarea',
	            'heading' => __('Content', 'js_composer'),
	            'param_name' => 'content',
	            'description' => __('', 'js_composer'),
	            'admin_label' => true,
	        ),
			array(
	            'type' => 'vc_link',
	            'heading' => __('Url', 'js_composer'),
	            'param_name' => 'url',
	            'description' => __('', 'js_composer'),
	            'admin_label' => true,
	        ),
			array(
	            'type' => 'textfield',
	            'heading' => __('Button', 'js_composer'),
	            'param_name' => 'button',
	            'description' => __('', 'js_composer'),
	            'group' => __( 'Button Options', 'js_composer' ),
	            'admin_label' => true,
	        ),
			array(
	            'type' => 'iconpicker',
	            'value' => 'fa fa-angle-right',
	            'heading' => __('Button Icon', 'js_composer'),
	            'param_name' => 'button_icon',
	            'description' => __('', 'js_composer'),
	            'group' => __( 'Button Options', 'js_composer' ),
	        ),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Button Shape', 'js_composer' ),
				'param_name' => 'btn_shape',
				'value' => paca_buttons_shapes(),
				'std' => 'normal',
				'description' => __( '', 'js_composer' ),
				'group' => __( 'Button Options', 'js_composer' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Button Size', 'js_composer' ),
				'param_name' => 'btn_size',
				'value' => paca_buttons_sizes(),
				'std' => 'normal',
				'description' => __( '', 'js_composer' ),
				'group' => __( 'Button Options', 'js_composer' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Button Colour', 'js_composer' ),
				'param_name' => 'btn_colour',
				'value' => paca_buttons_colours(),
				'std' => 'normal',
				'description' => __( '', 'js_composer' ),
				'group' => __( 'Button Options', 'js_composer' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Button Hover', 'js_composer' ),
				'param_name' => 'btn_hover',
				'value' => paca_buttons_hover(),
				'std' => 'hover-right',
				'description' => __( '', 'js_composer' ),
				'group' => __( 'Button Options', 'js_composer' ),
			),

			array(
	            'type' => 'attach_image',
	            'heading' => __('Image', 'js_composer'),
	            'param_name' => 'image',
	            'description' => __('', 'js_composer'),
	            'admin_label' => true,
	        ),

  		),

	) );

	if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	    class WPBakeryShortCode_Paca_Full_Screen_Slider_Container extends WPBakeryShortCodesContainer {
	    }
	}
	if ( class_exists( 'WPBakeryShortCode' ) ) {

	    class WPBakeryShortCode_Paca_Full_Screen_Slider extends WPBakeryShortCode {

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
