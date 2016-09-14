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

$title ='';
$inline_css = $wrapper_attributes = array();

$atts = vc_map_get_attributes( $this->getShortcode(), $atts ); 

$title 		= (isset($atts['title'])  		&& !empty($atts['title']) 	  	? esc_attr($atts['title']) : '' );
$btn_title 	= (isset($atts['button']) 		&& !empty($atts['button']) 	  	? esc_attr($atts['button']) : '' );
$btn_shape  = (isset($atts['btn_shape']) 	&& !empty($atts['btn_shape']) 	? esc_attr($atts['btn_shape']) : '' ); 
$btn_size  	= (isset($atts['btn_size']) 	&& !empty($atts['btn_size'])  	? esc_attr($atts['btn_size'])  : '' ); 
$btn_colour = (isset($atts['btn_colour']) 	&& !empty($atts['btn_colour'])	? esc_attr($atts['btn_colour']): '' ); 
$btn_hover  = (isset($atts['btn_hover']) 	&& !empty($atts['btn_hover']) 	? esc_attr($atts['btn_hover']) : '' );
$url 		= (isset($atts['url']) 			&& !empty($atts['url']) 	  	? esc_attr($atts['url']) : '' );
$icon 		= (isset($atts['button_icon']) 	&& !empty($atts['button_icon']) ? esc_attr($atts['button_icon']) : '' );
$image 		= (isset($atts['image'])  		&& !empty($atts['image']) 		? wp_get_attachment_url( $atts['image'] ) : '' );
?>


		<li>
			<div class="wrap">
				<div class="contents align-centre">
					<h2><?php  echo esc_attr($title); ?></h2>
					<p><?php echo esc_attr($content); ?></p>
					<br/>
					<a href="<?php  echo esc_attr($url); ?>" title="<?php  echo esc_attr($btn_title); ?>" alt="<?php  echo esc_attr($btn_title); ?>" class="paca-button  <?php echo $btn_hover ?>  <?php echo $btn_colour ?>  <?php echo $btn_size ?>  <?php echo $btn_shape ?> ">
						<?php 
							if($btn_hover == 'hover-left'){
								?>
								<i class="paca-icon <?php echo esc_attr($icon); ?>" aria-hidden="true"></i>								
								<span class="text"><?php  echo esc_attr($btn_title); ?></span>
								<?php
							}else{
								?>
								<span class="text"><?php  echo esc_attr($btn_title); ?></span>
								<i class="paca-icon <?php echo esc_attr($icon); ?>" aria-hidden="true"></i>
								<?php
							}
						?>
					</a>
				</div>
			</div>
			<div class="featured-image" style="background-image:url(<?php echo $image; ?>)"><img src="<?php echo $image; ?>" class="img-responsive"></div>
		</li>



<?php
