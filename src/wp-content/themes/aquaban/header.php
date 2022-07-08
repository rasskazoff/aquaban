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
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url');?>/assets/css/style.min.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url');?>/assets/css/chief-slider.min.css">
	<link rel="profile" href="https://gmpg.org/xfn/11">
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
		
	<div id="burger">
	<input type="checkbox" id="menu_checkbox">
	<label for="menu_checkbox">
		<div></div>
		<div></div>
		<div></div>
	</label>

		<div class="header_content">
			<?php while (have_rows('kontakty')) : the_row(); ?>
			<div class="header_top row">
				<div class="location col">
					<div class="tittle">Адрес:</div>
					<div class="content row">
					<?php if (get_sub_field('adres_1')) : ?>
						<div class="content_item marker"><?= get_sub_field('adres_1') ?></div>
					<?php endif; ?>
					<?php if (get_sub_field('adres_2')) : ?>
						<div class="content_item marker"><?= get_sub_field('adres_2') ?></div>
					<?php endif; ?>
					</div>		
				</div>

				<div class="schedule col">
					<div class="tittle">Время работы:</div>
					<div class="content row">
					<?php if (get_sub_field('vremya_raboty')) : ?>
						<div class="content_item clock"><?= get_sub_field('vremya_raboty') ?></div>
					<?php endif; ?>
					<?php if (get_sub_field('primechanie')) : ?>
						<div class="content_item"><?= get_sub_field('primechanie') ?></div>
					<?php endif; ?>
					</div>		
				</div>

				<div class="contact col">
					<div class="content">
					<?php if (get_sub_field('telefon')) : ?>
						<div class="content_item phone"><a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_sub_field('telefon')); ?>"><?= get_sub_field('telefon')?></a></div>
					<?php endif; ?>
					<?php if (get_sub_field('pochta')) : ?>
						<div class="content_item mail"><a href="mailto:<?= get_sub_field('pochta') ?>`"><?= get_sub_field('pochta') ?></a></div>
					<?php endif; ?>
					</div>		
				</div>
			</div>
			<?php endwhile; ?>
			
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
	</div>
	</header><!-- #masthead -->