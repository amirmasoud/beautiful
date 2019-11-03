<?php
/**
 *
 * controlers of header section in customize panel
 * 
 * @author AmirMasoud Sheidayi <amirmasood32@ymail.com>
 * @since Beautiful 1.0 * 
 */


/**
 * controlers of header section in customize panel
 */
function beautiful_header_setting( $wp_customize ) {

	/**
	 *
	 *	Add Header Section in customize Page
	 * 
	 */
    $wp_customize->add_section( 'beautiful_header' , array(
        'title'      => __( 'Header', 'beautiful' ),
        'priority'   => 10,
    ) );

    /**
     *
     *	CSS3 Logo Animation
     *
     *  Thanks to http://daneden.github.io/animate.css/
     * 
     */
    $wp_customize->add_setting( 'beautiful_logo_animation' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'shake'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'beautiful_logo_animation',array(
                'label'          => __( 'logo animation', 'beautiful' ),
                'section'        => 'beautiful_header',
                'settings'       => 'beautiful_logo_animation',
                'type'           => 'select',
                'priority'       => 4,
                'choices'        => array(
                    "flash"                 => "flash",
                    "shake"                 => "shake",
                    "bounce"                => "bounce",
                    "tada"                  => "tada",
                    "swing"                 => "swing",
                    "wobble"                => "wobble",
                    "pulse"                 => "pulse",
                    "flip"                  => "flip",
                    "flipInX"               => "flipInX",
                    "flipOutX"              => "flipOutX",
                    "flipInY"               => "flipInY",
                    "flipOutY"              => "flipOutY",
                    "fadeIn"                => "fadeIn",
                    "fadeInUp"              => "fadeInUp",
                    "fadeInDown"            => "fadeInDown",
                    "fadeInLeft"            => "fadeInLeft",
                    "fadeInRight"           => "fadeInRight",
                    "fadeInUpBig"           => "fadeInUpBig",
                    "fadeInDownBig"         => "fadeInDownBig",
                    "fadeInLeftBig"         => "fadeInLeftBig",
                    "fadeInRightBig"        => "fadeInRightBig",
                    "fadeOut"               => "fadeOut",
                    "fadeOutUp"             => "fadeOutUp",
                    "fadeOutDown"           => "fadeOutDown",
                    "fadeOutLeft"           => "fadeOutLeft",
                    "fadeOutRight"          => "fadeOutRight",
                    "fadeOutUpBig"          => "fadeOutUpBig",
                    "fadeOutDownBig"        => "fadeOutDownBig",
                    "fadeOutLeftBig"        => "fadeOutLeftBig",
                    "fadeOutRightBig"       => "fadeOutRightBig",
                    "bounceIn"              => "bounceIn",
                    "bounceInUp"            => "bounceInUp",
                    "bounceInDown"          => "bounceInDown",
                    "bounceInLeft"          => "bounceInLeft",
                    "bounceInRight"         => "bounceInRight",
                    "bounceOut"             => "bounceOut",
                    "bounceOutUp"           => "bounceOutUp",
                    "bounceOutDown"         => "bounceOutDown",
                    "bounceOutLeft"         => "bounceOutLeft",
                    "bounceOutRight"        => "bounceOutRight",
                    "rotateIn"              => "rotateIn",
                    "rotateInUpLeft"        => "rotateInUpLeft",
                    "rotateInDownLeft"      => "rotateInDownLeft",
                    "rotateInUpRight"       => "rotateInUpRight",
                    "rotateInDownRight"     => "rotateInDownRight",
                    "rotateOut"             => "rotateOut",
                    "rotateOutUpLeft"       => "rotateOutUpLeft",
                    "rotateOutDownLeft"     => "rotateOutDownLeft",
                    "rotateOutUpRight"      => "rotateOutUpRight",
                    "rotateOutDownRight"    => "rotateOutDownRight",
                    "hinge"                 => "hinge"
	)	)	)	);

    /**
     *
     *  Text logo Color
     * 
     */
    $wp_customize->add_setting( 'beautiful_logo_color' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => "#333"
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_logo_color', array(
                'label'      => __( 'logo Color', 'beautiful' ),
                'section'    => 'beautiful_header',
                'settings'   => 'beautiful_logo_color',
                'priority'   => 3
            )  
        )  
    );

    /**
     *
     *	Header Background type: Solid or Image
     * 
     */
    $wp_customize->add_setting( 'beautiful_header_background' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'color'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'beautiful_header_background',array(
                'label'          => __( 'background', 'beautiful' ),
                'section'        => 'beautiful_header',
                'settings'       => 'beautiful_header_background',
                'type'           => 'radio',
                'priority'       => 7,
                'choices'        => array(
                    'image'      => __( 'image', 'beautiful' ),
                    'color'      => __( 'color', 'beautiful' )
                )
            )
        )
    );

    /**
     *
     *	Upload Background Image
     * 
     */
    $wp_customize->add_setting( 'beautiful_header_background_image' , array(
        'sanitize_callback' == 'esc_url_raw',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'beautiful_header_background_image',array(
                'label'          => __( 'background image', 'beautiful' ),
                'section'        => 'beautiful_header',
                'settings'       => 'beautiful_header_background_image',
                'priority'       => 8
            )
        )
    );

    /**
     *
     *	Color Picker for Background
     * 
     */
    $wp_customize->add_setting( 'beautiful_header_background_color' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#FFF'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_header_background_color',array(
                'label'          => __( 'background color', 'beautiful' ),
                'section'        => 'beautiful_header',
                'settings'       => 'beautiful_header_background_color',
                'priority'       => 8
            )
        )
    );

    /**
     *
     *	Font Color of Search Icon/Mobile Menu
     * 
     */
    $wp_customize->add_setting( 'beautiful_header_font_color' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#DDD'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_header_font_color',array(
                'label'          => __( 'icon color', 'beautiful' ),
                'section'        => 'beautiful_header',
                'settings'       => 'beautiful_header_font_color',
                'priority'       => 9
                )
            )
        );

    /**
     *
     *	Bottom Border Color
     * 
     */
    $wp_customize->add_setting( 'beautiful_header_border_color' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#DDD'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_header_border_color',array(
                'label'          => __( 'border bottom color', 'beautiful' ),
                'section'        => 'beautiful_header',
                'settings'       => 'beautiful_header_border_color',
                'priority'       => 11
            )
        )
    );
}
add_action( 'customize_register', 'beautiful_header_setting' );