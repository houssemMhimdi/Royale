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

$slide_title = array('Phasellus posuere mattis ligula id consectetur.','Phasellus posuere mattis ligula id consectetur','Nullam pellentesque blandit dolor','Lorem ipsum dolor sit amet, consectetur adipiscing elit');
$button_text = array('watch the video','read more','learn more','click here');
?>

<div class="paca-full-height">
	<ul class="paca-slider papacig_slider" data-slick='{"infinite":true,"dots":true,"duration":6000,"autoplay":true,"autoplaySpeed":6000}' style="display:none;">
		<?php $i=0; while($i <= 4){ ?>
		<li>
			<div class="wrap">
				<div class="contents align-centre">
					<h2><?php  echo $slide_title[array_rand($slide_title)]; ?></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum… Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum… Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum… Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum…</p>
					<br>
					<a href="#" title="title" alt="alt here" class="paca-button paca-button-white rounded bordered hover-right large"><span class="text"><?php  echo $button_text[array_rand($button_text)]; ?></span><i class="paca-icon glyphicon glyphicon-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="featured-image" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/img/xx-large-<?php echo rand(1,5) ?>.jpg)"><img src="<?php echo get_template_directory_uri() ?>/assets/img/xx-large-<?php echo rand(1,5) ?>.jpg" class="img-responsive"></div>
		</li>
		<?php $i++;} ?>

	</ul>
	<div class="paca-cursor-down">
		<i class="fa fa-angle-down fa-2x" aria-hidden="true" data-speed="1000"></i>
	</div>	
</div>

<?php
