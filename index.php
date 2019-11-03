<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Beautiful
 * @since Beautiful 1.0
 */

get_header() ?>

<section id="single-post-container" class="row content-area center-block">

	<?php

		// get first 4 stickt posts
		$sticky = get_option( 'sticky_posts' );

        // ready for paginating custom query
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

		$args = array(
			'posts_per_page' => 4,
			'post__in'  => $sticky,
			'ignore_sticky_posts' => 1
		);
		$query = new WP_Query( $args );

		// if we have sticky post
		if ( isset($sticky[0]) ) :
			
			// loop throgh them
			if ($query->have_posts()) :

				while ($query->have_posts()) :

					$query->the_post(); 

					// display each post
					beautiful_blog_post();

				endwhile;

			endif;

		endif;

		// reset previous query
		wp_reset_query();


		// get posts that are not sticky
		$query = new WP_Query( 
			array( 
				'post__not_in' => get_option( 'sticky_posts' ),
				'paged' => $paged
				) 
			);


		// loop throgh them
		if ($query->have_posts()) :

			while ($query->have_posts()) :

				$query->the_post();

				// display each post
				beautiful_blog_post();

			endwhile;

		else:
			?>

			<h1 class="page-title text-center not-found"><i class="fa fa-fire-extinguisher red"></i> <?php _e( 'Ready to Bloging?', 'beautiful' ); ?></h1>
			<p class="text-center">
				<?php _e( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'beautiful' ); ?>
				<br />
			</p>
			
			<?php
		endif; 

		// reset previous query
		wp_reset_query();
	?>

</section>

<?php beautiful_blog_navigation(); ?>

<?php get_footer() ?>