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

$bg_colour = $text_colour = $bgel_class_colour = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );




$bg_colour			= (isset($atts['bg_colour']) && !empty($atts['bg_colour']) ? 'background-color:'.esc_attr($atts['bg_colour']) : ''  );
$text_colour		= (isset($atts['text_colour']) && !empty($atts['text_colour']) ? 'color:'.esc_attr($atts['text_colour']) : ''  );
$el_class			= (isset($atts['el_class']) && !empty($atts['el_class']) ? esc_attr($atts['el_class']) : ''  );

if(isset($atts['css']) && !empty($atts['css'])){
	$css = $atts['css'];
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
}


?>





<div class="paca-boxed-wrap  <?php echo $el_class .' '.$css_class ?>" style="<?php echo $bg_colour; ?>">
	<div class="paca-boxed-content" style="<?php echo $text_colour; ?>">
		<?php echo do_shortcode($content); ?>
	</div>
</div>