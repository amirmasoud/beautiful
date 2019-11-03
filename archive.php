<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Fourteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
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
			<h1 class="page-title"><i class="fa fa-archive"></i> 
				<?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'beautiful' ), get_the_date() );

					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'beautiful' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'beautiful' ) ) );

					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'beautiful' ), get_the_date( _x( 'Y', 'yearly archives date format', 'beautiful' ) ) );

					else :
						_e( 'Archives', 'beautiful' );

					endif;
				?>
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

		<h1 class="page-title text-center not-found"><i class="fa fa-fire-extinguisher red"></i> <?php _e( 'Oops!', 'beautiful' ); ?></h1>
		<p class="text-center">
			<?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'beautiful' ); ?>
			<br />
		</p>
		
		<?php
	endif;	
	?>

</section>

<?php beautiful_blog_navigation(); ?>

<?php get_footer() ?>
