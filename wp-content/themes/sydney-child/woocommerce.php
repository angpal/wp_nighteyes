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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div class="sub-page-header">
				<h1>PRODUCTS</h1>
			</div>

			<div class="container ang-custom-woo-container">
				<?php woocommerce_content(); ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
