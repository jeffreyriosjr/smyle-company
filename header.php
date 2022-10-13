<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smyle_co_
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Oswald:wght@200&family=Qwitcher+Grypen&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/ba414641d6.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<header id="masthead" class="site-header">
	<div class="main-header">
	<div class="smyle-logo btn">
	<a href="http://smyleco.wpenginepowered.com/">	
	<img src="http://smyleco.wpenginepowered.com/wp-content/uploads/2022/09/SmyleLogo-2.png" class="blk-wht-logo"></a>
	</div>

		<nav id="site-navigation" class="smyle-navbar main-navigation navbar-expand-sm pt-3">
			<button class="menu-items navbar-toggler menu-toggle" aria-controls="primary-menu" aria-expanded="false" data-target="#home">SMYLE<br>HERE
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
		</div><!-- #site-navigation -->
	</header><!-- #masthead -->
