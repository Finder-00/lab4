<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-4w4
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme-4w4' ); ?></a>

	<header id="masthead" class="site-header">
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
			$theme_4w4_description = get_bloginfo( 'description', 'display' );
			if ( $theme_4w4_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $theme_4w4_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="https://s2.svgbox.net/hero-outline.svg?ic=view-list&color=000000" width="32" height="32"></button> -->
		<nav id="site-navigation" class="main-navigation">
			<section id="burger" aria-controls="primary-menu" aria-expanded="false">
				<div></div>
				<div></div>
				<div></div>
			</section>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->


		<!-- debut du carrousel -->
		<?php 
		if( is_front_page()) : ?>
		<section class="carrousel">
			<div>Se d??finir un objectif</div>
			<div>??tre concentr?? pour accomplir son objectif</div>
			<div>Prendre le temps de vivre</div>
		</section>
		<div class="bouton">
			<div id="un"></div>
			<div id="deux"></div>
			<div id="trois"></div>
		</div>
		<?php endif; ?>
		<!-- fin carrousel -->


	</header><!-- #masthead -->
