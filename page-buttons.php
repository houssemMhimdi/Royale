<?php get_header(); ?>



<!-- 

*There is 4 buttons shapes 
		-normal
		-bordered
		-rounded
		-rounded-bordered
*There is 4 buttons sizes 
		-normal
		-medium
		-large
		-x-large
		-full-width
*There is 10 buttons colours.
		-normal
		-paca-button-apple
		-paca-button-black
		-paca-button-bright-sun
		-paca-button-curious-blue
		-paca-button-grey
		-paca-button-java
		-paca-button-orange
		-paca-button-purple-heart
		-paca-button-red
*if an icon is inside the button there is 2 hover effects 
		-hover-left (default)
		-hover-right
 -->
<?php

$buttons_hover 	= 	array(
								array(
									'label'=>__('Hover from left (default)','textdomain'),
									'value'=>'hover-left',
									),
								array(
									'label'=>__('Hover from right','textdomain'),
									'value'=>'hover-right',
									),

						);

$buttons_shapes = 	array(

								array(
									'label'=>__('Normal','textdomain'),
									'value'=>'',
									),

								array(
									'label'=>__('Bordered','textdomain'),
									'value'=>'bordered',
									),

								array(
									'label'=>__('Rounded','textdomain'),
									'value'=>'rounded',
									),
								array(
									'label'=>__('Rounded bordered','textdomain'),
									'value'=>'rounded-bordered',
									),
						);

$buttons_sizes = 	array(

								array(
									'label'=>__('Normal','textdomain'),
									'value'=>'',
									),

								array(
									'label'=>__('Medium','textdomain'),
									'value'=>'medium',
									),

								array(
									'label'=>__('Large','textdomain'),
									'value'=>'large',
									),
								array(
									'label'=>__('Extra large','textdomain'),
									'value'=>'x-large',
									),
								array(
									'label'=>__('Full width','textdomain'),
									'value'=>'full-width',
									),
						);

$buttons_colours	=	array(
								array(
									
									'label'=>__('Normal','textdomain'),
									'value'=>'',
									
									),
								array(
									
									'label'=>__('Green apple','textdomain'),
									'value'=>'paca-button-apple',
									
									),

								array(
									
									'label'=>__('Black','textdomain'),
									'value'=>'paca-button-black',
									
									),

								array(
									
									'label'=>__('Bright sun','textdomain'),
									'value'=>'paca-button-bright-sun',
									
									),

								array(
									
									'label'=>__('Curious blue','textdomain'),
									'value'=>'paca-button-curious-blue',
									
									),

								array(
									
									'label'=>__('Grey','textdomain'),
									'value'=>'paca-button-grey',
									
									),

								array(
									
									'label'=>__('Java blue','textdomain'),
									'value'=>'paca-button-java',
									
									),

								array(
									
									'label'=>__('Orange','textdomain'),
									'value'=>'paca-button-orange',
									
									),

								array(
									
									'label'=>__('Purple heart','textdomain'),
									'value'=>'paca-button-purple-heart',
									
									),

								array(
									
									'label'=>__('Red','textdomain'),
									'value'=>'paca-button-red',
									
									),
							);







echo '<section class="row "><div class="col-sm-12  " style="height:50px;"></div></section>';
echo '<div class="container">';
	echo '<section>';
	echo '<h2>Standard buttons</h2>';
	foreach ($buttons_colours as $colour){
		$output ='';
		$output.='<a href="#" title="title" alt="alt here" class="paca-button '.$colour['value'].'">';
			$output.='<span class="text">'.$colour['label'].'</span>';
		$output.='</a>';
		echo $output;
	}
	echo "</section>";
echo "</div>";
echo '<section class="row "><div class="col-sm-12  " style="height:50px;"></div></section>';
echo '<div class="container">';
	echo '<section>';
	echo '<h2>Shaped buttons</h2>';
	foreach ($buttons_colours as $colour){
		foreach($buttons_shapes as $shape){
			$output ='';
			$output.='<a href="#" title="title" alt="alt here" class="paca-button '.$colour['value'].' '.$shape['value'].'">';
				$output.='<span class="text">'.$colour['label'].' '.$shape['label'].'</span>';
			$output.='</a>';
			echo $output;
		}
	}
	echo "</section>";
echo "</div>";

echo '<section class="row "><div class="col-sm-12  " style="height:50px;"></div></section>';
echo '<div class="container">';
	echo '<section>';
	echo '<h2>Buttons Sizes</h2>';
	foreach ($buttons_colours as $colour){
		foreach($buttons_shapes as $shape){
			foreach ($buttons_sizes as $size) {
				$output ='';
				$output.='<a href="#" title="title" alt="alt here" class="paca-button '.$colour['value'].' '.$shape['value'].' '.$size['value'].'">';
					$output.='<span class="text">'.$colour['label'].' '.$shape['label'].' '.$size['label'].'</span>';
				$output.='</a>';
				echo $output;
			}
		}
	}
	echo "</section>";
echo "</div>";



echo '<section class="row "><div class="col-sm-12  " style="height:50px;"></div></section>';
echo '<div class="container">';
	echo '<section>';
	echo '<h2>Buttons hover with icon</h2>';
	foreach ($buttons_colours as $colour){
		foreach($buttons_shapes as $shape){
			foreach ($buttons_hover as $hover) {
				foreach ($buttons_sizes as $size) {
					$output ='';
					$output.='<a href="#" title="title" alt="alt here" class="paca-button '.$colour['value'].' '.$shape['value'].' '.$hover['value'].' '.$size['value'].'">';
						if($hover['value']=='hover-left' ){$output.='<i class="paca-icon glyphicon glyphicon-chevron-left" aria-hidden="true"></i>';}
						$output.='<span class="text">'.$shape['label'].' '.$hover['label'].'</span>';
						if($hover['value']=='hover-right'){$output.='<i class="paca-icon glyphicon glyphicon-chevron-right" aria-hidden="true"></i>';}
					$output.='</a>';
					echo $output;
				}
			}
		}
	}
	echo "</section>";
echo "</div>";


?>

<?php get_footer(); ?>
