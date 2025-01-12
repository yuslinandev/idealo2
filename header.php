<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package idealo2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'idealo2' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- .site-branding -->
		<!--
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$idealo2_description = get_bloginfo( 'description', 'display' );
			if ( $idealo2_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $idealo2_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>
		-->

		<!-- top bar -->
		<div class="container-fluid bg-top mb-2">
			<div class="container">
				<div class="row py-2">
					<div class="col-md-5">
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
					<div class="col-md-7">
						<form action="" class="frm-login">
							<label for="user" class="mx-2">Usuario: 
								<input type="text" name="user" id="user">
							</label>
							<label for="password">Contraseña: 
								<input type="password" name="password" id="password">
							</label>
							<button class="mx-2" type="submit">Ingresar</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- header bar -->
		<div class="container-fluid bg-header">
			<div class="container header-content">
				<div class="d-flex flex-column flex-md-row align-items-center py-4 px-5">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/logo-white.png'?>" alt="Logo" class="logo-main px-3">
					<h2 class="px-3 title-main">Convertimos ideas en <br/> publicaciones que dejan huella</h2>
				</div>
			</div>
		</div>

		<!-- main menu -->
		<div class="container-fluid bg-menu">
			<div class="container menu-content">
				<div class="row">
					<nav id="site-navigation" class="main-navigation">
						<button class="mx-auto menu-toggle btn-menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<?php echo '<i class="fas fa-bars"></i> MENU' ?>
						</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>

	</header><!-- #masthead -->
