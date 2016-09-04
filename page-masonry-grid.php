<?php get_header(); ?>
<div class="container articles">	<!-- Articles class important to identify the last and first childs -->
	<div class="row"><div class="col-xs-12"><h4>Masonry Grid</h4></div></div>
	<div class="masonry-grid">
		<?php get_template_part('parts/content','standard-grid-bordered-masonry'); ?>
	</div>
	<div class="clearfix"></div>
</div>
<?php get_footer(); ?>
