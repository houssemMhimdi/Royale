<?php

/**
* @category    Core
* @author      Jason Van Hil
* @copyright   Copyright (c) 2015, PixelBin
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.0
*/


vc_add_shortcode_param( 'paca_check_box', 'paca_check_box_field' );
function paca_check_box_field( $settings, $value ) {
	$output ='';
	$output.='<div class="paca_checkbox_vc"> '; 
		$output.='<input type="checkbox" name="'.esc_attr( $settings['param_name'] ).'" class="paca_checkbox_field wpb_vc_param_value"  value="'.( isset( $value ) && !empty( $value ) && $value=='true' ? 'true' : 'false' ).'" id="'.esc_attr( $settings['param_name'] ).'" '.( isset( $value ) && !empty( $value ) && $value=='true' ? 'checked' : '' ).' />';
		$output.='<label for="'.esc_attr( $settings['param_name'] ).'"></label>';
	$output.='</div>';
	return $output;
}