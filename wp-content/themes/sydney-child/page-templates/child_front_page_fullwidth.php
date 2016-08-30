<?php

/*

Template Name: Custom Home Page

*/
	get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php 
				global $post;
				$current_post_id = $post->ID; 
			   $homepage = get_post_meta( $current_post_id ); 
					// to use post meta areas do the following:
					// echo $homepage[section2][0] or echo $homepage[section1][0];
			?>
			
			
<!-- --------------- NEXT- SECTION 1 - About the product  ---------------- -->			


		<div id="section1" class="odd">
			<div class="section-inner">
<a name="learn-more"></a>
				<h1><?php   echo $homepage[section1_title][0];  ?></h1>
				
				<img src="<?php   echo $homepage[section1_image][0];  ?>" class="home_sect2_img" alt="Night Eyes tab glowing in the dark">
				
				<p><?php   echo $homepage[section1_text][0];  ?></p>

				<a href="<?php echo get_site_url() . '/cart/?add-to-cart=19' ?>" class="custom-btn">ORDER NOW</a>

			</div>
		</div>


<!-- --------------- NEXT - SECTION 2 - Why I need it  ---------------- -->


		<div id="section2" class="even">
			<div class="section-inner">

				<h1><?php   echo $homepage[section2_title1][0];  ?></h1>

				<div class="left-inner">
					
					<h2><?php   echo $homepage[section2_title2][0];  ?></h2>

					<ul><?php   echo $homepage[section2_text][0];  ?></ul>

				</div>

				<div class="right-inner">
					<img src="<?php   echo $homepage[section2_image][0];  ?>" class="home_sect3_img" alt="Night Eyes tag attached to a tent zipper">

				</div>

				

			</div>
		</div>

			


<!-- --------------- NEXT - SECTION 3 - Where to Use It  ---------------- -->

		
		<div id="section3" class="odd odd3">

				<div class="testimonial-box-1">
					<p><?php   echo $homepage[section3_testimonial_box1][0];  ?> </p>
				</div>
			<div class="section-inner">
			

				<h1><?php   echo $homepage[section3_title1][0];  ?></h1>

				<div class="even-left-inner">



					<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '62' ); } ?>

				
				</div>

				<div class="even-right-inner">

					<h2><?php   echo $homepage[section3_title2][0];  ?></h2>

					<ul><?php   echo $homepage[section3_text][0];  ?>
						
					</ul>

					<h3><?php   echo $homepage[section3_title3][0];  ?></h3>

					<a href="<?php echo get_home_url() . "/instructions/"?>" class="custom-btn">LEARN HOW</a>

				</div>
			
			</div>

			<div class="statement">

				<p><?php   echo $homepage[section3_phrase][0];  ?></p>

			</div>

			<div class="testimonial-box-2">
					<p><?php   echo $homepage[section4_testimonial_box1][0];  ?></p>
			</div>

		</div>

			

			
	

<!-- --------------- NEXT - SECTION 4 - Comments  ---------------- -->

		<div id="section4" class="even even4">

			

			<div class="section-inner">

				

				<h1><?php   echo $homepage[section4_title1][0];  ?></h1>
				<br><br>

				<h3><?php   echo $homepage[section4_text][0];  ?></h3>

				<div class="comment-left-inner">

					<div class="comment list">
						<?php 
						 //Gather comments for a specific page/post 
				        $comments = get_comments(array(
				            'post_id' => $current_post_id,
				            'status' => 'approve' //Change this to the type of comments to be displayed
				        ));

					    wp_list_comments(array(
				            'per_page' => 3, //Allow comment pagination
				            'reverse_top_level' => false, //Show the latest comments at the top of the list
				            'callback' => 'child_sydney_custom_comment',
				            'style' => 'div'
				        ), $comments);  


					    ?>
					</div>



				</div>

				<div class="comment-right-inner">
					
					<?php 

					$args = array(
						'title_reply'       => __( 'Please enter your details' ),
						'fields' =>  array(

						  'author' =>
						    '<p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
						   '<span class="required">*</span>'  .
						    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
						    '" size="30" required /></p>',

						  'email' =>
						    '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
						   '<span class="required">*</span>' .
						    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
						    '" size="30"  required /></p>',

						  
						),

						'comment_notes_before' => '<p class="comment-notes">' .  __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</p>',
						'class_submit'      => 'custom-btn',
						 'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a> <a href="%3$s" title="Log out of this account">Log out?</a></p><p class="logged-in-as">' ),
							      admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
							    ) . '</p>',
						);

					comment_form( $args, $current_post_id ); ?>


				</div>

			</div>
		</div>


<!-- --------------- NEXT - SECTION 6 - Sales Pitch  ---------------- -->


		<div id="section6" class="odd">
			<div class="section-inner">

				<div class="sales-pitch">
					<p><?php   echo $homepage[section5_sales_pitch][0];  ?><p>
				</div>


				<a href="#" class="custom-btn">ORDER NOW</a>

			</div>

		</div>



		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

