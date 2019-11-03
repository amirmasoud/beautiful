<?php

// including cusomization controls
require_once("general.php");
require_once("header.php");
require_once("home_page.php");
require_once("footer.php");
require_once("single.php");


/**
 * main customized css file
 * it will be included to the header
 * 
 * @return css
 */
function beautiful_customizer_css() {
    $beautiful_logo = new beautiful_header();
?>

<style type="text/css">
<?php $beautiful_genral_font = esc_attr (get_theme_mod("beautiful_genral_font") ) ?>
<?php if(!  empty($beautiful_genral_font) ) : ?>
    @import url(http://fonts.googleapis.com/css?family=<?php echo $beautiful_genral_font ?>);
<?php endif ?>

<?php if( ! empty($beautiful_genral_font) ) : ?>
    @import url(http://fonts.googleapis.com/css?family=<?php echo $beautiful_genral_font ?>);
<?php endif ?>

body {
    <?php $google_font = esc_attr (get_theme_mod("beautiful_genral_font") ); 
    $google_font = explode("+", $google_font);
    $google_font = implode(" ", $google_font);
    ?>
    font-family: <?php echo esc_attr (get_theme_mod("beautiful_genral_font") ) ?> ,'Open Sans', sans-serif;
    color: <?php echo esc_attr (get_theme_mod("beautiful_post_font_color") ) ?>;
}

h1, h2, h3, h4,h5, h6 {
    font-family: <?php echo esc_attr (get_theme_mod("beautiful_header_font") ) ?> ,'Open Sans', sans-serif !important;
}

a {
    color: <?php echo esc_attr (get_theme_mod("beautiful_link_color") ) ?>;
}
a:hover,
a:active {
    color: <?php echo esc_attr (get_theme_mod("beautiful_link_color_hover") ) ?>;
}

/* Support a widely-adopted but non-standard selector for text selection styles
 * to achieve a better experience. See http://core.trac.wordpress.org/ticket/25898.
 */
::selection {
    background: <?php echo esc_attr (get_theme_mod("beautiful_link_color_hover") ) ?>;
    color: <?php echo esc_attr (get_theme_mod("beautiful_post_font_color") ) ?>;
}

::-moz-selection {
    background: <?php echo esc_attr (get_theme_mod("beautiful_link_color_hover") ) ?>;
    color: <?php echo esc_attr (get_theme_mod("beautiful_post_font_color") ) ?>;
}

::-webkit-input-placeholder {
    color: <?php echo esc_attr (get_theme_mod("beautiful_post_font_color") ) ?>;
}

:-moz-placeholder {
    color: <?php echo esc_attr (get_theme_mod("beautiful_post_font_color") ) ?>;
}

::-moz-placeholder {
    color: <?php echo esc_attr (get_theme_mod("beautiful_post_font_color") ) ?>;
}

:-ms-input-placeholder {
    color: <?php echo esc_attr (get_theme_mod("beautiful_post_font_color") ) ?>;
}

header.row {
    <?php if( esc_attr (get_theme_mod("beautiful_header_background") ) == "image" ) : ?>
        background: url("<?php echo esc_attr (get_theme_mod('beautiful_header_background_image') ) ?>") repeat repeat center;
    <?php else: ?>
        background-color: <?php echo esc_attr (get_theme_mod("beautiful_header_background_color") ) ?>;
    <?php endif; ?>
    color: <?php echo esc_attr (get_theme_mod("beautiful_header_font_color") ) ?>;
    border-bottom: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_header_border_color") ) ?>;
}

.logo {
    <?php $beautiful_logo->logo_image() ?>
    <?php $beautiful_logo->logo_color() ?>
}

#search {
    color: <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
}

<?php $beautiful_content = new beautiful_content() ?>

<?php if( esc_attr (get_theme_mod("beautiful_homepage_style") ) == "same_color" ) : ?>
.content-area .blog-post .box-caption {
    background: <?php $beautiful_content->same_color() ?> !important;
}
<?php elseif( esc_attr (get_theme_mod("beautiful_homepage_style") ) == "spectrum" ) : ?>
.content-area .blog-post:nth-child(12n) .box-caption {
    background: <?php $beautiful_content->spectrum(1) ?> !important;
}
.content-area .blog-post:nth-child(12n+1) .box-caption {
    background: <?php $beautiful_content->spectrum(2) ?> !important;
}
.content-area .blog-post:nth-child(12n+2) .box-caption {
    background: <?php $beautiful_content->spectrum(3) ?> !important;
}
.content-area .blog-post:nth-child(12n+3) .box-caption {
    background: <?php $beautiful_content->spectrum(4) ?> !important;
}
.content-area .blog-post:nth-child(12n+4) .box-caption {
    background: <?php $beautiful_content->spectrum(5) ?> !important;
}
.content-area .blog-post:nth-child(12n+5) .box-caption {
    background: <?php $beautiful_content->spectrum(6) ?> !important;
}
.content-area .blog-post:nth-child(12n+6) .box-caption {
    background: <?php $beautiful_content->spectrum(7) ?> !important;
}
.content-area .blog-post:nth-child(12n+7) .box-caption {
    background: <?php $beautiful_content->spectrum(8) ?> !important;
}
.content-area .blog-post:nth-child(12n+8) .box-caption {
    background: <?php $beautiful_content->spectrum(9) ?> !important;
}
.content-area .blog-post:nth-child(12n+9) .box-caption {
    background: <?php $beautiful_content->spectrum(10) ?> !important;
}
.content-area .blog-post:nth-child(12n+10) .box-caption {
    background: <?php $beautiful_content->spectrum(11) ?> !important;
}
.content-area .blog-post:nth-child(12n+11) .box-caption {
    background: <?php $beautiful_content->spectrum(12) ?> !important;
}
<?php elseif( esc_attr (get_theme_mod("beautiful_homepage_style") ) == "custom" ) : ?>
.content-area .blog-post:nth-child(12n) .box-caption {
    background: <?php $beautiful_content->box(1) ?> !important;
}
.content-area .blog-post:nth-child(12n+1) .box-caption {
    background: <?php $beautiful_content->box(2) ?> !important;
}
.content-area .blog-post:nth-child(12n+2) .box-caption {
    background: <?php $beautiful_content->box(3) ?> !important;
}
.content-area .blog-post:nth-child(12n+3) .box-caption {
    background: <?php $beautiful_content->box(4) ?> !important;
}
.content-area .blog-post:nth-child(12n+4) .box-caption {
    background: <?php $beautiful_content->box(5) ?> !important;
}
.content-area .blog-post:nth-child(12n+5) .box-caption {
    background: <?php $beautiful_content->box(6) ?> !important;
}
.content-area .blog-post:nth-child(12n+6) .box-caption {
    background: <?php $beautiful_content->box(7) ?> !important;
}
.content-area .blog-post:nth-child(12n+7) .box-caption {
    background: <?php $beautiful_content->box(8) ?> !important;
}
.content-area .blog-post:nth-child(12n+8) .box-caption {
    background: <?php $beautiful_content->box(9) ?> !important;
}
.content-area .blog-post:nth-child(12n+9) .box-caption {
    background: <?php $beautiful_content->box(10) ?> !important;
}
.content-area .blog-post:nth-child(12n+10) .box-caption {
    background: <?php $beautiful_content->box(11) ?> !important;
}
.content-area .blog-post:nth-child(12n+11) .box-caption {
    background: <?php $beautiful_content->box(12) ?> !important;
}
<?php else : ?>
.content-area .blog-post:nth-child(12n) .box-caption {
    background: <?php $beautiful_content->random() ?> !important;
}
.content-area .blog-post:nth-child(12n+1) .box-caption {
    background: <?php $beautiful_content->random() ?> !important;
}
.content-area .blog-post:nth-child(12n+2) .box-caption {
    background: <?php $beautiful_content->random() ?> !important;
}
.content-area .blog-post:nth-child(12n+3) .box-caption {
    background: <?php $beautiful_content->random() ?> !important;
}
.content-area .blog-post:nth-child(12n+4) .box-caption {
    background: <?php $beautiful_content->random() ?> !important;
}
.content-area .blog-post:nth-child(12n+5) .box-caption {
    background: <?php $beautiful_content->random() ?> !important;
}
.content-area .blog-post:nth-child(12n+6) .box-caption {
    background: <?php $beautiful_content->random() ?> !important;
}
.content-area .blog-post:nth-child(12n+7) .box-caption {
    background: <?php $beautiful_content->random() ?> !important;
}
.content-area .blog-post:nth-child(12n+8) .box-caption {
    background: <?php $beautiful_content->random() ?> !important;
}
.content-area .blog-post:nth-child(12n+9) .box-caption {
    background: <?php $beautiful_content->random() ?> !important;
}
.content-area .blog-post:nth-child(12n+10) .box-caption {
    background: <?php $beautiful_content->random() ?> !important;
}
.content-area .blog-post:nth-child(12n+11) .box-caption {
    background: <?php $beautiful_content->random() ?> !important;
}
<?php endif; ?>

.continue, .box-caption
{
    color: <?php echo esc_attr (get_theme_mod("beautiful_box_font_color") ) ?>;
}

.title-wrapper, .post-navigation, .post-meta-info, .single-content, .breadcrumb
{
    border-bottom: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
}

.post-meta-info .col-md-3,
.post-meta-info .col-md-4
{
    border-left: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
}


.single-title {
    color: <?php echo esc_attr (get_theme_mod( "beautiful_single_content_header_color" ) ) ?>;
}

.single-content, .breadcrumb {
    background-color: <?php echo esc_attr (get_theme_mod( "beautiful_single_content_background" ) ) ?>;
    color: <?php echo esc_attr (get_theme_mod( "beautiful_single_content_color" ) ) ?>;
}

.breadcrumb li {
    color: color: <?php echo esc_attr (get_theme_mod( "beautiful_single_content_header_color" ) ) ?>;
}


.hentry .mejs-mediaelement,
.hentry .mejs-container .mejs-controls {
    background: #0F4D70;
}

.hentry .mejs-controls .mejs-time-rail .mejs-time-loaded,
.hentry .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
    background: #fff;
}

.hentry .mejs-controls .mejs-time-rail .mejs-time-current {
    background: #009CB9;
}

.hentry .mejs-controls .mejs-time-rail .mejs-time-total,
.hentry .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
    background: rgba(255,255,255,.33);
}

.page-links a {
    color: <?php echo esc_attr (get_theme_mod("beautiful_link_color") ) ?>;
}

.page-links a:hover {
    color: <?php echo esc_attr (get_theme_mod("beautiful_link_color_hover") ) ?>;
}

.post-navigation .col-xs-6,
.blog-navigation .col-xs-6
{
    border-left: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
}

.not-found {
    text-shadow: 1px 1px 1px <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
}


.no-comments, .pingback
{
    border-top: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
    border-bottom: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
}
.commentlist .reply {}
.reply a 
{
    border: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
}

.comment-meta
{
    border-bottom: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
    border-top: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
}

.bypostauthor {}
.comment-author-admin .comment-author .fa-star
{
    color: <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
}
.comment-author {
    border-right: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
}

#respond input, #respond textarea
{
    color: <?php echo esc_attr (get_theme_mod("beautiful_post_font_color") ) ?>;
    border: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
}
#author
{
    border-right: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?> !important;
}
#respond input:focus, #respond textarea:focus, #submit:focus, #respond input[type="submit"]:hover
{
    box-shadow: 0 0 5px 1px <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?> !important;
}

aside.sidebar
{
    background: <?php echo esc_attr (get_theme_mod("beautiful_widget_background") ) ?>;
}


<?php $beautiful_footer = new beautiful_footer() ?>

<?php if( esc_attr (get_theme_mod("beautiful_footer_style") ) == "custom" ) : ?>
.widget ul li:nth-child(12n), .tagcloud a:nth-child(12n) {
    background: <?php $beautiful_footer->widget(1) ?> !important;
}
.widget ul li:nth-child(12n+1), .tagcloud a:nth-child(12n+1) {
    background: <?php $beautiful_footer->widget(2) ?> !important;
}
.widget ul li:nth-child(12n+2), .tagcloud a:nth-child(12n+2) {
    background: <?php $beautiful_footer->widget(3) ?> !important;
}
.widget ul li:nth-child(12n+3), .tagcloud a:nth-child(12n+3) {
    background: <?php $beautiful_footer->widget(4) ?> !important;
}
.widget ul li:nth-child(12n+4), .tagcloud a:nth-child(12n+4) {
    background: <?php $beautiful_footer->widget(5) ?> !important;
}
.widget ul li:nth-child(12n+5), .tagcloud a:nth-child(12n+5) {
    background: <?php $beautiful_footer->widget(6) ?> !important;
}
.widget ul li:nth-child(12n+6), .tagcloud a:nth-child(12n+6) {
    background: <?php $beautiful_footer->widget(7) ?> !important;
}
.widget ul li:nth-child(12n+7), .tagcloud a:nth-child(12n+7) {
    background: <?php $beautiful_footer->widget(8) ?> !important;
}
.widget ul li:nth-child(12n+8), .tagcloud a:nth-child(12n+8) {
    background: <?php $beautiful_footer->widget(9) ?> !important;
}
.widget ul li:nth-child(12n+9), .tagcloud a:nth-child(12n+9) {
    background: <?php $beautiful_footer->widget(10) ?> !important;
}
.widget ul li:nth-child(12n+10), .tagcloud a:nth-child(12n+10) {
    background: <?php $beautiful_footer->widget(11) ?> !important;
}
.widget ul li:nth-child(12n+11), .tagcloud a:nth-child(12n+11) {
    background: <?php $beautiful_footer->widget(12) ?> !important;
}
#calendar_wrap caption {
    background: <?php $beautiful_footer->widget(1) ?> !important;
}
#calendar_wrap thead {
    background: <?php $beautiful_footer->widget(2) ?> !important;
}
#calendar_wrap tbody tr:nth-child(1) {
    background: <?php $beautiful_footer->widget(3) ?> !important;
}
#calendar_wrap tbody tr:nth-child(2) {
    background: <?php $beautiful_footer->widget(4) ?> !important;
}
#calendar_wrap tbody tr:nth-child(3) {
    background: <?php $beautiful_footer->widget(5) ?> !important;
}
#calendar_wrap tbody tr:nth-child(4) {
    background: <?php $beautiful_footer->widget(6) ?> !important;
}
#calendar_wrap tbody tr:nth-child(5) {
    background: <?php $beautiful_footer->widget(7) ?> !important;
}
#calendar_wrap tbody tr:nth-child(6) {
    background: <?php $beautiful_footer->widget(8) ?> !important;
}
#calendar_wrap tfoot {
    background: <?php $beautiful_footer->widget(9) ?> !important;
}
<?php elseif( esc_attr (get_theme_mod("beautiful_footer_style") ) == "same_color" ) : ?>
.widget ul li, .tagcloud a {
    background: <?php $beautiful_footer->same_color() ?> !important;
}
#calendar_wrap {
    background: <?php $beautiful_footer->same_color() ?> !important;
}
#calendar_wrap caption {
    background: none;
}
#calendar_wrap thead {
    background: none;
}
#calendar_wrap tbody tr:nth-child(1) {
    background: none;
}
#calendar_wrap tbody tr:nth-child(2) {
    background: none;
}
#calendar_wrap tbody tr:nth-child(3) {
    background: none;
}
#calendar_wrap tbody tr:nth-child(4) {
    background: none;
}
#calendar_wrap tbody tr:nth-child(5) {
    background: none;
}
#calendar_wrap tbody tr:nth-child(6) {
    background: none;
}
#calendar_wrap tfoot {
    background: none;
}
<?php elseif( esc_attr (get_theme_mod("beautiful_footer_style") ) == "spectrum" ) : ?>
.widget ul li:nth-child(12n), .tagcloud a:nth-child(12n) {
    background: <?php $beautiful_footer->spectrum(1) ?> !important;
}
.widget ul li:nth-child(12n+1), .tagcloud a:nth-child(12n+1) {
    background: <?php $beautiful_footer->spectrum(2) ?> !important;
}
.widget ul li:nth-child(12n+2), .tagcloud a:nth-child(12n+2) {
    background: <?php $beautiful_footer->spectrum(3) ?> !important;
}
.widget ul li:nth-child(12n+3), .tagcloud a:nth-child(12n+3) {
    background: <?php $beautiful_footer->spectrum(4) ?> !important;
}
.widget ul li:nth-child(12n+4), .tagcloud a:nth-child(12n+4) {
    background: <?php $beautiful_footer->spectrum(5) ?> !important;
}
.widget ul li:nth-child(12n+5), .tagcloud a:nth-child(12n+5) {
    background: <?php $beautiful_footer->spectrum(6) ?> !important;
}
.widget ul li:nth-child(12n+6), .tagcloud a:nth-child(12n+6) {
    background: <?php $beautiful_footer->spectrum(7) ?> !important;
}
.widget ul li:nth-child(12n+7), .tagcloud a:nth-child(12n+7) {
    background: <?php $beautiful_footer->spectrum(8) ?> !important;
}
.widget ul li:nth-child(12n+8), .tagcloud a:nth-child(12n+8) {
    background: <?php $beautiful_footer->spectrum(9) ?> !important;
}
.widget ul li:nth-child(12n+9), .tagcloud a:nth-child(12n+9) {
    background: <?php $beautiful_footer->spectrum(10) ?> !important;
}
.widget ul li:nth-child(12n+10), .tagcloud a:nth-child(12n+10) {
    background: <?php $beautiful_footer->spectrum(11) ?> !important;
}
.widget ul li:nth-child(12n+11), .tagcloud a:nth-child(12n+11) {
    background: <?php $beautiful_footer->spectrum(12) ?> !important;
}
#calendar_wrap caption {
    background: <?php $beautiful_footer->spectrum(1) ?> !important;
}
#calendar_wrap thead {
    background: <?php $beautiful_footer->spectrum(2) ?> !important;
}
#calendar_wrap tbody tr:nth-child(1) {
    background: <?php $beautiful_footer->spectrum(3) ?> !important;
}
#calendar_wrap tbody tr:nth-child(2) {
    background: <?php $beautiful_footer->spectrum(4) ?> !important;
}
#calendar_wrap tbody tr:nth-child(3) {
    background: <?php $beautiful_footer->spectrum(5) ?> !important;
}
#calendar_wrap tbody tr:nth-child(4) {
    background: <?php $beautiful_footer->spectrum(6) ?> !important;
}
#calendar_wrap tbody tr:nth-child(5) {
    background: <?php $beautiful_footer->spectrum(7) ?> !important;
}
#calendar_wrap tbody tr:nth-child(6) {
    background: <?php $beautiful_footer->spectrum(8) ?> !important;
}
#calendar_wrap tfoot {
    background: <?php $beautiful_footer->spectrum(9) ?> !important;
}
<?php else : ?>

.widget ul li:nth-child(12n), .tagcloud a:nth-child(12n) {
    background: <?php $beautiful_footer->random() ?> !important;
}
.widget ul li:nth-child(12n+1), .tagcloud a:nth-child(12n+1) {
    background: <?php $beautiful_footer->random() ?> !important;
}
.widget ul li:nth-child(12n+2), .tagcloud a:nth-child(12n+2) {
    background: <?php $beautiful_footer->random() ?> !important;
}
.widget ul li:nth-child(12n+3), .tagcloud a:nth-child(12n+3) {
    background: <?php $beautiful_footer->random() ?> !important;
}
.widget ul li:nth-child(12n+4), .tagcloud a:nth-child(12n+4) {
    background: <?php $beautiful_footer->random() ?> !important;
}
.widget ul li:nth-child(12n+5), .tagcloud a:nth-child(12n+5) {
    background: <?php $beautiful_footer->random() ?> !important;
}
.widget ul li:nth-child(12n+6), .tagcloud a:nth-child(12n+6) {
    background: <?php $beautiful_footer->random() ?> !important;
}
.widget ul li:nth-child(12n+7), .tagcloud a:nth-child(12n+7) {
    background: <?php $beautiful_footer->random() ?> !important;
}
.widget ul li:nth-child(12n+8), .tagcloud a:nth-child(12n+8) {
    background: <?php $beautiful_footer->random() ?> !important;
}
.widget ul li:nth-child(12n+9), .tagcloud a:nth-child(12n+9) {
    background: <?php $beautiful_footer->random() ?> !important;
}
.widget ul li:nth-child(12n+10), .tagcloud a:nth-child(12n+10) {
    background: <?php $beautiful_footer->random() ?> !important;
}
.widget ul li:nth-child(12n+11), .tagcloud a:nth-child(12n+11) {
    background: <?php $beautiful_footer->random() ?> !important;
}
#calendar_wrap caption {
    background: <?php $beautiful_footer->random() ?> !important;
}
#calendar_wrap {
    background: <?php $beautiful_footer->random() ?> !important;
}
#calendar_wrap tbody tr:nth-child(1) {
    background: <?php $beautiful_footer->random() ?> !important;
}
#calendar_wrap tbody tr:nth-child(2) {
    background: <?php $beautiful_footer->random() ?> !important;
}
#calendar_wrap tbody tr:nth-child(3) {
    background: <?php $beautiful_footer->random() ?> !important;
}
#calendar_wrap tbody tr:nth-child(4) {
    background: <?php $beautiful_footer->random() ?> !important;
}
#calendar_wrap tbody tr:nth-child(5) {
    background: <?php $beautiful_footer->random() ?> !important;
}
#calendar_wrap tbody tr:nth-child(6) {
    background: <?php $beautiful_footer->random() ?> !important;
}
#calendar_wrap tfoot {
    background: <?php $beautiful_footer->random() ?> !important;
}
<?php endif; ?>

.sidebar-menu a, .widget a ,.widget_calendar tbody a {
    color: <?php echo esc_attr (get_theme_mod("beautiful_widget_link_color") ) ?>;
}

.widget a:hover, a.rsswidget:hover,
.widget_calendar #prev a:hover,
.widget_calendar #next a:hover {
    color: <?php echo esc_attr (get_theme_mod("beautiful_widget_link_color_hover") ) ?>;
}

.widget_calendar tbody a:hover {
    background-color: <?php echo esc_attr (get_theme_mod("beautiful_widget_link_color_hover") ) ?>;
}

.widget input,
.widget textarea {
    background-color: #FFF;
    border: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_post_main_color") ) ?>;
    color: <?php echo esc_attr (get_theme_mod("beautiful_post_font_color") ) ?>;
}

.widget input:focus,
.widget textarea:focus {
    border-top: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_widget_background") ) ?>;
    border-bottom: 1px solid <?php echo esc_attr (get_theme_mod("beautiful_widget_background") ) ?>;
}

.widget-title,
.widget-title a {
    color: <?php echo esc_attr (get_theme_mod("beautiful_widget_header_color") ) ?>;
}

footer.footer
{
    color: <?php echo esc_attr (get_theme_mod("beautiful_widget_main_color") ) ?>;
    background: <?php echo esc_attr (get_theme_mod("beautiful_widget_background") ) ?>;
}


</style>
<?php
} // end beautiful_customizer_css
add_action( 'wp_head', 'beautiful_customizer_css');