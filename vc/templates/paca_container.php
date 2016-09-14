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

?>
	<div class="container">
		<?php echo do_shortcode($content); ?>
	</div>
	
<?php
