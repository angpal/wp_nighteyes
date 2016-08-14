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

    <a class="go-top"><i class="fa fa-angle-up"></i></a>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container my-footer">
			<i style="font-size:24px" class="fa">&#xf1f9;</i>  <?php printf( __( ' 2016 All rights reserved')); ?></a>
			<span class="sep">  ...  </span>


			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'sydney' ) ); ?>"><?php printf( __( 'Powered by %s', 'sydney' ), 'WordPress' ); ?></a>
			<span class="sep">  -  </span>

			<?php printf( __( 'Theme: %2$s by %1$s', 'sydney' ), 'aThemes', '<a href="http://athemes.com/theme/sydney" rel="designer">Sydney</a>' ); ?>
			<span class="sep">  ...  </span>

			<a href="<?php echo esc_url( __( 'http://site2see.com.au', 'sydney' ) ); ?>"><?php printf( __( 'Developed by %s', 'sydney' ), 'www.site2see.com.au' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
