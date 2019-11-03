<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Beautiful
 * @since Beautiful 1.0
 */
get_header(); ?>
<section id="single-post-container" class="row content-area single-post-container center-block">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="row title-wrapper" id="post-<?php the_ID(); ?>">
			<div class="col-xs-12 col-sm-12 single-title-container">
				<h1 class="single-title text-left"><?php the_title() ?></h1>
			</div>
		</div>
		<div <?php post_class("col-md-12 single-content") ?>>
			<?php the_content() ?>
			<?php 
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'ah' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
			?>
		</div>
		<div class="row post-meta-info">
			<?php $category = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'ah' ) ); ?>
			<div class="col-md-3 col-xs-6 text-center"><i class="fa fa-tag"></i> <?php the_tags('', ', ', ''); ?></div>
			<div class="col-md-3 col-xs-6 text-center"><i class="fa fa-folder-open"></i> <?php echo $category ?></div>
			<div class="col-md-3 col-xs-6 text-center"><i class="fa fa-user"></i> <?php echo the_author_posts_link(); ?></div>
			<div class="col-md-3 col-xs-6 text-center"><i class="fa fa-calendar"></i> <a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ); _e(" ago", "beautiful"); ?></a></div>
		</div>

		<?php beautiful_post_navigation() ?>

		<div class="row comment-area">
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
		</div>
<?php endwhile; ?>
</section>
<?php get_footer(); ?>