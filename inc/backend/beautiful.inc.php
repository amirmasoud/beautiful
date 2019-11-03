<?php
/**
 * Core class, include some functionallity use frequently
 * @author AmirMasoud Sheidayi <amirmasood32@ymail.com>
 *
 * @package WordPress
 * @subpackage Beautiful
 * @since Beautiful 1.0
 */

if( !class_exists("beautiful_core") ) :

/**
* core functions
*/
class beautiful_core
{
	
	/**
	 * convert rgb color to rgba
	 * @param  red $r
	 * @param  green $g
	 * @param  blue $b
	 * @param  alpha $a
	 * @return rgba color
	 */
    protected final function rgb2rgba($r, $g, $b, $a) {
        $rgba = "rgba(" . $r . " ," . $g . " ," . $b . " ," . $a . ")";
        return $rgba;
    }

    /**
     * convert hex color to rgba
     * @param  hex color  $hex
     * @param  alpha value  $alpha
     * @return rgba color
     */
    protected final function hex2rgba($hex, $alpha) {

    	// is first char a #
		$hex = str_replace("#", "", $hex);
		$rgba = "";

		if(strlen($hex) == 3) { // three letters code
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
			$rgba = "rgba(" . $r . " ," . $g . " ," . $b . " ," . $alpha . ")";
		} else { // six letters code
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
			$rgba = "rgba(" . $r . " ," . $g . " ," . $b . " ," . $alpha . ")";
		}

		return $rgba; 

        
    }

    /**
     * generate next color for spectrum
     * @param  hex $hex
     * @param  number $diff
     * @return rgba
     */
    private function next_color($hex, $diff, $alpha) {
        // reomve # from color string
		$hex = str_replace("#", "", $hex);

        // initial r, g, b values. (red, green, blue)
		$r = $g = $b = 0;


        // three letters hex color like #FFF
		if(strlen($hex) == 3) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		}

        // six letters hex color like #FFFFFF
        else { 
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
		}

        // add difference level to red/green/blue
		$r += $diff;
		$g += $diff;
		$b += $diff;

        // control value, max acceptable value is 255
        while($r > 255) $r -= $diff;
        while($g > 255) $g -= $diff;
        while($r > 255) $r -= $diff;

        // control value, min acceptable value is 0
        while($r < 0) $r += $diff;
        while($g < 0) $g += $diff;
        while($r < 0) $r += $diff;

        // mix red/green/blue/alpha values to make rgba color
		$rgba = "rgba(" . $r . " ," . $g . " ," . $b . " ," . $alpha . ")";

        return $rgba;
    }

    /**
     * make spectrum colors
     * @param  item num $number
     * @param  base color $color
     * @return next color
     */
    protected final function spectrum_colors($number, $color, $diff) {

    	// for first item we used defined color for rest of them generate new one
        if($number != 1)
            $color = $this->next_color($color, $number * $diff, 0.9);
        else
            $color = $this->hex2rgba($color, 0.9);
        return $color;

    }

    /**
     * make new rgba color with alpha 0.9
     * @return rgba color
     */
    protected final function random_color() {
		return $this->rgb2rgba(rand(0, 255), rand(0, 255), rand(0, 255), 0.9);
    }
}// class beautiful_core

endif;// if( !class_exists("beautiful_core") )