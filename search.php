<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Beautiful
 * @since Beautiful 1.0
 */

get_header(); ?>

<section id="single-post-container" class="row content-area center-block">

	<?php if ( have_posts() ) : ?>

		<header class="page-header text-center">
			<h1 class="page-title"><i class="fa fa-search"></i> 
				<?php printf( __( 'Search Results for: %s', 'beautiful' ), get_search_query() ); ?>
			</h1>
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
