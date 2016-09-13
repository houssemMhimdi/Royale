<?php /* Template Name: One Columns - With Container */ get_header(); ?>

	<main role="main" class="row"  id="template-with-container">
		<div class="container">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</main>


<?php get_footer(); ?>
