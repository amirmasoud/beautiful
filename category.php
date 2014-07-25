<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Beautiful
 * @since Beautiful 1.0
 */

get_header(); ?>

<section id="single-post-container" class="row content-area center-block">

	<?php if ( have_posts() ) : ?>

		<header class="page-header text-center">
			<h1 class="page-title"><i class="fa fa-folder"></i> 
				<?php printf( __( 'Category Archives: %s', 'beautiful' ), single_cat_title( '', false ) ); ?>
			</h1>

			<?php
				// Show an optional term description.
				$term_description = term_description();
				if ( ! empty( $term_description ) ) :
					printf( '<small class="taxonomy-description">%s</small>', $term_description );
				endif;
			?>
		</header><!-- .page-header -->

		<?php
		while (have_posts()) : 
				the_post();
				// display each post
				beautiful_blog_post();
		endwhile;
	endif; 
	?>

</section>

<?php beautiful_blog_navigation(); ?>

</section>

<?php get_footer() ?>
