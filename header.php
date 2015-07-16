<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package brilliant
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'brilliant' ); ?></a>
	<header id="masthead" class="site-header <?php if (is_front_page()) echo "home-background";?>" role="banner">

			<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt=""></a>
	<?php endif; // End header image check. ?>

		<div class="site-branding">
			<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php
			$args = array();
				if (is_front_page())
					$args=array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' );
				else $args=array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu');
			wp_nav_menu($args);?>
			
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'brilliant' ); ?></button>
		</nav><!-- #site-navigation -->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<h1 class="site-title <?php if (is_front_page()) echo "home-title";?>"></h1></a>
			<h2 class="<?php if (is_front_page()) echo "home-description";?> site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></h2>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
<?php if (is_front_page()) echo <<< EOT
	<div><a class="arrow-wrap" href="#content"><span class="arrow"></span>
<!--<span class="hint">scroll</span>-->
</a>
</div> 
EOT;
?>

	<div id="content" class="site-content">
