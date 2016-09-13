<?php /* Template Name: Two Columns - Sidebar on Right */ get_header(); ?>

	<main role="main" id="template-right-sidebar">
		<!-- section -->
		<section class="columns medium-8 large-9">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>

		</section>
		<!-- /section -->

		<?php get_sidebar(); ?>
	</main>


<?php get_footer(); ?>
