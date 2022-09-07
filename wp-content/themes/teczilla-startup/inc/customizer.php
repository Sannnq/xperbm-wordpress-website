<?php
function teczilla_startup_sections_settings( $wp_customize ) {
    $wp_customize->remove_setting( 'teczilla_menubar_bg_color' );
     $wp_customize->remove_setting( 'teczilla_menu_item_color' );
      $wp_customize->remove_setting( 'teczilla_menu_item_hover_color' );
       $wp_customize->remove_setting( 'teczilla_menu_link_bg_color' );
       $wp_customize->remove_setting( 'teczilla_submnubg_scheme' );
        $wp_customize->remove_setting( 'teczilla_submnu_link' );
        $wp_customize->remove_control('blogdescription');
        
        $wp_customize->add_setting('teczilla_theme_color_scheme',array(
        'default' => esc_html__('#007cfb','teczilla-startup'),
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'teczilla_theme_color_scheme',array(
            'label' => esc_html__('Theme Color','teczilla-startup'),           
            'description' => esc_html__('Change Theme Color','teczilla-startup'),
            'section' => 'colors',
            'settings' => 'teczilla_theme_color_scheme'
        ))
    ); 

$wp_customize->add_setting( 'teczilla_footer_widgets_column',
            array(
                'capability'        => 'edit_theme_options',
                'default'           => 'mt-column-4',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );

        $wp_customize->add_control( 'teczilla_footer_widgets_column',
                array(
                    'label'         => esc_html__( 'Footer Widget Column', 'teczilla-startup' ),
                    'section'       => 'teczilla_footer_settings',
                    'type'           => 'select',
                    'settings'      => 'teczilla_footer_widgets_column',
                    'priority'      => 10,
                    'choices'     => array(
                        'mt-column-1'  => esc_html__( 'Col 1', 'teczilla-startup' ),
                        'mt-column-2'  => esc_html__( 'Col 2', 'teczilla-startup' ),
                        'mt-column-3'  => esc_html__( 'Col 3', 'teczilla-startup' ),
                        'mt-column-4'  => esc_html__( 'Col 4', 'teczilla-startup' ),
                    ),
                )
           
        );


}
add_action( 'customize_register', 'teczilla_startup_sections_settings', 30);