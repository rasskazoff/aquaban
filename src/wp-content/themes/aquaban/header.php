<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aquaban
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url');?>/assets/css/style.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<div class="join">
	<header id="masthead" class="header container row">
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
			$aquaban_description = get_bloginfo( 'description', 'display' );
			if ( $aquaban_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $aquaban_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<div class="header_content">
			<div class="header_top row">
				<div class="location col">
					<div class="tittle">Адрес:</div>
					<div class="content row">
						<div class="content_item marker">ул. Конева, 18</div>
						<div class="content_item marker">ул. Лукашевича, 14/6</div>
					</div>		
				</div>

				<div class="schedule col">
					<div class="tittle">Время работы:</div>
					<div class="content row">
						<div class="content_item clock">Ежедневно 24 часа</div>
						<div class="content_item">Перерыв:<br/>01:00 - 04:00 Пн-Чт</div>
					</div>		
				</div>

				<div class="contact col">
					<div class="content">
						<div class="content_item phone"><a href="tel:+"><span>8 (3812) </span>955-055</a></div>
						<div class="content_item mail"><a href="mailto:">955055@bk.ru</a></div>
					</div>		
				</div>
			</div>
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main',
						'menu_id'        => 'Главное меню',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
