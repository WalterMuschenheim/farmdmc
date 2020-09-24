<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Farm_DMC
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

<body data-spy="scroll" data-target="#site-navigation" data-offset="120" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'farmdmc' ); ?></a>

	<header id="masthead" class="site-header navbar navbar-expand-lg navbar-light navbar-fixed-top bg-faded">
		<div class="site-branding container-fluid">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<?php
			else :
				?>
				<div class="site-title"><?php bloginfo( 'name' ); ?></div></a>
				<?php
			endif;
			$farmdmc_description = get_bloginfo( 'description', 'display' );
			if ( $farmdmc_description || is_customize_preview() ) :
				?>
				<div class="site-description navbar-text"><?php echo $farmdmc_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php /*esc_html_e( 'Primary Menu', 'farmdmc' );*/ ?><span class="navbar-toggler-icon"></span></button>-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	 => 'nav navbar-nav',
					'container'		 => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'	 => 'navbarSupportedContent',
					'walker'		 => new FarmDMC_Menu_Walker()
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
