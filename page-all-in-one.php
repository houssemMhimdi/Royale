<?php get_header(); ?>


<?php get_template_part('parts/content','full-slider'); ?>


<div class="clearfix"></div>


<div class="container articles lightgallery">	<!-- Articles class important to identify the last and first childs -->
	<div class="row"><div class="col-xs-12"><h4>Light box gallery</h4></div></div>
	<div class="masonry-grid">
		<?php get_template_part('parts/content','standard-grid-bordered-masonry'); ?>
	</div>
	<div class="clearfix"></div>
</div>




<div class="container articles">	<!-- Articles class important to identify the last and first childs -->
	<div class="row"><div class="col-xs-12"><h4>Masonry Grid</h4></div></div>
	<div class="masonry-grid">
		<?php get_template_part('parts/content','standard-grid-bordered-masonry'); ?>
	</div>
	<div class="clearfix"></div>
</div>

<div class="container articles">	<!-- Articles class important to identify the last and first childs -->
	<div class="row">
		<div class="col-xs-12"><h4>Standard Grid</h4></div>
		<?php get_template_part('parts/content','standard-grid'); ?>
	</div>
	<div class="clearfix"></div>
</div>

<div class="container articles">	<!-- Articles class important to identify the last and first childs -->
	<div class="row">
		<div class="col-xs-12"><h4>Boxed Grid</h4></div>
		<?php get_template_part('parts/content','standard-grid-boxed'); ?>
	</div>
	<div class="clearfix"></div>
</div>

<div class="container articles">	<!-- Articles class important to identify the last and first childs -->
	<div class="row"><div class="col-xs-12"><h4>Bordered Grid</h4></div></div>
	<?php get_template_part('parts/content','standard-grid-bordered'); ?>
	<div class="clearfix"></div>
</div>

<div class="container articles">	<!-- Articles class important to identify the last and first childs -->
	<div class="row">
		<div class="col-xs-12"><h4>Standard Grid with date</h4></div>
		<?php get_template_part('parts/content','standard-grid-date'); ?>
	</div>
	<div class="clearfix"></div>
</div>

<div class="container articles">	<!-- Articles class important to identify the last and first childs -->
	<div class="row">
		<div class="col-xs-12"><h4>Standard Grid no excerpt</h4></div>
		<?php get_template_part('parts/content','standard-grid-no-excerpt'); ?>
	</div>
	<div class="clearfix"></div>
</div>

<div class="container articles">	<!-- Articles class important to identify the last and first childs -->
	<div class="row">
		<div class="col-xs-12"><h4>Gallery post grid</h4></div>
		<?php get_template_part('parts/content','gallery-post-grid'); ?>
	</div>
	<div class="clearfix"></div>
</div>

<div class="container articles">	<!-- Articles class important to identify the last and first childs -->
	<div class="row">
		<div class="col-xs-12"><h4>Posts list</h4></div>
		<?php get_template_part('parts/content','standard-list'); ?>
	</div>
	<div class="clearfix"></div>
</div>

<div class="container articles">	<!-- Articles class important to identify the last and first childs -->
	<div class="row">
		<div class="col-xs-12"><h4>Posts list</h4></div>
		<div class="row">
			<div class="col-sm-6"><?php get_template_part('parts/content','standard-list-small'); ?></div>
			<div class="col-sm-6"><?php get_template_part('parts/content','standard-list-small'); ?></div>			
		</div>

	</div>
	<div class="clearfix"></div>
</div>



<div class="container articles">	<!-- Articles class important to identify the last and first childs -->
	<div class="row">
		<div class="col-xs-12"><h4>Carousel grids</h4></div>
		<?php get_template_part('parts/content','carousel-grids'); ?>
	</div>
	<div class="clearfix"></div>
</div>


<div class="container articles">	<!-- Articles class important to identify the last and first childs -->
	<div class="row">
		<div class="col-xs-12">
			<h4>Gallery post carousel</h4>
			<h5>Use overlay-arrows to show arrows only on hover.</h5>
		</div>
		
		<?php get_template_part('parts/content','carousel-gallery-post-grid'); ?>
	</div>
	<div class="clearfix"></div>
</div>




<div class="container">
	<div class="col-xs-12">

		<div class="row">
			<h3>Boxed contents</h3>
			
			<section>
			
				<div class="paca-boxed-wrap">
					<div class="paca-boxed-content">
						<p><strong>You can pick the background colour along with text colour.</strong></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. Ut lectus purus, commodo et tincidunt vel, interdum sed lectus. Vestibulum adipiscing tempor nisi id elementu sadips ipsums dolores uns fugiats gravida nam elit vols nulla dolores amet.</p>				
					</div>
				</div>

			</section>

			<section class="row ">
				<div class="col-sm-12  " style="height:50px;"></div>
			</section>

			<section>

				<div class="paca-boxed-wrap" style="background-color:rgb(22, 109, 186);">
					<div class="paca-boxed-content" style="color:rgb(255, 255, 255);">
						<div class="row">
							<div class="col-sm-6">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/large-1.jpg" class="img-responsive">
							</div>

							<div class="col-sm-6">
								<p><strong>You can pick the background colour along with text colour.</strong></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. Ut lectus purus, commodo et tincidunt vel, interdum sed lectus. Vestibulum adipiscing tempor nisi id elementu sadips ipsums dolores uns fugiats gravida nam elit vols nulla dolores amet.</p>											
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. Ut lectus purus, commodo et tincidunt vel, interdum sed lectus. Vestibulum adipiscing tempor nisi id elementu sadips ipsums dolores uns fugiats gravida nam elit vols nulla dolores amet.</p>											
							</div>
						</div>
					</div>
				</div>

			</section>


			<section class="row ">
				<div class="col-sm-12  " style="height:50px;"></div>
			</section>

			<section>

				<div class="paca-boxed-wrap" style="background-color:rgb(158, 158, 158);">
					<div class="paca-boxed-content" style="color:rgb(255, 255, 255);">
						<p><strong>You can pick the background colour along with text colour.</strong></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. Ut lectus purus, commodo et tincidunt vel, interdum sed lectus. Vestibulum adipiscing tempor nisi id elementu sadips ipsums dolores uns fugiats gravida nam elit vols nulla dolores amet.</p>				
					</div>
				</div>

			</section>

			
			<section class="row ">
				<div class="col-sm-12  " style="height:50px;"></div>
			</section>

			<section>

				<div class="paca-boxed-wrap" style="background-color:rgb(204, 51, 51);">
					<div class="paca-boxed-content" style="color:rgb(255, 255, 255);">
						<div class="row">
							<div class="col-sm-6">
								<p><strong>You can pick the background colour along with text colour.</strong></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. Ut lectus purus, commodo et tincidunt vel, interdum sed lectus. Vestibulum adipiscing tempor nisi id elementu sadips ipsums dolores uns fugiats gravida nam elit vols nulla dolores amet.</p>											
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. Ut lectus purus, commodo et tincidunt vel, interdum sed lectus. Vestibulum adipiscing tempor nisi id elementu sadips ipsums dolores uns fugiats gravida nam elit vols nulla dolores amet.</p>											
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. Ut lectus purus, commodo et tincidunt vel, interdum sed lectus. Vestibulum adipiscing tempor nisi id elementu sadips ipsums dolores uns fugiats gravida nam elit vols nulla dolores amet.</p>											
							</div>
							<div class="col-sm-6">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/large-3.jpg" class="img-responsive">
							</div>
						</div>
					</div>
				</div>

			</section>


			
			<section class="row ">
				<div class="col-sm-12  " style="height:50px;"></div>
			</section>

			<section>

				<div class="paca-boxed-wrap" style="background-color:rgb(253, 216, 53);">
					<div class="paca-boxed-content" style="color:rgb(255, 255, 255);">
						<p><strong>You can pick the background colour along with text colour.</strong></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. Ut lectus purus, commodo et tincidunt vel, interdum sed lectus. Vestibulum adipiscing tempor nisi id elementu sadips ipsums dolores uns fugiats gravida nam elit vols nulla dolores amet.</p>				
					</div>
				</div>

			</section>


			<section class="row ">
				<div class="col-sm-12  " style="height:50px;"></div>
			</section>

			<section>

				<div class="paca-boxed-wrap" style="background-color:rgb(90, 30, 229);">
					<div class="paca-boxed-content" style="color:rgb(255, 255, 255);">
						<p><strong>You can pick the background colour along with text colour.</strong></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. Ut lectus purus, commodo et tincidunt vel, interdum sed lectus. Vestibulum adipiscing tempor nisi id elementu sadips ipsums dolores uns fugiats gravida nam elit vols nulla dolores amet.</p>				
					</div>
				</div>

			</section>

		</div>

	</div>


</div>

<section class="row ">
	<div class="col-sm-12  " style="height:50px;"></div>
</section>

<div class="container">

	<div class="row">

		<div class="col-xs-12">
			<h3>Accordions</h3>

			<div class="row">
				<div class="col-xs-12">
					<h5>Toggle</h5>
				</div>
			</div>
			<div class="panel-group paca-accordion" id="accordion" role="tablist" aria-multiselectable="true">
			
					<div class="panel">
						<div class="panel-heading" role="tab" id="headingOne">
						  <h4 class="panel-title">
						    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						      Toogle
						    </a>
						  </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
						  <div class="panel-body">
						    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
						  </div>
						</div>
					</div>

					<div class="panel">
						<div class="panel-heading" role="tab" id="headingTwo">
						  <h4 class="panel-title">
						    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						      Toogle 2
						    </a>
						  </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						  <div class="panel-body">
						    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
						  </div>
						</div>
					</div>

					<div class="panel">
						<div class="panel-heading" role="tab" id="headingThree">
						  <h4 class="panel-title">
						    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
						      Toogle 3
						    </a>
						  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						  <div class="panel-body">
						    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
						  </div>
						</div>
					</div>

			</div>




			<div class="row">
				<div class="col-xs-12">
					<h5>Section</h5>
				</div>
			</div>

			<div class="paca-accordion sectionOne">
				<div class="panel-group sectionOne" id="accordion" role="tablist" aria-multiselectable="true">
				
				  <div class="panel">
				    <div class="panel-heading" role="tab" id="headingOne">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#sectionOne" aria-expanded="true" aria-controls="sectionOne">
				          Section
				        </a>
				      </h4>
				    </div>
				    <div id="sectionOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
				      </div>
				    </div>
				  </div>

				</div>	
			</div>


			<div class="paca-accordion sectionTwo">
				<div class="panel-group sectionOne" id="accordion" role="tablist" aria-multiselectable="true">
				
				  <div class="panel">
				    <div class="panel-heading" role="tab" id="headingTwo">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#sectionTwo" aria-expanded="true" aria-controls="sectionTwo">
				          Section 2
				        </a>
				      </h4>
				    </div>
				    <div id="sectionTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				      <div class="panel-body">
				        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
				      </div>
				    </div>
				  </div>

				</div>	
			</div>


			<div class="paca-accordion sectionThree">
				<div class="panel-group sectionOne" id="accordion" role="tablist" aria-multiselectable="true">
				
				  <div class="panel">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#sectionThree" aria-expanded="true" aria-controls="sectionThree">
				          Section 2
				        </a>
				      </h4>
				    </div>
				    <div id="sectionThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
				      </div>
				    </div>
				  </div>

				</div>	
			</div>

	
		</div>

	</div>



</div>




<div class="container">

	<div class="row">
		<div class="col-xs-12">
			<h3>Columns</h3>
		</div>
	</div>	

</div>


<div class="container">
		
	<div class="row">
		<div class="col-xs-12">
			<h5>1/2 + 1/2</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula. Vivamus purus odio, mollis ut sagittis vel, feugiat et nulla. Aenean id felis sed ligula volutpat consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent eu lacus diam. Vestibulum ut sem odio, eu sollicitudin tellus.</p>		
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula. Vivamus purus odio, mollis ut sagittis vel, feugiat et nulla. Aenean id felis sed ligula volutpat consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent eu lacus diam. Vestibulum ut sem odio, eu sollicitudin tellus.</p>		
		</div>
	</div>



	<div class="row">
		<div class="col-xs-12">
			<h5>3/4 + 1/4</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-9 col-md-9 col-lg-9 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula. Vivamus purus odio, mollis ut sagittis vel, feugiat et nulla. Aenean id felis sed ligula volutpat consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent eu lacus diam. Vestibulum ut sem odio, eu sollicitudin tellus.&nbsp;&nbsp;Vivamus purus odio, mollis ut sagittis vel, feugiat et nulla. Aenean id felis sed ligula volutpat consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent eu lacus diam. Vestibulum ut sem odio, eu sollicitudin tellus.</p>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula.</p>
		</div>
	</div>


	<div class="row">
		<div class="col-xs-12">
			<h5>1/2 + 1/4 + 1/4</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula. Vivamus purus odio, mollis ut sagittis vel, feugiat et nulla. Aenean id felis sed ligula volutpat consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent eu lacus diam. Vestibulum ut sem odio, eu sollicitudin tellus.</p>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula.</p>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula.</p>
		</div>
	</div>


	<div class="row">
		<div class="col-xs-12">
			<h5>1/4 + 1/2 + 1/4</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3 col-md-3 col-lg-3 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula.</p>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula. Vivamus purus odio, mollis ut sagittis vel, feugiat et nulla. Aenean id felis sed ligula volutpat consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent eu lacus diam. Vestibulum ut sem odio, eu sollicitudin tellus.</p>
		</div>		
		<div class="col-sm-3 col-md-3 col-lg-3 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula.</p>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<h5>1/4 + 1/4 + 1/4 + 1/4</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3 col-md-3 col-lg-3 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula.</p>
		</div>	
		<div class="col-sm-3 col-md-3 col-lg-3 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula.</p>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula.</p>
		</div>	
		<div class="col-sm-3 col-md-3 col-lg-3 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend rerit non sed ligula.</p>
		</div>
	</div>


	<div class="row">
		<div class="col-xs-12">
			<h5>2/3 + 1/3</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8 col-md-8 col-lg-8 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperiet vehic ula. Proin egestas diam acmauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend. rerit non sed ligula. Viv amus purus odio, mollis ut sagittis vel, feugiat et nulla. Aenean id felis sed ligula onsectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praes ent eu lacus diam. Vestibulum ut sem odio, eu sollicitudin tellus. Cras in sapien orci. Morbi at ligula dui, eget laoreet risus. Suspendisse luctus purus in dolor tempor ac lobortis turpis sagittis. Sed varius pellentesque dignissim. Etiam at mauris sit amet magna Etiam at mauris sit amet magna.</p>
		</div>	
		<div class="col-sm-4 col-md-4 col-lg-4 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperd iet vehicula. Proin egestas diam acmauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend. rerit non sed ligula. Viv amus purus odio, mollis ut sagittis vel, feugiat et nulla. Aenean id felis sed ligula onsectetur.</p>
		</div>
	</div>


	<div class="row">
		<div class="col-xs-12">
			<h5>1/3 + 1/3 + 1/3</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperiet vehic ula. Proin egestas diam acmauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend. rerit non sed ligula. Viv amus purus odio, mollis ut sagittis vel, feugiat et nulla. Aenean id felis sed ligula onsectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praes ent eu lacus diam. Vestibulum ut sem odio, eu sollicitudin tellus. Cras in sapien orci. Morbi at ligula dui, eget laoreet risus. Suspendisse luctus purus in dolor tempor ac lobortis turpis sagittis. Sed varius pellentesque dignissim. Etiam at mauris sit amet magna Etiam at mauris sit amet magna.</p>
		</div>	
		<div class="col-sm-4 col-md-4 col-lg-4 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperiet vehic ula. Proin egestas diam acmauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend. rerit non sed ligula. Viv amus purus odio, mollis ut sagittis vel, feugiat et nulla. Aenean id felis sed ligula onsectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praes ent eu lacus diam. Vestibulum ut sem odio, eu sollicitudin tellus. Cras in sapien orci. Morbi at ligula dui, eget laoreet risus. Suspendisse luctus purus in dolor tempor ac lobortis turpis sagittis. Sed varius pellentesque dignissim. Etiam at mauris sit amet magna Etiam at mauris sit amet magna.</p>
		</div>	
		<div class="col-sm-4 col-md-4 col-lg-4 ">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperiet vehic ula. Proin egestas diam acmauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend. rerit non sed ligula. Viv amus purus odio, mollis ut sagittis vel, feugiat et nulla. Aenean id felis sed ligula onsectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praes ent eu lacus diam. Vestibulum ut sem odio, eu sollicitudin tellus. Cras in sapien orci. Morbi at ligula dui, eget laoreet risus. Suspendisse luctus purus in dolor tempor ac lobortis turpis sagittis. Sed varius pellentesque dignissim. Etiam at mauris sit amet magna Etiam at mauris sit amet magna.</p>
		</div>	
	</div>

</div>
<section class="row ">
	<div class="col-sm-12  " style="height:50px;"></div>
</section>

<div class="container">
	<div class="row">

		<div class="col-xs-12">

				<h3>Social Buttons Animation</h3>
				<h5>Up / Down</h5>
				<a href="#" title="title" alt="alt here" class="paca-social-button facebook">
					<i class="icon fa fa-facebook" aria-hidden="true"></i>
					<i class="icon fa fa-facebook" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button flickr">
					<i class="icon fa fa-flickr" aria-hidden="true"></i>
					<i class="icon fa fa-flickr" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button google-plus">
					<i class="icon fa fa-google-plus" aria-hidden="true"></i>
					<i class="icon fa fa-google-plus" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button instagram">
					<i class="icon fa fa-instagram" aria-hidden="true"></i>
					<i class="icon fa fa-instagram" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button linkedin">
					<i class="icon fa fa-linkedin" aria-hidden="true"></i>
					<i class="icon fa fa-linkedin" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button pinterest">
					<i class="icon fa fa-pinterest" aria-hidden="true"></i>
					<i class="icon fa fa-pinterest" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button slideshare">
					<i class="icon fa fa-slideshare" aria-hidden="true"></i>
					<i class="icon fa fa-slideshare" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button twitter">
					<i class="icon fa fa-twitter" aria-hidden="true"></i>
					<i class="icon fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button vimeo">
					<i class="icon fa fa-vimeo" aria-hidden="true"></i>
					<i class="icon fa fa-vimeo" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button youtube">
					<i class="icon fa fa-youtube-play" aria-hidden="true"></i>
					<i class="icon fa fa-youtube-play" aria-hidden="true"></i>
				</a>


		</div>

		<div class="col-xs-12">

				<h3>Social Buttons Animation</h3>
				<h5>Right To Left</h5>
				<a href="#" title="title" alt="alt here" class="paca-social-button right facebook">
					<i class="icon fa fa-facebook" aria-hidden="true"></i>
					<i class="icon fa fa-facebook" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button right flickr">
					<i class="icon fa fa-flickr" aria-hidden="true"></i>
					<i class="icon fa fa-flickr" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button right google-plus">
					<i class="icon fa fa-google-plus" aria-hidden="true"></i>
					<i class="icon fa fa-google-plus" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button right instagram">
					<i class="icon fa fa-instagram" aria-hidden="true"></i>
					<i class="icon fa fa-instagram" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button right linkedin">
					<i class="icon fa fa-linkedin" aria-hidden="true"></i>
					<i class="icon fa fa-linkedin" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button right pinterest">
					<i class="icon fa fa-pinterest" aria-hidden="true"></i>
					<i class="icon fa fa-pinterest" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button right slideshare">
					<i class="icon fa fa-slideshare" aria-hidden="true"></i>
					<i class="icon fa fa-slideshare" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button right twitter">
					<i class="icon fa fa-twitter" aria-hidden="true"></i>
					<i class="icon fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button right vimeo">
					<i class="icon fa fa-vimeo" aria-hidden="true"></i>
					<i class="icon fa fa-vimeo" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button right youtube">
					<i class="icon fa fa-youtube-play" aria-hidden="true"></i>
					<i class="icon fa fa-youtube-play" aria-hidden="true"></i>
				</a>


		</div>


		<div class="col-xs-12">

				<h3>Social Buttons Animation</h3>
				<h5>Left To Right</h5>
				<a href="#" title="title" alt="alt here" class="paca-social-button left facebook">
					<i class="icon fa fa-facebook" aria-hidden="true"></i>
					<i class="icon fa fa-facebook" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left flickr">
					<i class="icon fa fa-flickr" aria-hidden="true"></i>
					<i class="icon fa fa-flickr" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left google-plus">
					<i class="icon fa fa-google-plus" aria-hidden="true"></i>
					<i class="icon fa fa-google-plus" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left instagram">
					<i class="icon fa fa-instagram" aria-hidden="true"></i>
					<i class="icon fa fa-instagram" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left linkedin">
					<i class="icon fa fa-linkedin" aria-hidden="true"></i>
					<i class="icon fa fa-linkedin" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left pinterest">
					<i class="icon fa fa-pinterest" aria-hidden="true"></i>
					<i class="icon fa fa-pinterest" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left slideshare">
					<i class="icon fa fa-slideshare" aria-hidden="true"></i>
					<i class="icon fa fa-slideshare" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left twitter">
					<i class="icon fa fa-twitter" aria-hidden="true"></i>
					<i class="icon fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left vimeo">
					<i class="icon fa fa-vimeo" aria-hidden="true"></i>
					<i class="icon fa fa-vimeo" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left youtube">
					<i class="icon fa fa-youtube-play" aria-hidden="true"></i>
					<i class="icon fa fa-youtube-play" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left">
					<i class="icon fa fa-github" aria-hidden="true"></i>
					<i class="icon fa fa-github" aria-hidden="true"></i>
				</a>


		</div>

		<div class="col-xs-12">

				<h3>Social Buttons Large</h3>
				<h5>Left To Right</h5>
				<a href="#" title="title" alt="alt here" class="paca-social-button large facebook">
					<i class="icon fa fa-facebook" aria-hidden="true"></i>
					<i class="icon fa fa-facebook" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button large flickr">
					<i class="icon fa fa-flickr" aria-hidden="true"></i>
					<i class="icon fa fa-flickr" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left large google-plus">
					<i class="icon fa fa-google-plus" aria-hidden="true"></i>
					<i class="icon fa fa-google-plus" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left large instagram">
					<i class="icon fa fa-instagram" aria-hidden="true"></i>
					<i class="icon fa fa-instagram" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button right large linkedin">
					<i class="icon fa fa-linkedin" aria-hidden="true"></i>
					<i class="icon fa fa-linkedin" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button right large pinterest">
					<i class="icon fa fa-pinterest" aria-hidden="true"></i>
					<i class="icon fa fa-pinterest" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button large slideshare">
					<i class="icon fa fa-slideshare" aria-hidden="true"></i>
					<i class="icon fa fa-slideshare" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button large twitter">
					<i class="icon fa fa-twitter" aria-hidden="true"></i>
					<i class="icon fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left large vimeo">
					<i class="icon fa fa-vimeo" aria-hidden="true"></i>
					<i class="icon fa fa-vimeo" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button left large youtube">
					<i class="icon fa fa-youtube-play" aria-hidden="true"></i>
					<i class="icon fa fa-youtube-play" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button right large">
					<i class="icon fa fa-github" aria-hidden="true"></i>
					<i class="icon fa fa-github" aria-hidden="true"></i>
				</a>
				<a href="#" title="title" alt="alt here" class="paca-social-button right large">
					<i class="icon fa fa-slack" aria-hidden="true"></i>
					<i class="icon fa fa-slack" aria-hidden="true"></i>
				</a>


		</div>
		
	</div>
</div>

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

<!-- <section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?> -->


<?php get_footer(); ?>
