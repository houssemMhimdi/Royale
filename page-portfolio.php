<?php get_header(); ?>
<div class="container articles">	<!-- Articles class important to identify the last and first childs -->
	<div class="row"><div class="col-xs-12"><h2>Portfolio</h2></div></div>
	<div class="clearfix"></div>
	<div class="masonry-grid-portfolio">
		<?php get_template_part('parts/content','standard-grid-bordered-masonry-portfolio'); ?>
	</div>
	<div class="clearfix"></div>
</div>
<?php get_footer(); ?>
