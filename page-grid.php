<?php get_header(); ?>
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


	
<?php get_footer(); ?>