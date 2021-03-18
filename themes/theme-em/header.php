<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-em
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme-em' ); ?></a>

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
			$theme_em_description = get_bloginfo( 'description', 'display' );
			if ( $theme_em_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $theme_em_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<?php
		if (is_front_page()) :
		?>

			<?php
			
				$session1 = rand(1,4);
				$session2 = rand(1,4);
				$session3 = rand(1,4);
				$coursAffiche1;
				$coursAffiche2;
				$coursAffiche3;
			

				if ($session1 == 1) {
					$coursAffiche1 = '51';
				}else if ($session1 == 2) {
					$coursAffiche1 = '48';
				}else if ($session1 == 3) {
					$coursAffiche1 = '49';
				}else if ($session1 == 4) {
					$coursAffiche1 = '50';
				}
				
				if ($session2 == 1) {
					$coursAffiche2 = '55';
				}else if ($session2 == 2) {
					$coursAffiche2 = '52';
				}else if ($session2 == 3) {
					$coursAffiche2 = '53';
				}else if ($session2 == 4) {
					$coursAffiche2 = '54';
				}

				if ($session3 == 1) {
					$coursAffiche3 = '57';
				}else if ($session3 == 2) {
					$coursAffiche3 = '59';
				}else if ($session3 == 3) {
					$coursAffiche3 = '56';
				}else if ($session3 == 4) {
					$coursAffiche3 = '58';
				}

			?>


				<section class="carrousel">
								<div class="box-carou"><a href="<?php echo get_permalink($coursAffiche1); ?>">Cours aléatoire de la première session</a></div>
								<div class="box-carou"><a href="<?php echo get_permalink($coursAffiche2); ?>">Cours aléatoire de la deuxième session</a></div>
								<div class="box-carou"><a href="<?php echo get_permalink($coursAffiche3); ?>">Cours aléatoire de la troisième session</a></div>
				</section>
			<div class="btn-wrap">
				<button id="un">1</button>
				<button id="deux">2</button>
				<button id="trois">3</button>
			</div>	
		
		<?php endif; ?>
		<nav id="site-navigation" class="main-navigation">
		<button id="burger" class=" menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			
			<div class="burger-lines"></div>
			<div class="burger-lines"></div>
			<div class="burger-lines"></div>
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
