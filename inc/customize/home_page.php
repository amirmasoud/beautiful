<?php
/**
 *
 * controlers of Home Page section in customize panel
 * 
 * @author AmirMasoud Sheidayi <amirmasood32@ymail.com>
 * @since Beautiful 1.0
 * 
 */

/**
 * controlers of Home Page section in customize panel
 */
function beautiful_home_page_setting( $wp_customize ) {

	/**
	 *
	 *	Add Home Page Section in customize Page
	 * 
	 */
    $wp_customize->add_section( 'beautiful_home_page' , array(
        'title'      => __( 'Home Page', 'beautiful' ),
        'priority'   => 11,
    ) );

    /**
     *
     *  Styles for Home Page
     * 
     */
    $wp_customize->add_setting( 'beautiful_homepage_style' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'custom'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'beautiful_homepage_style',array(
                'label'          => __( 'style', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_homepage_style',
                'type'           => 'select',
                'priority'       => 5,
                'choices'        => array(
                    'custom'        => __( 'Custom', 'beautiful' ),
                    'same_color'    => __( 'Same Color', 'beautiful' ),
                    'spectrum'      => __( 'spectrum', 'beautiful' ),
                    'random'        => __( 'random', 'beautiful' )
                )
            )
        )
    );


    /**
     *
     *  background color of box #1
     * 
     */
    $wp_customize->add_setting( 'beautiful_box_1' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(129, 162, 87, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_box_1',array(
                'label'          => __( 'box 1', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_box_1',
                'priority'       => 10
            )
        )
    );


    /**
     *
     *  background color of box #2
     * 
     */
    $wp_customize->add_setting( 'beautiful_box_2' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(64, 162, 175, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_box_2',array(
                'label'          => __( 'box 2', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_box_2',
                'priority'       => 11
            )
        )
    );


    /**
     *
     *  background color of box #3
     * 
     */
    $wp_customize->add_setting( 'beautiful_box_3' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(64, 122, 175, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_box_3',array(
                'label'          => __( 'box 3', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_box_3',
                'priority'       => 12
            )
        )
    );


    /**
     *
     *  background color of box #4
     * 
     */
    $wp_customize->add_setting( 'beautiful_box_4' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(108, 58, 196, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_box_4',array(
                'label'          => __( 'box 4', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_box_4',
                'priority'       => 13
            )
        )
    );


    /**
     *
     *  background color of box #5
     * 
     */
    $wp_customize->add_setting( 'beautiful_box_5' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(157, 64, 175, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_box_5',array(
                'label'          => __( 'box 5', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_box_5',
                'priority'       => 14
            )
        )
    );


    /**
     *
     *  background color of box #6
     * 
     */
    $wp_customize->add_setting( 'beautiful_box_6' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(175, 64, 100, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_box_6',array(
                'label'          => __( 'box 6', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_box_6',
                'priority'       => 15
            )
        )
    );


    /**
     *
     *  background color of box #7
     * 
     */
    $wp_customize->add_setting( 'beautiful_box_7' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(162, 175, 64, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_box_7',array(
                'label'          => __( 'box 7', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_box_7',
                'priority'       => 16
            )
        )
    );


    /**
     *
     *  background color of box #8
     * 
     */
    $wp_customize->add_setting( 'beautiful_box_8' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(192, 117, 57, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_box_8',array(
                'label'          => __( 'box 8', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_box_8',
                'priority'       => 17
            )
        )
    );


    /**
     *
     *  background color of box #9
     * 
     */
    $wp_customize->add_setting( 'beautiful_box_9' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(112, 112, 112, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_box_9',array(
                'label'          => __( 'box 9', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_box_9',
                'priority'       => 18
            )
        )
    );


    /**
     *
     *  background color of box #10
     * 
     */
    $wp_customize->add_setting( 'beautiful_box_10' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(32, 109, 106, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_box_10',array(
                'label'          => __( 'box 10', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_box_10',
                'priority'       => 19
            )
        )
    );


    /**
     *
     *  background color of box #11
     * 
     */
    $wp_customize->add_setting( 'beautiful_box_11' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(68, 175, 64, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_box_11',array(
                'label'          => __( 'box 11', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_box_11',
                'priority'       => 20
            )
        )
    );


    /**
     *
     *  background color of box #12
     * 
     */
    $wp_customize->add_setting( 'beautiful_box_12' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(112, 117, 173, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_box_12',array(
                'label'          => __( 'box 12', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_box_12',
                'priority'       => 21
            )
        )
    );



    /**
     *
     *  same background color for all boxes
     * 
     */
    $wp_customize->add_setting( 'beautiful_same_color' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#FFF'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_same_color',array(
                'label'          => __( 'main color', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_same_color',
                'priority'       => 22
            )
        )
    );

    /**
     *
     *  Level of difference in spectrum mode
     * 
     */
    $wp_customize->add_setting( 'beautiful_spectrum_diff' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '2'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'beautiful_spectrum_diff',array(
                'label'          => __( 'Difference Level', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_spectrum_diff',
                'type'           => 'text',
                'priority'       => 23
            )
        )
    );

    /**
     *
     *  font color of boxes
     * 
     */
    $wp_customize->add_setting( 'beautiful_box_font_color' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#FFF'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_box_font_color',array(
                'label'          => __( 'Boxed Font Color', 'beautiful' ),
                'section'        => 'beautiful_home_page',
                'settings'       => 'beautiful_box_font_color',
                'priority'       => 25
            )
        )
    );

}
add_action( 'customize_register', 'beautiful_home_page_setting' );