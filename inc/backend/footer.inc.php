<?php

/**
 * Helper class for footer section
 * @author AmirMasoud Sheidayi <amirmasood32@ymail.com>
 *
 * @package WordPress
 * @subpackage Beautiful
 * @since Beautiful 1.0
 */

if( !class_exists("beautiful_footer") ) :

    class beautiful_footer extends beautiful_core
    {

        /**
         * make spectrum colors based on the base color and difference level
         * @param  box/list number $number number of the box or list that gets color
         * @return color
         */
        public function spectrum($number) {

            // get base color and difference level
            $color  = esc_attr( get_theme_mod("beautiful_same_color_footer") );
            $diff   = esc_attr( get_theme_mod("beautiful_spectrum_diff_footer") );

            // refer to methode in beautiful_core
            echo $this->spectrum_colors($number, $color, $diff);
        }

        /**
         * make a random color on every page call
         * not recommended
         * @return color
         */
        public function random() {
            // refer to methode in beautiful_core
            echo $this->random_color();
        }

        /**
         * make all boxes/lists same color
         * @return color
         */
        public function same_color() {
            // get color
            $color = esc_attr( get_theme_mod("beautiful_same_color_footer") );

            // make it transparent 0.9
            $color = $this->hex2rgba($color, 0.9);

            // print it
            echo $color;
        }

        /**
         * custom color for each item in footer
         * @param  list item $number
         * @return color
         */
    	public function widget($number) {
            // get color of a specefic list item
    		$color = esc_attr( get_theme_mod("beautiful_list_" . $number) );

            // make it transparent 0.9
    		$color = $this->hex2rgba($color, 0.9);

            // print it
    		echo $color;
    	}

    }// class beautiful_footer extends beautiful_core

endif;// if( !class_exists("beautiful_footer") ) :