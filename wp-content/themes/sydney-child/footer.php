<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-double-up"></i></a>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container my-footer">
			
			

			<a href="<?php echo esc_url( __( 'http://site2see.com.au', 'sydney' ) ); ?>"><i style="font-size:24px" class="fa">&#xf1f9;</i> <?php printf( __( '2016 www.site2see.com.au', 'sydney' ) ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
