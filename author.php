<?php
/**
 * The template for displaying Author archive pages
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
			<h1 class="page-title"><i class="fa fa-user"></i> 
				<?php
					/*
					 * Queue the first post, that way we know what author
					 * we're dealing with (if that is the case).
					 *
					 * We reset this later so we can run the loop properly
					 * with a call to rewind_posts().
					 */
					the_post();

					printf( __( 'All posts by %s', 'beautiful' ), get_the_author() );
				?>
			</h1>
			<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<small class="author-description"><?php the_author_meta( 'description' ); ?></small>
			<?php endif; ?>
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

</section>

<?php get_footer() ?>
