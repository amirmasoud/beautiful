<?php
/**
 * Backend codes.
 */
require_once('inc/backend/beautiful.inc.php');
require_once('inc/backend/header.inc.php');
require_once('inc/backend/content.inc.php');
require_once('inc/backend/footer.inc.php');

// customizer panel
require_once('inc/customize/customize.php');

/**
 * register sidebars
 * @return null
 */
function beautiful_register_sidebar() {
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

}

add_action( 'widgets_init', 'beautiful_register_sidebar' );


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

		// Enable Title Tag
		add_theme_support( 'title-tag' );

		add_image_size('beautiful-box', 480, 480, true);

		// hide admin bar
		add_filter('show_admin_bar', '__return_false');


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

	// Add Animation.css
	wp_enqueue_style( 'beautiful-animation', get_template_directory_uri() . '/css/animate.css');

	// Sidebar scrollbar
	wp_enqueue_style( 'perfect-scrollbar', get_template_directory_uri() . '/css/perfect-scrollbar.min.css');

	// Load our main stylesheet.
	wp_enqueue_style( 'beautiful-style', get_stylesheet_uri());

	// load comment reply script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// load bootstrap js
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );

	// load sidebar scrollbar js
	wp_enqueue_script( 'perfect-scrollbar', get_template_directory_uri() . '/js/perfect-scrollbar.min.js', array( 'jquery' ) );

	// load TextFill js, for font size at front page
	wp_enqueue_script( 'beautiful-fittext', get_template_directory_uri() . '/js/jquery.textfill.min.js');

	// load our custom js
	if( !is_rtl() )
		wp_enqueue_script( 'beautiful-script', get_template_directory_uri() . '/js/functions.js', array( 'beautiful-fittext', 'bootstrap-script' ) );
	else
		wp_enqueue_script( 'beautiful-script', get_template_directory_uri() . '/js/functions-rtl.js', array( 'beautiful-fittext', 'bootstrap-script' ) );


}
add_action( 'wp_enqueue_scripts', 'beautiful_scripts' );

/**
 * register js for admin section
 * @return null
 */
function beautiful_admin_scripts() {
	wp_enqueue_script( 'beautiful-customize', get_template_directory_uri() . '/inc/customize/js/customize.js' );
	//wp_enqueue_style( 'beautiful-style_admin', get_template_directory_uri() . '/inc/backend/customize.css' );
}
add_action( 'admin_enqueue_scripts', 'beautiful_admin_scripts' );


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
		'url' => '<div class="form-group comment-form-url col-md-12 col-xs-12"><input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" placeholder="' . __( 'url', "beautiful" ) . '" /></div>',
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

	$thumb_id = get_post_thumbnail_id( );
	$thumb_url_array = wp_get_attachment_image_src( $thumb_id, 'beautiful-box' );
	if( ( '' != get_the_post_thumbnail() ) &&
		( $thumb_url_array[1] == $thumb_url_array[2] ) &&
		( $thumb_url_array[1] == 480 )) : ?>	

		<div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-4 col-xs-6 blog-post blog-thumbnail'); ?>>
			<a class="post-link" rel="<?php the_ID(); ?>" href="<?php echo esc_url( the_permalink() ) ?>">
				<?php the_post_thumbnail('beautiful-box'); ?>
				<div class="box-caption animate">
					<h1 class="animate"><?php the_title() ?></h1>
					<small class="continue animate"><?php _e("continue...", "beautiful") ?></small>
					<div class="watermark"><?php beautiful_watermark( get_post_format() ) ?></div>
				</div>

			</a>
		</div>
	<?php elseif( ( '' != get_the_post_thumbnail() ) &&
				( $thumb_url_array[1] != $thumb_url_array[2] ) ||
				( $thumb_url_array[1] != 480 )) : ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-4 col-xs-6 blog-post')?>>
			<a class="post-link" rel="<?php the_ID(); ?>" href="<?php echo esc_url( get_permalink() ) ?>">
				
				<?php // just a transparent background ?>
				<img src="<?php echo get_template_directory_uri() ?>/images/bg.png" alt="default-bg">

				<div class="box-caption">
					<h1 class="animate"><?php the_title() ?></h1>
					<small class="continue animate"><?php _e("continue...", "beautiful") ?></small>
					<div class="watermark"><?php beautiful_watermark( get_post_format() ) ?></div>
				</div>

			</a>
		</div>

				
	<?php else: ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-4 col-xs-6 blog-post')?>>
			<a class="post-link" rel="<?php the_ID(); ?>" href="<?php echo esc_url( get_permalink() ) ?>">
				
				<?php // just a transparent background ?>
				<img src="<?php echo get_template_directory_uri() ?>/images/bg.png" alt="default-bg">

				<div class="box-caption">
					<h1 class="animate"><?php the_title() ?></h1>
					<small class="continue animate"><?php _e("continue...", "beautiful") ?></small>
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


/**
 * showing/hiding header items
 * @return menu/search
 */
function beautiful_header_sh() {
	// if sidebar is not empty
	if( is_active_sidebar( 'sidebar-1' ) ) :
		if( is_rtl() ) : ?>
			<div class="col-md-1 col-xs-6 menu animate">
				<span class="open-menu"><i class="fa fa-bars"></i></span>
				<span class="close-menu"><i class="fa fa-times"></i></span>
			</div>
			<div class="col-md-1 col-xs-6 search-icon animate text-center">
				<span><i class="fa fa-search text-center"></i></span>
			</div>
			<div class="col-md-10 col-xs-12 animated">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link" rel="home">
					<div class="logo animated"><?php bloginfo('name') ?></div>
				</a>
			</div>
		<?php else : ?>
			<div class="col-md-10 col-xs-12 animate">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link" rel="home">
					<div class="logo animated"><?php bloginfo('name') ?></div>
				</a>
			</div>
			<div class="col-md-1 col-xs-6 search-icon animate text-center">
				<span><i class="fa fa-search text-center"></i></span>
			</div>
			<div class="col-md-1 col-xs-6 menu animate">
				<span class="open-menu"><i class="fa fa-bars"></i></span>
				<span class="close-menu"><i class="fa fa-times"></i></span>
			</div>
		<?php endif;
	else:
		if( is_rtl() ) : ?>
			<div class="col-md-2 col-xs-12 search-icon animate text-center">
				<span><i class="fa fa-search text-center"></i></span>
			</div>
			<div class="col-md-10 col-xs-12 animated">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link" rel="home">
					<div class="logo animated"><?php bloginfo('name') ?></div>
				</a>
			</div>
		<?php else : ?>
			<div class="col-md-10 col-xs-12 animate">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link" rel="home">
					<div class="logo animated"><?php bloginfo('name') ?></div>
				</a>
			</div>
			<div class="col-md-2 col-xs-12 search-icon animate text-center">
				<span><i class="fa fa-search text-center"></i></span>
			</div>
		<?php endif;
	endif;
}