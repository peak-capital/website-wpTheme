<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peak2021
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'peak2021' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="peak-branding">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <?php echo get_template_part( 'inc/inline', 'peak-logo-whitefont.svg' ) ?>
      </a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <svg class="ui-hamburger" width="52" height="24" viewBox="0 0 52 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line y1="1" x2="52" y2="1" stroke="black" stroke-width="2"/>
          <line y1="12" x2="52" y2="12" stroke="black" stroke-width="2"/>
          <line y1="23" x2="52" y2="23" stroke="black" stroke-width="2"/>
        </svg>
        <svg class="close-x-mobile" width="54" height="24" viewBox="0 0 54 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="0.61036" y1="23.079" x2="52.6104" y2="1.07903" stroke="black" stroke-width="2"/>
          <line y1="-1" x2="56.4624" y2="-1" transform="matrix(-0.920967 -0.38964 -0.38964 0.920967 53 24)" stroke="black" stroke-width="2"/>
        </svg>
</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
