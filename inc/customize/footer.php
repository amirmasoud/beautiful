<?php
/**
 *
 * controlers of footer section in customize panel
 * 
 * @author AmirMasoud Sheidayi <amirmasood32@ymail.com>
 * @since Beautiful 1.0 * 
 */

/**
 * controler for footer section
 */
function beautiful_footer_setting( $wp_customize ) {


    /**
     *
     *  Add footer Section in customize Page
     * 
     */
    $wp_customize->add_section( 'beautiful_footer' , array(
        'title'      => __( 'Footer & Sidebar', 'beautiful' ),
        'priority'   => 19,
    ) );


    /**
     *
     *  Styles for Footer & Sidebar
     * 
     */
    $wp_customize->add_setting( 'beautiful_footer_style' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'custom'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'beautiful_footer_style',array(
                'label'          => __( 'Footer Style', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_footer_style',
                'type'           => 'select',
                'priority'       => 1,
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
     *  background color for #1 item in list
     * 
     */
    $wp_customize->add_setting( 'beautiful_list_1' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(129, 162, 87, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_list_1',array(
                'label'          => __( 'List Item 1', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_list_1',
                'priority'       => 10
            )
        )
    );


    /**
     *
     *  background color for #1 item in list
     * 
     */
    $wp_customize->add_setting( 'beautiful_list_2' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(64, 162, 175, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_list_2',array(
                'label'          => __( 'List Item 2', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_list_2',
                'priority'       => 11
            )
        )
    );


    /**
     *
     *  background color for #1 item in list
     * 
     */
    $wp_customize->add_setting( 'beautiful_list_3' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(64, 122, 175, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_list_3',array(
                'label'          => __( 'List Item 3', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_list_3',
                'priority'       => 12
            )
        )
    );


    /**
     *
     *  background color for #1 item in list
     * 
     */
    $wp_customize->add_setting( 'beautiful_list_4' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(108, 58, 196, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_list_4',array(
                'label'          => __( 'List Item 4', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_list_4',
                'priority'       => 13
            )
        )
    );


    /**
     *
     *  background color for #1 item in list
     * 
     */
    $wp_customize->add_setting( 'beautiful_list_5' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(157, 64, 175, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_list_5',array(
                'label'          => __( 'List Item 5', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_list_5',
                'priority'       => 14
            )
        )
    );


    /**
     *
     *  background color for #1 item in list
     * 
     */
    $wp_customize->add_setting( 'beautiful_list_6' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(175, 64, 100, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_list_6',array(
                'label'          => __( 'List Item 6', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_list_6',
                'priority'       => 15
            )
        )
    );


    /**
     *
     *  background color for #1 item in list
     * 
     */
    $wp_customize->add_setting( 'beautiful_list_7' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(162, 175, 64, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_list_7',array(
                'label'          => __( 'List Item 7', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_list_7',
                'priority'       => 16
            )
        )
    );


    /**
     *
     *  background color for #1 item in list
     * 
     */
    $wp_customize->add_setting( 'beautiful_list_8' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(192, 117, 57, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_list_8',array(
                'label'          => __( 'List Item 8', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_list_8',
                'priority'       => 17
            )
        )
    );


    /**
     *
     *  background color for #1 item in list
     * 
     */
    $wp_customize->add_setting( 'beautiful_list_9' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(112, 112, 112, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_list_9',array(
                'label'          => __( 'List Item 9', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_list_9',
                'priority'       => 18
            )
        )
    );


    /**
     *
     *  background color for #1 item in list
     * 
     */
    $wp_customize->add_setting( 'beautiful_list_10' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(32, 109, 106, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_list_10',array(
                'label'          => __( 'List Item 10', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_list_10',
                'priority'       => 19
            )
        )
    );



    /**
     *
     *  background color for #1 item in list
     * 
     */
    $wp_customize->add_setting( 'beautiful_list_11' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(68, 175, 64, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_list_11',array(
                'label'          => __( 'List Item 11', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_list_11',
                'priority'       => 20
            )
        )
    );


    /**
     *
     *  background color for #1 item in list
     * 
     */
    $wp_customize->add_setting( 'beautiful_list_12' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(112, 117, 173, 0.9)'
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_list_12',array(
                'label'          => __( 'List Item 12', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_list_12',
                'priority'       => 21
            )
        )
    );


    /**
     *
     *  color of link
     * 
     */
    $wp_customize->add_setting( 'beautiful_widget_link_color' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#FFF'
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_widget_link_color',array(
                'label'          => __( 'Link Color', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_widget_link_color',
                'priority'       => 40
            )
        )
    );


    /**
     *
     *  color of link on hover
     * 
     */
    $wp_customize->add_setting( 'beautiful_widget_link_color_hover' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#333'
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_widget_link_color_hover',array(
                'label'          => __( 'Link Color on Hover', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_widget_link_color_hover',
                'priority'       => 50
            )
        )
    );


    /**
     *
     *  same background color for all items in the list
     * 
     */
    $wp_customize->add_setting( 'beautiful_same_color_footer' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => 'rgba(64, 122, 175, 0.9)'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_same_color_footer',array(
                'label'          => __( 'Main Color', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_same_color_footer',
                'priority'       => 22
            )
        )
    );

    /**
     *
     *  Level of difference in spectrum mode
     * 
     */
    $wp_customize->add_setting( 'beautiful_spectrum_diff_footer' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '2'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'beautiful_spectrum_diff_footer',array(
                'label'          => __( 'Difference Level', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_spectrum_diff_footer',
                'type'           => 'text',
                'priority'       => 23
            )
        )
    );

    /**
     *
     *  background color for footer & sidebar section
     * 
     */
    $wp_customize->add_setting( 'beautiful_widget_background' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#333'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_widget_background',array(
                'label'          => __( 'Background Color', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_widget_background',
                'priority'       => 30
            )
        )
    );

    /**
     *
     *  main color for footer & sidebar section
     * 
     */
    $wp_customize->add_setting( 'beautiful_widget_main_color' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#FFF'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_widget_main_color',array(
                'label'          => __( 'Main Color', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_widget_main_color',
                'priority'       => 31
            )
        )
    );

    /**
     *
     *  header color for footer & sidebar section
     * 
     */
    $wp_customize->add_setting( 'beautiful_widget_header_color' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#FFF'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_widget_header_color',array(
                'label'          => __( 'Header Color', 'beautiful' ),
                'section'        => 'beautiful_footer',
                'settings'       => 'beautiful_widget_header_color',
                'priority'       => 32
            )
        )
    );

}
add_action( 'customize_register', 'beautiful_footer_setting' );
