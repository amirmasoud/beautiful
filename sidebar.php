<aside class="row sidebar">

	<div class="col-xs-12 menu">
		<span class="close-menu white"><i class="fa fa-fw fa-times"></i></span>
	</div>
	<div class="col-xs-12"></div>

	<?php  if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="sidebar-1" class="sidebar-1 widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #sidebar-1 -->
	<?php endif;  ?>
</aside>