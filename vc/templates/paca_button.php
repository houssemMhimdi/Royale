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
if ( ! defined( 'ABSPATH' ) )  die( '-1' );

$button_title = $button_url = $button_icon_status = $button_icon = $btn_shape = $btn_size = $btn_colour = $btn_hover = $el_class = $css_class = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts ); 
$button_title		= (isset($atts['button_title']) && !empty($atts['button_title']) ? esc_attr($atts['button_title']) : ''  );
$button_url			= (isset($atts['button_url']) && !empty($atts['button_url']) ? vc_build_link($atts['button_url']) : ''  );
$button_icon_status	= (isset($atts['button_icon_status']) && !empty($atts['button_icon_status']) ? esc_attr($atts['button_icon_status']) : ''  );
$button_icon		= (isset($atts['button_icon']) && !empty($atts['button_icon']) ? esc_attr($atts['button_icon']) : ''  );
$btn_shape			= (isset($atts['btn_shape']) && !empty($atts['btn_shape']) ? esc_attr($atts['btn_shape']) : ''  );
$btn_size			= (isset($atts['btn_size']) && !empty($atts['btn_size']) ? esc_attr($atts['btn_size']) : ''  );
$btn_colour			= (isset($atts['btn_colour']) && !empty($atts['btn_colour']) ? esc_attr($atts['btn_colour']) : ''  );
$btn_hover			= (isset($atts['btn_hover']) && !empty($atts['btn_hover']) ? esc_attr($atts['btn_hover']) : ''  );
$btn_centre			= (isset($atts['btn_centre']) && !empty($atts['btn_centre']) ? esc_attr($atts['btn_centre']) : ''  );
$el_class			= (isset($atts['el_class']) && !empty($atts['el_class']) ? esc_attr($atts['el_class']) : ''  );

$url 		= (isset($button_url['url']) && !empty($button_url['url']) ? 'href="'.esc_url($button_url['url']).'"' : '');
$url_title 	= (isset($button_url['title']) && !empty($button_url['title']) ? 'title="'.esc_attr($button_url['title']).'"' : '');
$url_target = (isset($button_url['target']) && !empty($button_url['target']) ? 'target="'.esc_attr($button_url['target']).'"'  : '');


if(isset($atts['css']) && !empty($atts['css'])){
	$css = $atts['css'];
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
}



$output ='';
$output.=($btn_centre == 'true' ? '<div class="paca-centred-btn-wrap">' : '');
	$btn_tag_name = (isset($url) && !empty($url) ? 'a' : 'button');
	$output.='<'.$btn_tag_name.' '.$url_target.' '.$url.' '.$url_title.' class="paca-button '.$css_class.' '.$btn_colour.' '.$btn_shape.' '.$btn_hover.' '.$btn_size.'">';
		if($btn_hover=='hover-left' ){
			$output.='<i class="paca-icon glyphicon glyphicon-chevron-left" aria-hidden="true"></i>';
		}
			$output.='<span class="text">'.$button_title.'</span>';

		if($btn_hover=='hover-right'){
			$output.='<i class="paca-icon glyphicon glyphicon-chevron-right" aria-hidden="true"></i>';
		}
	$output.='</'.$btn_tag_name.'>';
$output.=($btn_centre == 'true' ? '</div>' : '');


echo $output;


