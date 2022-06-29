<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aquaban
 */

?>

		<footer id="footer" class="site-footer">
			<div class="container row">
				<div class="site-branding col">
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
				<div class="col site-info">
						<div>Все права защищены.</div>
						<div>ООО «Автобан55» ОГРН 1145543048969 ИНН 5501262038</div>
				</div>
				<div class="col right">
					<div class="to-top"><a href="#masthead">Наверх</a></div>
					<div class="design">Сайт запустили: <a href="https://www.nm-team.ru/" target="_blank">NM</a> & <a href="https://h1-digital.ru/" target="_blank">H1</a></div>
				</div>
			</div>
		</footer>
		</div><!-- #contacts -->
	</div><!-- #page -->
	
<?php wp_footer(); ?>

</body>
</html>
