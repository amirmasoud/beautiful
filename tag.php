<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section id="single-post-container" class="row content-area center-block">

	<?php if ( have_posts() ) : ?>

		<header class="page-header text-center">
			<h1 class="page-title"><i class="fa fa-tag"></i> 
				<?php printf( __( 'Tag Archives: %s', 'beautiful' ), single_tag_title( '', false ) ); ?>
			</h1>

			<?php
				// Show an optional term description.
				$term_description = term_description();
				if ( ! empty( $term_description ) ) :
					printf( '<small class="taxonomy-description">%s</small>', $term_description );
				endif;
			?>
		</header><!-- .archive-header -->

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

<?php get_footer() ?>
