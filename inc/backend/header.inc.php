<?php 
/**
 * Helper class for header section
 * @author AmirMasoud Sheidayi <amirmasood32@ymail.com>
 *
 * @package WordPress
 * @subpackage Beautiful
 * @since Beautiful 1.0
 */

if( !class_exists("beautiful_header") ) :

	class beautiful_header {
		
		private $beautiful_logo = "text";

		/**
		 * set default values
		 */
		function __construct()
		{
			// get logo state, text or image
			$this->beautiful_logo = esc_attr (get_theme_mod("beautiful_logo") );
		}

		/**
		 * if logo is image, image logo
		 * @return image
		 */
		public function logo_image() {
			if( $this->beautiful_logo == "image" )
				echo "background-image: url('" . esc_attr (get_theme_mod("beautiful_logo_image") ) . "');";
		}

		/**
		 * if logo is image, image logo on the hover
		 * @return image
		 */
		public function logo_image_hover() {
			if( $this->beautiful_logo == "image" )
				echo "background-image: url('" . esc_attr (get_theme_mod("beautiful_logo_image_hover") ) . "');";
		}

		/**
		 * 
		 * @return text site title
		 */
		public function logo_text() {
			if( $this->beautiful_logo == "text" )
				echo bloginfo('name');
		}

		/**
		 * logo animation
		 * @return logo animation
		 */
		public function logo_animation() {
			echo "-webkit-animation-name: " . esc_attr (get_theme_mod("beautiful_logo_animation") ) . ";";
			echo "animation-name: " . esc_attr (get_theme_mod("beautiful_logo_animation") ) . ";";
		}

		/**
		 * if logo is text, this will return color of it on the hover[mousein]
		 * @return logo color on hover
		 */
		public function logo_color_hover() {
			echo "color: " . esc_attr (get_theme_mod("beautiful_logo_color_hover") ) . " !important;";
		}

		/**
		 * if logo is text, this will return color of it
		 * @return logo color
		 */
		public function logo_color() {
			echo "color: " . esc_attr (get_theme_mod("beautiful_logo_color") ) . " !important;";
		}

		/**
		 * bootstrap navar defaults
		 * @return navbar
		 */
		public function navbar() {
			if( esc_attr (get_theme_mod("beautiful_navbar_visibilty") ) == "hide" )
				return;
			/**
			 * Primary navigation with bootstarp
			 */
			?>
			<nav class="navbar navbar-default" id="navigation" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only"><?php _e("Toggle navigation", "beautiful") ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>	
					<?php
						wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             =>  3,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
						);
					?>
				</div><!-- .container -->
			</nav><!-- #navigation -->
			<?php
		}

		/**
		 * customized serach form
		 * @return search form
		 */
		public function search_form() {
			?>
			<header class="row center-block main-wrapper" id="search">

				<div class="col-xs-1 search-close animate text-center">
					<span><i class="fa fa-times"></i></span>
				</div><!-- .col-xs-1 .search-close .animate .text-center -->

				<div class="col-xs-11 search-form">
					<?php get_search_form() ?>
				</div><!-- .col-xs-11 .search-form -->

			</header><!-- .row .center-block .main-wrapper -->
			<?php

		}

	}// class beautiful_header

endif; // class_exists