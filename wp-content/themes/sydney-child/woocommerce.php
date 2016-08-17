<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sydney*/

get_header(); ?>

	<div id="primary" class="content-area col-md-9">
		<main id="main" class="post-wrap" role="main">

			<div class="sub-page-header">
				<h1><?php the_title(); ?></h1>
			</div>
			<?php woocommerce_content(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
