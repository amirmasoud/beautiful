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
	else:
		?>

		<h1 class="page-title text-center not-found"><i class="fa fa-fire-extinguisher red"></i> <?php _e( 'Not Found', 'beautiful' ); ?></h1>
		<p class="text-center">
			<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'beautiful' ); ?>
			<br />
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<i class="fa fa-home"> </i> <?php _e( 'Back to home', 'beautiful' ); ?>
			</a>
		</p>
		
		<?php
	endif; 
	?>

</section>

<?php beautiful_blog_navigation(); ?>

<?php get_footer() ?>
