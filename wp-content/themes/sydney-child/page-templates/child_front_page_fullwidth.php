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
			// $homepage = get_post_meta( $current_post_id ); 
					// to use post meta areas do the following:
					// echo $homepage[section2][0] or echo $homepage[section1][0];
			?>
			
			
<!-- --------------- NEXT SECTION  ---------------- -->			


		<div id="section2" class="odd">
			<div class="section-inner">

				<h1>Don't let unseen nightime hazards ruin your next outdoor adventure</h1>
				
				<img src="http://localhost:8080/wp_nighteyes/wp-content/uploads/2016/07/tag_glow_sm.jpg" class="home_sect2_img" alt="Night Eyes tab glowing in the dark">
				
				<p> Night Eyes are an essential item for all camping and outdoor enthusiasts. Designed as a safety device to prevent accidents and injury caused by tripping on tent ropes or walking 
					into objects at night. <br><br>


					The tags will glow for up to 10 hours* enabling easy detection of potential hazards throughout the night. This is an accessory no camping or outdoor enthusiast should be 
					without. If you are fed-up with constantly tripping over tent ropes, stubbing your toes on tent pegs or not being able to find the tent zippers in the middle of the night, Night Eyes 
					glow in the dark tags will make your next outdoor adventure safer and more enjoyable. Protect your family and equipment by using these easy to attach glow in the dark tags.<br><br>


					Night Eyes fluorescent green colour makes them highly visible during the day and at night produces a bright iridescent glow meaning you don’t have to be able to see the tent ropes only the Night Eyes tags.<br><br>


					If you are mature adventurers or have young children running around your camp site, Night Eyes are an essential safety device to prevent unnecessary tripping and nasty falls.<br><br>


					This is one item you can’t afford not to pack in your camping kit. They’re also great gifts for your outdoor adventuring friends and family. Keep a pack handy in your glove box or 4X4 recovery kit. 

				</p>

				<a href="#" class="custom-btn">ORDER NOW</a>

			</div>
		</div>


<!-- --------------- NEXT SECTION  ---------------- -->


		<div id="section3" class="even">
			<div class="section-inner">

				<h1>“You’ll wonder how you ever managed to go camping without them.”</h1>
				<div class="left-inner">
					
					<h2>Why do I need Night Eyes?</h2>

					<ul>
						<li>Pack contains 6 large tags and 5 small tags</li>
						<li>High visibility at night and in the day</li>
						<li>10 hours glow time*</li>
						<li>Tough, durable & weather proof</li>
						<li>Wont tear or damage tent fabrics</li>
						<li>Multipurpose uses</li>
						<li>Easy to attach</li>
						<li>Ideal for all camping and outdoor enthusiast</li>
						<li>Can be seen from up to 5 meters away at night</li>

					</ul>
				</div>

				<div class="right-inner">
					<img src="http://localhost:8080/wp_nighteyes/wp-content/uploads/2016/08/zipper_tags.jpg" class="home_sect2_img" alt="Night Eyes tag attached to a tent zipper">

				</div>
			</div>
		</div>

			<div class="testimonial-box-1">
				<p>" What an amazing little device!  I was sceptical at first, but in the middle of the night whhen 'nature called', I was able to move around outside the tent, without tripping over ropes and pegs. "<br>Henry Canter, Brisbane.</p>
			</div>


<!-- --------------- NEXT SECTION  ---------------- -->

		
		<div id="section4" class="odd odd4">
			<div class="section-inner">

				<h1>Always losing your things at night when camping or tripping over objects in the dark?</h1>

				<div class="even-left-inner">

					<img src="http://localhost:8080/wp_nighteyes/wp-content/uploads/2016/08/tent_tags_400x556.jpg" class="home_sect1_img" alt="Night Eyes tags attached to ropes supporting a tent.">
				
				</div>

				<div class="even-right-inner">

					<h2>Night Eyes tags can be attached to:</h2>

					<ul>
						<li>Axe and shovel handles </li>
						<li>Trailer corners and toe hitches</li>
						<li>Car toe balls</li>
						<li>Key rings</li>
						<li>Dog collars</li>
						<li>Torches</li>
						<li>Camp chairs</li>
						<li>Annex poles </li>
						<li>Tent zippers</li>
					</ul>

					<h3>Night Eyes are quick and simple to attach</h3>

					<a href="#" class="custom-btn">LEARN HOW</a>

				</div>
			</div>

			<div class="statement">

				<p>“ More uses than you can poke a glow in the dark stick at! ”</p>

			</div>

		</div>

			<div class="testimonial-box-2">
				<p>" I never realised how dark it can get outside at night until the first night we went camping.  Night Eyes helped me identify all the 'obstacles' around me and to move around safely.<br>
				Night Eyes took only a few seconds to set up. Brilliant!! " <br> Kim Simpson, Bundaberg</p>
			</div>

			
	

<!-- --------------- NEXT SECTION  ---------------- -->

		<div id="section5" class="even even4">
			<div class="section-inner">

				<h1>Share your thoughts. Add a comment.</h1>
				<br><br>

				<h3>A statement outlining the importance you place on feedback. Explain the type of comments you want.</h3>

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

					<!--<p> “ Mauris interdum orci auctor magna faucibus, vitae malesuada tellus elementum. 
					Nullam enim libero, vulputate sed finibus facilisis, efficitur rutrum neque. Nulla urna 
					3justo, ultrices sit amet sem id, ultrices accumsan est. ”<br>
					MT Ford, Bribane <br><br>


					“ Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
					Aenean ut convallis diam. Duis lobortis, odio vitae blandit finibus, nisl velit tincidunt 
					dolor, quis bibendum tellus sapien sed massa. Curabitur congue arcu ut ex eleifend 
					posuere. Suspendisse ac nisi sed metus ullamcorper pellentesque. ” <br>
					GT Owner <br><br>


					“ Phasellus accumsan purus at ipsum gravida rhoncus. Suspendisse convallis turpis 
					eros, in aliquet nibh porta eget. Nunc aliquam nulla mattis quam cursus, sed molestie 
					urna egestas. ”<br>
					FJ Holden, Sunnyvale </p> -->

				</div>

				<div class="comment-right-inner">
					
					<?php 

					$args = array(
						'title_reply'       => __( 'Leave a message' ),
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

						'comment_notes_before' => '<p class="comment-notes">' .  __( 'Your email address will not be published so relax.' ) . ( $req ? $required_text : '' ) . '</p>',
						'class_submit'      => 'custom-btn',
						 'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a> <a href="%3$s" title="Log out of this account">Log out?</a></p><p class="logged-in-as">' ),
							      admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
							    ) . '</p>',
						);

					comment_form( $args, $current_post_id ); ?>


				</div>

			</div>
		</div>


<!-- --------------- NEXT SECTION  ---------------- -->


		<div id="section6" class="odd">
			<div class="section-inner">

				<div class="sales-pitch">
					<p>Proudly Australian made and owned.<p>
				</div>


				<a href="#" class="custom-btn">ORDER NOW</a>

			</div>

		</div>



		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

