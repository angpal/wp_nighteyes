<?php

/*

Template Name: Cart Template

*/
	get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="cart-spacer">
					<h1><?php the_title(); ?></h1>
			</div>

			<div class="container cart-wrapper">

				

				

					<?php the_content(); ?>

					<?php

						
					?>

				<?php endwhile; // end of the loop. ?>

			</div><!--cart-wrapper-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

