<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package idealo2
 */

?>

	<footer id="colophon" class="site-footer">
		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'idealo2' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'idealo2' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'idealo2' ), 'idealo2', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div> -->
		<!-- .site-info -->
		 <div class="container-fluid bg-footer">
			<div class="container footer-content">
				<div class="row py-5">
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/logo-white.png'?>" alt="Logo" class="logo-footer px-3">
					</div>
					<div class="col-md-6">
						<div class="social-icons">
							<a href="https://www.instagram.com/tu_usuario" target="_blank" class="social-link">
								<i class="fa-brands fa-instagram"></i>
							</a>
							<a href="https://www.facebook.com/tu_usuario" target="_blank" class="social-link">
								<i class="fa-brands fa-facebook-f"></i>
							</a>
							<a href="https://www.tiktok.com/@tu_usuario" target="_blank" class="social-link">
								<i class="fa-brands fa-tiktok"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		 </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
