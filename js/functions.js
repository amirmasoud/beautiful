jQuery(document).ready(function($){

	/**
	 * close search form
	 * @return {null}
	 */
	var closeSearch = function()
	{
		$('.search-container').animate({top:"-200px"}, 300);
		$('.search-container').removeClass("animated bounceInDown")
	}

	/**
	 * open search form
	 * @return {null} 
	 */
	var openSearch = function()
	{
		$('.search-container').animate({top:"0"}, 10);
		$('.search-container').addClass("animated bounceInDown");
		$('.search-input').focus();
	}

	/**
	 * close menu
	 * @return {null}
	 */
	var closeMenu = function()
	{

		$("aside.sidebar").animate({right: "-400px"});
		$(".close-menu").animate({top: "-120px"}, 300);
		$(".open-menu").animate({top: 0}, 300);
		//$(".main-wrapper").animate({right: 0});
	}

	/**
	 * open menu
	 * @return {null}
	 */
	var openMenu = function()
	{
		$("aside.sidebar").animate({right: "0px"});
		$(".open-menu").animate({top: "-120px"}, 300);
		$(".close-menu").animate({top: 0}, 300);
		//$(".main-wrapper").animate({right: "400px"}, 300);
	}

	// make space, half space
	var zwnj = function(element)
	{
		var str = $(element).html();
		str = str.replace(" ", "&zwnj;");
		$(element).html(str);
	}

	// replace space with half space in logo
	zwnj(".logo");

	// default form/button
	$("input, textarea, select").addClass("form-control");
	$("#searchform input").removeClass("form-control");
	$("button").addClass("btn btn-default");
	
	// comment section
	$("footer.comment-meta").addClass("row");
	$(".comment-author, .comment-metadata").addClass("col-md-6");
	$(".comment-form-comment, .parent").addClass("col-md-12 col-xs-12");
	$("#submit").addClass("animate");
	$(".comment-metadata").append('<i class="fa fa-clock-o"></i> ');
	$(".reply a").prepend('<i class="fa fa-reply"></i> ');
	$(".comment-author-admin .comment-author").append(' <i class="fa fa-star"></i>');
	$("#cancel-comment-reply-link").html('<i class="fa fa-times"></i>');

	// search form
	$('.search-close').click(function(){
		closeSearch();
	});
	$('.search-icon').click(function(){
		closeMenu();
		openSearch();
	});

	// main sidebar
	$(".open-menu").click(function(){
		$( window ).scroll(function() {
			closeMenu();
		});
		closeSearch()
		openMenu();
	});
	$(".close-menu").click(function(){
		closeMenu();
	});

	// calcute font size for post title in front page based on width and heigh of the box
	$(".box-caption h1").fitText(2, { minFontSize: '20px', maxFontSize: '50px' })

	// color boxes of front page
	$('.content-area .blog-post:nth-child(1n) .box-caption').css({"background":"rgba(129, 162, 87, 0.9)"});
	$('.content-area .blog-post:nth-child(2n) .box-caption').css({"background":"rgba(64, 162, 175, 0.9)"});
	$('.content-area .blog-post:nth-child(3n) .box-caption').css({"background":"rgba(64, 122, 175, 0.9)"});
	$('.content-area .blog-post:nth-child(4n) .box-caption').css({"background":"rgba(108, 58, 196, 0.9)"});
	$('.content-area .blog-post:nth-child(5n) .box-caption').css({"background":"rgba(157, 64, 175, 0.9)"});
	$('.content-area .blog-post:nth-child(6n) .box-caption').css({"background":"rgba(175, 64, 100, 0.9)"});
	$('.content-area .blog-post:nth-child(7n) .box-caption').css({"background":"rgba(162, 175, 64, 0.9)"});
	$('.content-area .blog-post:nth-child(8n) .box-caption').css({"background":"rgba(192, 117, 57, 0.9)"});
	$('.content-area .blog-post:nth-child(9n) .box-caption').css({"background":"rgba(112, 112, 112, 0.9)"});
	$('.content-area .blog-post:nth-child(10n) .box-caption').css({"background":"rgba(32, 109, 106, 0.9)"});
	$('.content-area .blog-post:nth-child(11n) .box-caption').css({"background":"rgba(68, 175, 64, 0.9)"});
	$('.content-area .blog-post:nth-child(12n) .box-caption').css({"background":"rgba(112, 117, 173, 0.9)"});

	// colorful lists for sidebars
	$('.widget ul li:nth-child(1n), .tagcloud a:nth-child(1n)').css({"background":"rgba(129, 162, 87, 0.9)"});
	$('.widget ul li:nth-child(2n), .tagcloud a:nth-child(2n)').css({"background":"rgba(64, 162, 175, 0.9)"});
	$('.widget ul li:nth-child(3n), .tagcloud a:nth-child(3n)').css({"background":"rgba(64, 122, 175, 0.9)"});
	$('.widget ul li:nth-child(4n), .tagcloud a:nth-child(4n)').css({"background":"rgba(108, 58, 196, 0.9)"});
	$('.widget ul li:nth-child(5n), .tagcloud a:nth-child(5n)').css({"background":"rgba(157, 64, 175, 0.9)"});
	$('.widget ul li:nth-child(6n), .tagcloud a:nth-child(6n)').css({"background":"rgba(175, 64, 100, 0.9)"});
	$('.widget ul li:nth-child(7n), .tagcloud a:nth-child(7n)').css({"background":"rgba(162, 175, 64, 0.9)"});
	$('.widget ul li:nth-child(8n), .tagcloud a:nth-child(8n)').css({"background":"rgba(192, 117, 57, 0.9)"});
	$('.widget ul li:nth-child(9n), .tagcloud a:nth-child(9n)').css({"background":"rgba(112, 112, 112, 0.9)"});
	$('.widget ul li:nth-child(10n), .tagcloud a:nth-child(10n)').css({"background":"rgba(32, 109, 106, 0.9)"});
	$('.widget ul li:nth-child(11n), .tagcloud a:nth-child(11n)').css({"background":"rgba(68, 175, 64, 0.9)"});
	$('.widget ul li:nth-child(12n), .tagcloud a:nth-child(12n)').css({"background":"rgba(112, 117, 173, 0.9)"});

	// we use our width and height in style sheet
	// so we don't need inline style
	$(".blog-thumbnail img").removeAttr("width");
	$(".blog-thumbnail img").removeAttr("height");

	$('aside.sidebar').perfectScrollbar();
});