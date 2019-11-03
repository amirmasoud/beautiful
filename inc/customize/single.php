<?php

function beautiful_single_setting( $wp_customize ) {


    $wp_customize->add_section( 'beautiful_single' , array(
        'title'      => __( 'Single Post', 'beautiful' ),
        'priority'   => 20,
    ) );

     /**
     * single post font color
     */
    $wp_customize->add_setting( 'beautiful_single_content_color' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#333'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_single_content_color',array(
                'label'          => __( 'Font Color', 'beautiful' ),
                'section'        => 'beautiful_single',
                'settings'       => 'beautiful_single_content_color',
                'priority'       => 10
            )
        )
    );


     /**
     * single post font color
     */
    $wp_customize->add_setting( 'beautiful_single_content_header_color' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#333'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_single_content_header_color',array(
                'label'          => __( 'Header Color', 'beautiful' ),
                'section'        => 'beautiful_single',
                'settings'       => 'beautiful_single_content_header_color',
                'priority'       => 15
            )
        )
    );


     /**
     * single post background
     */
    $wp_customize->add_setting( 'beautiful_single_content_background' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#FFF'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_single_content_background',array(
                'label'          => __( 'Background', 'beautiful' ),
                'section'        => 'beautiful_single',
                'settings'       => 'beautiful_single_content_background',
                'priority'       => 20
            )
        )
    );


    /**
     *
     *  Single Post borders color
     * 
     */
    $wp_customize->add_setting( 'beautiful_post_main_color' , array(
        'sanitize_callback' == 'esc_url_raw',
        'default' => '#DDD'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'beautiful_post_main_color',array(
                'label'          => __( 'Border Color', 'beautiful' ),
                'section'        => 'beautiful_single',
                'settings'       => 'beautiful_post_main_color',
                'priority'       => 30
            )
        )
    );

}
add_action( 'customize_register', 'beautiful_single_setting' );