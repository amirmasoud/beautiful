		<footer class="row footer text-center">
			<div class="col-md-3">
				<?php  if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				<div id="sidebar-2" class="sidebar-2 widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div><!-- #sidebar-2 -->
				<?php endif;  ?>
			</div>

			<div class="col-md-3">
				<?php  if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
				<div id="sidebar-3" class="sidebar-3 widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div><!-- #sidebar-3 -->
				<?php endif;  ?>
			</div>

			<div class="col-md-3">
				<?php  if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
				<div id="sidebar-4" class="sidebar-4 widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
				</div><!-- #sidebar-4 -->
				<?php endif;  ?>
			</div>

			<div class="col-md-3">
				<?php  if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
				<div id="sidebar-5" class="sidebar-5 widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
				</div><!-- #sidebar-5 -->
				<?php endif;  ?>
			</div>
		</footer>
		<footer class="row" id="site-info">
			<p class="text-center">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'beautiful' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'beautiful' ), 'WordPress' ); ?></a>
				<br />
				<?php printf( __( 'THEMED BY', 'beautiful' ) ) ?> <a href="<?php echo esc_url( 'http://chakosh.ir/' ); ?>" class="text-right">AmirMasoud Sheidayi</a>
			</p>
		</footer>
	</div><!-- main-wrapper -->
	<?php wp_footer(); ?>
</body>
</html>