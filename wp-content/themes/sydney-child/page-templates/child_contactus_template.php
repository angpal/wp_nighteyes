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
						You may also add your expected response time </span> 
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
			
			<div class="contact-form-left">
				
				
				<div class="cf-box">

					<p>If you have any questions about the Night Eyes product or its application, reach out to us, either on the the form below or via the other details to the right and we'll respond as soon as possible. <p>
					<br>

					<?php echo do_shortcode( '[contact-form-7 id="59" title="Contact form 1"]' ); ?>
				</div>
				
			</div>
				
			<div class="contact-details-right">

					<h3>My Contact Details </h3>

				<div class="contact-details">
				

					<div class="contact-address"><span><i class="fa fa-home"></i></span>&nbsp; &nbsp; &nbsp;Admin</div>

					<div class="contact-phone"><span><i class="fa fa-phone"></i></span>&nbsp; &nbsp; &nbsp;0409 XXX XXX</div>

					<div class="contact-email"><span><i class="fa fa-envelope"></i></span>&nbsp; &nbsp; &nbsp;xxx@yyy.zzz</div>

				</div>

				<h3>Best Contact Times</h3>

				<div class="contact-details">

					<p>Mon - Fri:&nbsp; &nbsp; 5pm to 6pm</p>
					<p>Saturday: &nbsp; 10am - 2pm</p>
					<p>Sunday: &nbsp; &nbsp; &nbsp;11am - 1pm</p>
				</div>
			</div>		
				
		</div>

			



		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

