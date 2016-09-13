<?php
/**
* @category    Core
* @author      Andrew Creswell
* @copyright   Copyright (c) 2015, PixelBin
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.0
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


/**
 * Set As Theme
 */
add_action('vc_before_init', function () {
  vc_set_as_theme();
});

add_action( 'init', 'set_vc_template_path');
function set_vc_template_path() {
    $dir = PS_PATH . 'templates';
    vc_set_shortcodes_templates_dir( $dir );

}
