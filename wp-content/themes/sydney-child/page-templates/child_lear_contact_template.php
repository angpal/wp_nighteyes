<?php

/*

Template Name: Custom Learn Template

*/
	get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php 
				global $post;
				$current_post_id = $post->ID; 
			 $currentpage = get_post_meta( $current_post_id ); 
					// to use post meta areas do the following:
					// echo $currentpage[section2][0] or echo $homepage[section1][0];
			 while ( have_posts() ) : the_post(); ?>
			
			
			
<!-- --------------- NEXT- SECTION 1 - About the product  ---------------- -->			

<div class="sub-page-header">
	<h1><?php the_title(); ?></h1>
</div>
		<div id="instr-section1" class="odd">
			<div class="section-inner">

				
				<div class="instructions-left-inner">
				       <p><span class="step">STEP 1</span> – Peel tag from sheet<p>
				</div>
				
				<div class="instructions-right-inner">
				    <img src="http://localhost:8080/wp_nighteyes/wp-content/uploads/2016/08/peeling tag.jpg" alt="Removing the backing strip on the tag." />
				</div>
								

				

			<?php endwhile; // end of the loop. ?>

			</div>
		</div>


<!-- --------------- NEXT - SECTION 2 - Why I need it  ---------------- -->


		<div id="instr-section2" class="even">
			<div class="section-inner">
			
			<div class="instructions-left-inner">
				       <p><span class="step">STEP 2</span> – select area you want to attach Night Eyes tag. Fold tag around tent rope and stick the two ends together
															Attach Night Eyes tags 1/3 up the tent rope or leave it near the peg to prevent stubbed toes<p>
				</div>
				
				<div class="instructions-right-inner">
				    <img src="http://localhost:8080/wp_nighteyes/wp-content/uploads/2016/08/attach.jpg" alt="Removing the backing strip on the tag." />
				</div>
						
				


			</div>
		</div>

			



		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

