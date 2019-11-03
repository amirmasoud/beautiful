<?php
/**
 * Helper class for home/index/content section
 * @author AmirMasoud Sheidayi <amirmasood32@ymail.com>
 *
 * @package WordPress
 * @subpackage Beautiful
 * @since Beautiful 1.0
 */


if( !class_exists("beautiful_content") ) :
    /**
    * functions for content area
    */
    class beautiful_content extends beautiful_core {

        /**
         * content start
         */
        public function content_start() {
            echo '<section id="single-post-container" class="row content-area center-block">';
        }

        /**
         * end of the blogroll content
         * @param  query $query
         * @return navigation
         */
        public function content_end($query = "") {
            ?>
            </section>

            <?php $this->blog_navigation($query) ?>

            </section>
            <?php
        }

    	/**
         * generate carousel based on style in customize panel
         * @param  string $thumbnail home-slider-full-width/home-slider-half-width
         * @return bootstrap carousel
         */
        private function carousel($thumbnail) {
            /**
             * there are 2 type of thumbnail
             * 960×960 -> home-slider-half-width
             * 1920×960 -> home-slider-full-width
             * 
             * @var string
             */
            if( $thumbnail == "home-slider-full-width" ) :
            ?>
            <div id="beautiful-carousel" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                <?php
                    // get sticky posts from DB
                    $sticky = get_option('sticky_posts');

                    // check if there are any
                    if (!empty($sticky)) :

                    // optional: sort the newest IDs first
                    rsort($sticky);

                    // args for WP_Query Class
                    $args = array(
                        'post__in' => $sticky
                    );

                    // make query
                    $query = new WP_Query($args);

                    // for bootstrap
                    $data_slide_to = 0;
                    $carousel_indicators = "";

                    while ($query->have_posts()) :

                        //get sticky posts
                        $query->the_post();

                        // first slide is active
                        $beautiful_active = "";
                        if($data_slide_to == 0)
                            $beautiful_active = "active";
                        else
                            $beautiful_active = "";

                        // making carousel indicators
                        $carousel_indicators .= '<li data-target="#beautiful-carousel" class="' . $beautiful_active . '" data-slide-to="' . $data_slide_to . '"></li>';

                        ?>
                        <div class="item <?php echo $beautiful_active ?>">
                            <a class="post-link" rel="<?php the_ID(); ?>" href="<?php echo esc_url( the_permalink() ) ?>">
                                <?php the_post_thumbnail($thumbnail) ?>
                            </a>
                            <div class="carousel-caption">
                            <h3><?php the_title() ?></h3>
                            <p><?php the_excerpt() ?></p>
                            </div><!-- .carousel-caption -->
                        </div><!-- .item -->
                        <?php

                        // ready for next slide
                        $data_slide_to += 1;

                    endwhile;
                endif;

                // reset previous query
                wp_reset_query(); ?>

                </div><!-- .carousel-inner -->

                <ol class="carousel-indicators">
                    <?php 
                    // use carousel indicators we made above
                    echo $carousel_indicators;
                    ?>
                </ol><!-- .carousel-indicators -->

                <a class="left carousel-control" href="#beautiful-carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#beautiful-carousel" role="button" data-slide="next">
                    <i class="glyphicon glyphicon-chevron-right"></i>
                </a>

            </div><!-- #beautiful-carousel -->
        <?php else : ?>
            <div class="float-slider row">
                <div id="beautiful-carousel" class="carousel slide col-md-6 col-xs-12" data-ride="carousel">

                    <div class="carousel-inner">
                    <?php
                        // get sticky posts from DB
                        $sticky = get_option('sticky_posts');

                        // check if there are any
                        if (!empty($sticky)) :

                        // optional: sort the newest IDs first
                        rsort($sticky);

                        // args for WP_Query Class
                        $args = array(
                            'post__in' => $sticky
                        );

                        // make query
                        $query = new WP_Query($args);

                        // for bootstrap
                        $data_slide_to = 0;
                        $carousel_indicators = "";

                        while ($query->have_posts()) :

                            //get sticky posts
                            $query->the_post();

                            // first slide is active
                            $beautiful_active = "";
                            if($data_slide_to == 0)
                                $beautiful_active = "active";
                            else
                                $beautiful_active = "";

                            // making carousel indicators
                            $carousel_indicators .= '<li data-target="#beautiful-carousel" class="' . $beautiful_active . '" data-slide-to="' . $data_slide_to . '"></li>';

                            ?>
                            <div class="item <?php echo $beautiful_active ?>">
                                <a class="post-link" rel="<?php the_ID(); ?>" href="<?php echo esc_url( the_permalink() ) ?>">
                                    <?php the_post_thumbnail($thumbnail) ?>
                                </a>
                                <div class="carousel-caption">
                                <h3><?php the_title() ?></h3>
                                <p><?php the_excerpt() ?></p>
                                </div><!-- .carousel-caption -->
                            </div><!-- .item -->
                            <?php

                            // ready for next slide
                            $data_slide_to += 1;

                        endwhile;
                    endif;

                    // reset previous query
                    wp_reset_query(); ?>

                    </div><!-- .carousel-inner -->

                    <ol class="carousel-indicators">
                        <?php 
                        // use carousel indicators we made above
                        echo $carousel_indicators;
                        ?>
                    </ol><!-- .carousel-indicators -->

                    <a class="left carousel-control" href="#beautiful-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#beautiful-carousel" role="button" data-slide="next">
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </a>
                </div><!-- #beautiful-carousel -->
                <div class="col-md-3 col-xs-6 home-page-widget-1">
                    <?php  if ( is_active_sidebar( 'sidebar-home-page-1' ) ) : ?>
                    <div id="sidebar-home-page-1" class="sidebar-home-page-1" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-home-page-1' ); ?>
                    </div><!-- #sidebar-home-page-1 -->
                    <?php endif;  ?>
                </div>
                <div class="col-md-3 col-xs-6 home-page-widget-2">
                    <?php  if ( is_active_sidebar( 'sidebar-home-page-2' ) ) : ?>
                    <div id="sidebar-home-page-2" class="sidebar-home-page-2" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-home-page-2' ); ?>
                    </div><!-- #sidebar-home-page-2 -->
                    <?php endif;  ?>
                </div>
            </div><!-- .float-slider -->

        <?php endif;

        }


        /**
         * fetch latest blog posts or
         * latest posts from one or more category(s)
         * @return posts boxes
         */
        public function latest_news() {
            // get sticky posts
            $sticky = get_option('sticky_posts');

            $on_the_home_page = ot_get_option("beutiful_on_the_home_page");


            /**
             * latest posts
             */
            if($on_the_home_page == "beautiful_latest_posts") :

                // hide sticky posts
                if( ot_get_option( "sticky_posts" ) == "off" ) :

                    // ready for paginating custom query
                    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

                    // args for wp_query
                    $args = array(
                        // exclude sticky posts
                        'post__not_in' => $sticky,

                        // pagination
                        'paged' => $paged,
                        'posts_per_page' => get_option('posts_per_page')
                    );

                    // get posts that are not sticky
                    $query = new WP_Query( $args );

                    // loop throgh them
                    if ($query->have_posts()) :

                        while ($query->have_posts()) :

                            $query->the_post();

                            // display each post
                            beautiful_blog_post();

                        endwhile;

                    endif;

                    // reset previous query
                    wp_reset_query();

                    $this->content_end($query);

                // show sticky posts
                else :

                    if (have_posts()) :

                        while (have_posts()) :

                            the_post();

                            // display each post
                            beautiful_blog_post();

                        endwhile;

                    endif;

                    $this->content_end();

                endif;

            // show posts from one or more category(s)
            else :

                // ready for paginating custom query
                $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

                // make query var out of the loops
                $query = "";

                // hide sticky posts
                if( ot_get_option( "sticky_posts" ) == "off" ) :

                    // args for wp_query
                    $args = array(
                        // exclude sticky posts
                        'post__not_in' => $sticky,

                        // posts in specefic category(s)
                        'category__in' => ot_get_option("beautiful_categories") ,

                        // pagination
                        'paged' => $paged,
                        'posts_per_page' => get_option('posts_per_page')
                    );

                    // get posts that are not sticky
                    $query = new WP_Query( $args );

                // show sticky posts
                else :

                    // args for wp_query
                    $args = array(
                        // exclude sticky posts
                        'post__in' => $sticky,

                        // posts in specefic category(s)
                        'category__in' => ot_get_option("beautiful_categories") ,

                        // pagination
                        'paged' => $paged,
                        'posts_per_page' => get_option('posts_per_page')
                    );

                    // get posts that are not sticky
                    $query = new WP_Query( $args );

                endif;

                // save query for pagination methode
                $this->query = $query;


                // loop throgh them
                if ($query->have_posts()) :

                    while ($query->have_posts()) :

                        $query->the_post();

                        // display each post
                        beautiful_blog_post();

                    endwhile;

                endif;

                // reset previous query
                wp_reset_query();

                $this->content_end($query);

            endif;
        }

        /**
         * post navigation
         * @return blog navigation
         */
        function blog_navigation($query) {
            // intial
            $get_next_posts_link        = get_next_posts_link();
            $get_previous_posts_link    = get_previous_posts_link();

            // get max number of pages
            $max_num_pages = 12;
            if( !empty ( $query ) ) {
                $max_num_pages = $query->max_num_pages;
            }

            // also changing position of post navigation based on rtl or ltr
            if( !empty( $get_next_posts_link ) || !empty( $get_previous_posts_link ) ) :
                if( !is_rtl() ) :
            ?>
                <div class="row blog-navigation">
                    <div class="col-xs-6 text-center">
                        <?php previous_posts_link('<i class="fa fa-angle-left fa-fw fa-2x"></i> <span>' . __("previous posts", "beautiful") . '</span>', $max_num_pages); ?>
                    </div>

                    <div class="col-xs-6 text-center">
                        <?php next_posts_link('<span>' . __("next posts", "beautiful") . '</span> <i class="fa fa-angle-right fa-fw fa-2x"></i>', $max_num_pages); ?>
                    </div>
                </div>
            <?php
                else :
            ?>
                <div class="row blog-navigation">
                    <div class="col-xs-6 text-center">
                        <?php previous_posts_link('<span>' . __("previous posts", "beautiful") . ' <i class="fa fa-angle-left fa-fw fa-2x"></i></span>', $max_num_pages); ?>
                    </div>

                    <div class="col-xs-6 text-center">
                        <?php next_posts_link('<span><i class="fa fa-angle-right fa-fw fa-2x"></i> ' . __("next posts", "beautiful") . '</span>', $max_num_pages); ?>
                    </div>
                </div>
            <?php
                endif;
            endif;
        }// function beautiful_blog_navigation


        /**
         * make colors of boxes/lists spectrum
         * @param  number $number difference level in spectrum colors
         * @return spectrum colors
         */
        public function spectrum($number) {

            $color = esc_attr( get_theme_mod("beautiful_same_color") );
            $diff = esc_attr( get_theme_mod("beautiful_spectrum_diff") );

            echo $this->spectrum_colors($number, $color, $diff);

        }

        /**
         * make random color for boxes/lists at each call
         * @return color
         */
        public function random() {
            echo $this->random_color();
        }


        /**
         * make all boxes/lists same color
         * @return color
         */
        public function same_color() {
            // get base color
            $color = esc_attr( get_theme_mod("beautiful_same_color") );

            // make it rgba with alpha 0.9
            $color = $this->hex2rgba($color, 0.9);
            echo $color;
        }


        /**
         * return each box box color
         * @param  box number $number
         * @return color
         */
    	public function box($number) {
            // get color
    		$color = esc_attr( get_theme_mod("beautiful_box_" . $number) );

            // make it rgba with alpha 0.9
    		$color = $this->hex2rgba($color, 0.9);
    		echo $color;
    	}


        /**
         * return carousel
         * @return carousel
         */
        public function get_carousel() {
            // full width carousel
            if( esc_attr( get_theme_mod("beautiful_homepage_slider_style")  ) == "full_width"  ):
                echo $this->carousel("home-slider-full-width");
            // half width carousel         
            else:
                echo $this->carousel("home-slider-half-width");
            endif;
        }
        
    } // class beautiful_content extends beautiful_core

endif; // if( !class_exists("beautiful_content") ) :
