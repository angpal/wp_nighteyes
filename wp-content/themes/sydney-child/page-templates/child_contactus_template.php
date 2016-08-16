<?php

/*

Template Name: Custom Contact Us Template

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
			?>
			
			
<!-- --------------- NEXT- SECTION 1 - About the product  ---------------- -->			

<div class="sub-page-header">
	<h1><?php the_title(); ?></h1>
</div>
		<div id="instr-section1" class="odd">
			<div class="section-inner">

				
				<div class="contact_intro">
				       <p><span class="step">A statement outlining the importance you place on communication, specifically 
answering their questions. Explain the options available and/or the process. 
You may also add your expected response time </span> <br><br>

Mauris interdum orci auctor magna faucibus, vitae malesuada tellus elementum. 
Nullam enim libero, vulputate sed finibus facilisis, efficitur rutrum neque. Nulla urna 3justo, ultrices 
sit amet sem id, ultrices accumsan est.<br><br>

Mauris interdum orci auctor magna faucibus, vitae malesuada tellus elementum. 
Nullam enim libero, vulputate sed finibus facilisis, efficitur rutrum neque. Nulla urna 3justo, ultrices 
sit amet sem id, ultrices accumsan est.
<p>
				       
				</div>
				
				<div class="contact_icon">
				    <img src="http://localhost:8080/wp_nighteyes/wp-content/uploads/2016/08/comm_icon_450x240.jpg" alt="Communication Icon." />
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

						<?php echo do_shortcode( '[contact-form-7 id="59" title="Contact form 1"]' ); ?>
				</div>
				
				<div class="instructions-right-inner">
				    

				</div>
						
				


			</div>
		</div>

			



		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

