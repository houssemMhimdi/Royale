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

$title = $classes = $overlay = $image_content ='';
$inline_css = $wrapper_attributes = array();
$atts = vc_map_get_attributes( $this->getShortcode(), $atts ); 

$infinite 		= (isset($atts['infinite']) && !empty($atts['infinite']) ? esc_attr($atts['infinite']) : '');
$dots 			= (isset($atts['dots']) && !empty($atts['dots']) ? esc_attr($atts['dots']) : '');
$duration 		= (isset($atts['duration']) && !empty($atts['duration']) ? esc_attr($atts['duration']) : '');
$autoplay 		= (isset($atts['autoplay']) && !empty($atts['autoplay']) ? esc_attr($atts['autoplay']) : '');
$autoplaySpeed 	= (isset($atts['autoplaySpeed']) && !empty($atts['autoplaySpeed']) ? esc_attr($atts['autoplaySpeed']) : '');

?>
	<div class="paca-full-height">
		<ul class="paca-slider papacig_slider" data-slick='{"infinite":<?php echo $infinite; ?>,"dots":<?php echo $dots; ?>,"duration":<?php echo $duration; ?>,"autoplay":<?php echo $autoplay; ?>,"autoplaySpeed":<?php echo $autoplaySpeed; ?>}' style="display:none;">

				<?php echo do_shortcode($content); ?>

		</ul>
		<div class="paca-cursor-down">
			<i class="fa fa-angle-down fa-2x" aria-hidden="true" data-speed="1000"></i>
		</div>	
	</div>



<?php
