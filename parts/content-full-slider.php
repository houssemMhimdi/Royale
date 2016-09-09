



<?php

$slide_title = array('Phasellus posuere mattis ligula id consectetur.','Phasellus posuere mattis ligula id consectetur','Nullam pellentesque blandit dolor','Lorem ipsum dolor sit amet, consectetur adipiscing elit');

$button_text = array('watch the video','read more','learn more','click here');

?>

<ul class="paca-slider papacig_slider" data-slick='{"infinite":true,"dots":true,"duration":3000,"autoplay":true}' style="display:none;">
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
		<div class="featured-image"><img src="<?php echo get_template_directory_uri() ?>/assets/img/x-large-<?php echo rand(1,5) ?>.jpg" class="img-responsive"></div>
	</li>
	<?php $i++;} ?>

</ul>


<ul class="paca-slider papacig_slider dotted" data-slick='{"dots":true}' style="display:none;">
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
		<div class="featured-image"><img src="<?php echo get_template_directory_uri() ?>/assets/img/x-large-<?php echo rand(1,5) ?>.jpg" class="img-responsive"></div>
	</li>
	<?php $i++;} ?>

</ul>



<ul class="paca-slider papacig_slider" style="display:none;">
	<?php $i=0; while($i <= 4){ ?>
	<li>
		<div class="wrap">
			<div class="contents align-left">
				<h2><?php  echo $slide_title[array_rand($slide_title)]; ?></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum… Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum… Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum… Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum…</p>
				<br>
				<a href="#" title="title" alt="alt here" class="paca-button paca-button-white rounded bordered hover-right large"><span class="text"><?php  echo $button_text[array_rand($button_text)]; ?></span><i class="paca-icon glyphicon glyphicon-chevron-right" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="featured-image"><img src="<?php echo get_template_directory_uri() ?>/assets/img/x-large-<?php echo rand(1,5) ?>.jpg" class="img-responsive"></div>
	</li>
	<?php $i++;} ?>

</ul>


<ul class="paca-slider papacig_slider container" data-slick='{"infinite":false,"dots":true,"duration":3000,"autoplay":true}' style="display:none;">
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
		<div class="featured-image"><img src="<?php echo get_template_directory_uri() ?>/assets/img/x-large-<?php echo rand(1,5) ?>.jpg" class="img-responsive"></div>
	</li>
	<?php $i++;} ?>

</ul>


<ul class="paca-slider papacig_slider container dotted" data-slick='{"dots":true}' style="display:none;">
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
		<div class="featured-image"><img src="<?php echo get_template_directory_uri() ?>/assets/img/x-large-<?php echo rand(1,5) ?>.jpg" class="img-responsive"></div>
	</li>
	<?php $i++;} ?>

</ul>



<ul class="paca-slider papacig_slider container" style="display:none;">
	<?php $i=0; while($i <= 4){ ?>
	<li>
		<div class="wrap">
			<div class="contents align-left">
				<h2><?php  echo $slide_title[array_rand($slide_title)]; ?></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum… Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum… Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum… Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum…</p>
				<br>
				<a href="#" title="title" alt="alt here" class="paca-button paca-button-white rounded bordered hover-right large"><span class="text"><?php  echo $button_text[array_rand($button_text)]; ?></span><i class="paca-icon glyphicon glyphicon-chevron-right" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="featured-image"><img src="<?php echo get_template_directory_uri() ?>/assets/img/x-large-<?php echo rand(1,5) ?>.jpg" class="img-responsive"></div>
	</li>
	<?php $i++;} ?>

</ul>

