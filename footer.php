<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gavdaly
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<aside class="menu">
			<nav id="site-navigation" class="main-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
		</aside>
		<aside class="widget">
			<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) {
				return;
			}
			?>

			<aside id="secondary" class="widget-area">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside><!-- #secondary -->
		</aside>
		<aside class="widget">

		</aside>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
