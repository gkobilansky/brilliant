<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package brilliant
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h2>...And I Would Walk 500 More</h2></a>
		<div class="info-details">
		<h5>Vicky Brigis Photography<br/><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'brilliant' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'brilliant' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'brilliant' ), 'brilliant', '<a href="https://github.com/gkobilansky/brilliant" rel="designer">Gene Kobilansky</a>' ); ?></h5>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
