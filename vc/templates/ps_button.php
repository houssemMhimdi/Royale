<?php
/**
* @package     PixelShortcodes
* @category    Core
* @author      Andrew Creswell
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

	<a href="<?php echo esc_url($atts['url']); ?>" class="xxxxxxxxl <?php echo esc_attr($atts['type']); ?>">
		<span><?php echo esc_attr($content); ?></span>
	</a>

<?php
