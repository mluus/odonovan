<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package odonovan
 */

?>

	</div><!-- #content -->
        <div id="footer">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( '/legal', 'odonovan' ) ); ?>"><?php printf( esc_html__( 'Legal', 'odonovan' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php echo ('Copyright of ODonovan 2015' ); ?>
                        <?php odonovan_social_menu(); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
        </div><!-- #footer -->
        </div><!-- #container -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>

</html>
