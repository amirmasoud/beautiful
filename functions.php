<?php
// bootstrap walker for navigation
require_once('inc/wp_bootstrap_navwalker.php');

if( ! function_exists( 'beautiful_setup' ) ) :

	function beautiful_setup() {

		/*
		 * Make beautiful for translation.
		 *
		 * Translations can be added to the /languages/ directory.
	     * 
		 */
		load_theme_textdomain( 'beautiful', get_template_directory() . '/languages' );

		// This theme styles the visual editor to resemble the theme style.
		add_editor_style( array( 'css/editor-style.css' ) );

		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		// theme suport for for serach from
		add_theme_support( 'html5', array( 'search-form' ) );

		// Enable support for Post Thumbnails, and declare one sizes.
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 480, 480, true );

	    // register top navbar menu
		register_nav_menu( 'primary', 'Primary Menu' );

	    // register sidebars
	    // 
	    // index page sidebar
	    register_sidebar( array(
	        'name'          => __( 'Primary Sidebar', 'beautiful' ),
	        'id'            => 'sidebar-1',
	        'description'   => __( 'sidebar', 'beautiful' ),
	        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</aside>',
	        'before_title'  => '<h1 class="widget-title">',
	        'after_title'   => '</h1>',
	    ) );

	    // four sidebars for footer
	    register_sidebar( array(
	        'name'          => __( 'First footer sidebar', 'beautiful' ),
	        'id'            => 'sidebar-2',
	        'description'   => __( 'First footer sidebar', 'beautiful' ),
	        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</aside>',
	        'before_title'  => '<h1 class="widget-title">',
	        'after_title'   => '</h1>',
	    ) );

	    register_sidebar( array(
	        'name'          => __( 'Second footer sidebar', 'beautiful' ),
	        'id'            => 'sidebar-3',
	        'description'   => __( 'Second footer sidebar', 'beautiful' ),
	        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</aside>',
	        'before_title'  => '<h1 class="widget-title">',
	        'after_title'   => '</h1>',
	    ) );

	    register_sidebar( array(
	        'name'          => __( 'Third footer sidebar', 'beautiful' ),
	        'id'            => 'sidebar-4',
	        'description'   => __( 'Third footer sidebar', 'beautiful' ),
	        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</aside>',
	        'before_title'  => '<h1 class="widget-title">',
	        'after_title'   => '</h1>',
	    ) );

	    register_sidebar( array(
	        'name'          => __( 'Forth footer sidebar', 'beautiful' ),
	        'id'            => 'sidebar-5',
	        'description'   => __( 'Forth footer sidebar', 'beautiful' ),
	        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</aside>',
	        'before_title'  => '<h1 class="widget-title">',
	        'after_title'   => '</h1>',
	    ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list',
		) );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
		) );

		// This theme allows users to set a custom background.
		$custom_background_args = array(
			'default-color' => 'FFFFFF',
			'default-image' => '%1$s/images/bg2.png',
		);
		add_theme_support( 'custom-background', $custom_background_args );

		// This theme uses its own gallery styles.
		add_filter( 'use_default_gallery_style', '__return_false' );
	}
endif; // beautiful_setup
add_action( 'after_setup_theme', 'beautiful_setup' );

if ( ! isset( $content_width ) ) {
    $content_width = 880;
}

function beautiful_scripts() {

	// Add font-awesome font, used in the main stylesheet.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array() );

	// Add bootstrap, used in the main stylesheet.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array() );	

	// Load our main stylesheet.
	wp_enqueue_style( 'beautiful-style', get_stylesheet_uri());
	wp_enqueue_style( 'beautiful-animation', get_template_directory_uri() . '/css/animate.css');

	// load comment reply script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// load bootstrap js
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );

	// load textfill js, for font size at front page
	wp_enqueue_script( 'beautiful-textfill', get_template_directory_uri() . '/js/jquery.textfill.min.js');

	// load our custom js
	if( !is_rtl() )
		wp_enqueue_script( 'beautiful-script', get_template_directory_uri() . '/js/functions.js', array( 'beautiful-textfill', 'bootstrap-script' ) );
	else
		wp_enqueue_script( 'beautiful-script', get_template_directory_uri() . '/js/functions-rtl.js', array( 'beautiful-textfill', 'bootstrap-script' ) );


}
add_action( 'wp_enqueue_scripts', 'beautiful_scripts' );


// replace default comment forms with bootstrap forms
// --------------------------------------------------------------------------------
// 

add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );

function bootstrap3_comment_form_fields( $fields ) {

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$html5 = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
	$fields = array(
		'author' => '<div class="form-group comment-form-author col-md-6 col-xs-12">' . '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' placeholder="' . __( 'Name', "beautiful" ) . ( $req ? __( ' (require)', "beautiful" ) : '' ) . '" /></div>',
		'email' => '<div class="form-group comment-form-email col-md-6 col-xs-12"><input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' placeholder="' . __( 'Email', "beautiful" ) . ( $req ? __( ' (require)', "beautiful" ) : '' ) . '" /></div>',
		'url' => '<div class="form-group comment-form-url col-md-12 col-xs-12"><input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" placeholder="' . __( 'url', "beautiful" ) . ( $req ? __( ' (require)', "beautiful" ) : '' ) . '" /></div>',
	);

	return $fields;
}

add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );

function bootstrap3_comment_form( $args ) {
	$args['comment_field'] = '<div class="form-group comment-form-comment">
	<textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . __( 'Comment', "beautiful" ) . '"></textarea>
	</div>';
return $args;
}

// replace default title with our custom title
// --------------------------------------------------------------------------------
// 

add_filter( 'wp_title', 'beautiful_filter_wp_title' );
/**
 * page title
 * @param  text $title title to show
 * @return text        based on page you are diplay title
 */
function beautiful_filter_wp_title( $title ) {
    global $page, $paged;

    if ( is_feed() )
        return $title;

    $site_description = get_bloginfo( 'description' );

    $filtered_title = $title . get_bloginfo( 'name' );
    $filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
    $filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s', "beautiful" ), max( $paged, $page ) ) : '';

    return $filtered_title;
}// function beautiful_filter_wp_title

/**
 * post navigation
 * @return blog navigation
 */
function beautiful_blog_navigation() {
	$get_next_posts_link 		= get_next_posts_link();
	$get_previous_posts_link 	= get_previous_posts_link();

	if( !empty( $get_next_posts_link ) || !empty( $get_previous_posts_link ) ) :
		if( !is_rtl() ) :
	?>
		<div class="row blog-navigation">
			<div class="col-xs-6 text-center">
				<?php previous_posts_link('<i class="fa fa-angle-left fa-fw fa-2x"></i> <span>' . __("previous posts", "beautiful") . '</span>'); ?>
			</div>

			<div class="col-xs-6 text-center">
				<?php next_posts_link('<span>' . __("next posts", "beautiful") . '</span> <i class="fa fa-angle-right fa-fw fa-2x"></i>'); ?>
			</div>
		</div>
	<?php
		else :
	?>
		<div class="row blog-navigation">
			<div class="col-xs-6 text-center">
				<?php previous_posts_link('<span>' . __("previous posts", "beautiful") . ' <i class="fa fa-angle-left fa-fw fa-2x"></i></span>'); ?>
			</div>

			<div class="col-xs-6 text-center">
				<?php next_posts_link('<span><i class="fa fa-angle-right fa-fw fa-2x"></i> ' . __("next posts", "beautiful") . '</span>'); ?>
			</div>
		</div>
	<?php
		endif;
	endif;
}// function beautiful_blog_navigation

/**
 * water mark for post format on the front page
 * @param  post_format() $post_format
 * @return watermark              used with font Awesome
 */
function beautiful_watermark($post_format) {
	switch ($post_format) {
		case 'aside':
			echo '<i class="fa fa-fire"></i>';
			break;
		case 'chat':
			echo '<i class="fa fa-comments-o"></i>';
			break;
		case 'gallery':
			echo '<i class="fa fa-picture-o"></i>';
			break;
		case 'link':
			echo '<i class="fa fa-link"></i>';
			break;
		case 'image':
			echo '<i class="fa fa-picture-o"></i>';
			break;
		case 'quote':
			echo '<i class="fa fa-quote-left"></i>';
			break;
		case 'status':
			echo '<i class="fa fa-cloud"></i>';
			break;
		case 'video':
			echo '<i class="fa fa-video-camera"></i>';
			break;
		case 'audio':
			echo '<i class="fa fa-music"></i>';
			break;
		default:
			if(is_sticky())
				echo '<i class="fa fa-thumb-tack"></i>';
			elseif(post_password_required())
				echo '<i class="fa fa-unlock-alt"></i>';
			else
				echo '<i class="fa fa-pencil"></i>';
	}// switch ($post_format)
}// function watermark()

/**
 * template for showing blog posts at front page
 * it based on havig thumbnail or not
 * 
 * @return blogPost 
 */
function beautiful_blog_post() {

	if(get_the_post_thumbnail() != '') : ?>	

		<div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-4 col-xs-6 blog-post blog-thumbnail'); ?>>
			<a class="post-link" rel="<?php the_ID(); ?>" href="<?php echo esc_url( the_permalink() ) ?>">

				<?php the_post_thumbnail(); ?>

				<div class="box-caption animate">
					<span class="animate"><?php the_title(); ?><br /><small class="continue animate"><?php _e("continue...", "beautiful") ?></small></span>
					<div class="watermark"><?php beautiful_watermark( get_post_format() ) ?></div>
				</div>

			</a>
		</div>

	<?php else: ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-4 col-xs-6 blog-post')?>>
			<a class="post-link" rel="<?php the_ID(); ?>" href="<?php echo esc_url( get_permalink() ) ?>" data-title="<?php the_title() ?>">
				
				<?php // just a transparent background ?>
				<img src="<?php echo get_template_directory_uri() ?>/images/bg.png">

				<div class="box-caption">
					<span><?php the_title(); ?><br /><small class="continue animate"><?php _e("continue...", "beautiful") ?></small></span>
					<div class="watermark"><?php beautiful_watermark( get_post_format() ) ?></div>
				</div>

			</a>
		</div>

	<?php endif;

}// function beautiful_blog_post

function beautiful_post_navigation() {
	if( !is_rtl() ) :
	?>
		<div class="row post-navigation">
			<div class="col-xs-6 text-center">
				<?php next_post_link('<i class="fa fa-angle-left fa-fw fa-2x"></i> %link'); ?>
				
			</div>
			<div class="col-xs-6 text-center">
				<?php previous_post_link('%link <i class="fa fa-angle-right fa-fw fa-2x"></i>'); ?>
			</div>
		</div>
	<?php
	else :
	?>
		<div class="row post-navigation">
			<div class="col-xs-6 text-center">
				<?php previous_post_link('%link <i class="fa fa-angle-left fa-fw fa-2x"></i>'); ?>
			</div>
			<div class="col-xs-6 text-center">
				<?php next_post_link('<i class="fa fa-angle-right fa-fw fa-2x"></i> %link'); ?>
				
			</div>
		</div>
	<?php
	endif;
}// function beautiful_post_navigation