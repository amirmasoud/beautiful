<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area row">

	<?php if ( have_comments() ) : ?>


	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-top" class="row navigation comment-navigation" role="navigation">
		<div class="nav-previous col-xs-6"><?php previous_comments_link( __( ' <i class="fa fa-angle-left"></i> Older Comments', 'beautiful' ) ); ?></div>
		<div class="nav-next col-xs-6 text-right"><?php next_comments_link(  __( 'Newer Comments <i class="fa fa-angle-right"></i>', 'beautiful' ) ); ?></div>
	</nav><!-- #comment-nav-top -->
	<?php endif; // Check for comment navigation. ?>

	<div class="comment-list">
		<?php
			wp_list_comments( array(
				'style'      => 'div',
				'short_ping' => true,
				'avatar_size'=> 64,
			) );
		?>
	</div><!-- .comment-list -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="row navigation comment-navigation" role="navigation">
		<div class="nav-previous col-xs-6"><?php previous_comments_link( __( ' <i class="fa fa-angle-left"></i> Older Comments', 'beautiful' ) ); ?></div>
		<div class="nav-next col-xs-6 text-right"><?php next_comments_link(  __( 'Newer Comments <i class="fa fa-angle-right"></i>', 'beautiful' ) ); ?></div>
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation. ?>

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'beautiful' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
