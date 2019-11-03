<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Beautiful
 * @since Beautiful 1.0
 */

get_header(); ?>


<section id="single-post-container" class="row content-area center-block">

	<h1 class="page-title text-center not-found"><i class="fa fa-fire-extinguisher red"></i> <?php _e( 'Not Found', 'beautiful' ); ?></h1>
	<p class="text-center">
		<?php _e( 'Oops, we couldn\'t handle your request.', 'beautiful' ); ?>
		<br />
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<i class="fa fa-home"> </i> <?php _e( 'Back to home', 'beautiful' ); ?>
		</a>
	</p>

</section>