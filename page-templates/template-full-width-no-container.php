<?php /* Template Name: One Columns - Without Container */ get_header(); ?>

<main role="main" class="no-row" id="template-no-container">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<?php endif; ?>

</main>

<?php get_footer(); ?>
