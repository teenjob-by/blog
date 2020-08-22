<?php
defined('ABSPATH') || exit;

if (! class_exists('Coblog_Base')) {
    class Coblog_Base{

        public function __construct(){
            add_action( 'customize_register', array($this, 'customizer_generator') );
        }

        public function field_sanitize_html($html){
            return wp_filter_post_kses( $html );
        }

        public function customizer_generator( $wp_customize ){

            require_once get_parent_theme_file_path( '/inc/customizer/fields/Rgba.php');
            require_once get_parent_theme_file_path( '/inc/customizer/fields/Separator.php');
            require_once get_parent_theme_file_path( '/inc/customizer/fields/Switch.php');
            require_once get_parent_theme_file_path( '/inc/customizer/fields/Layout.php');
            require_once get_parent_theme_file_path( '/inc/customizer/fields/Typography.php');
            require_once get_parent_theme_file_path( '/inc/customizer/fields/Select.php');

            $prams = apply_filters( 'coblog_customizer', array() );

            if( is_array( $prams ) ){
                foreach ( $prams as $panel ) {
                    // Panel
                    $wp_customize->add_panel( $panel['key'], array(
                        'title'    => $panel['title'],
                        'priority' => isset($panel['priority']) ? $panel['priority'] : 10,
                    ) );
                    foreach ( $panel['options'] as $section ) {
                        // Section
                        $wp_customize->add_section( $section['key'], array(
                            'title'   => $section['title'],
                            'panel'   => $panel['key'],
                        ));
                        foreach ( $section['options'] as $fields ) { 
                            switch ($fields['type']) {

                                case 'text':
                                    $wp_customize->add_setting( $fields['key'], array(
                                        'default'   => isset( $fields['default'] ) ? $fields['default'] : '',
                                        'sanitize_callback'    => array($this, 'field_sanitize_html')
                                    ));
                                    $wp_customize->add_control( $fields['key'], array(
                                        'type'      => 'text',
                                        'section'   => $section['key'],
                                        'label'     => $fields['title'],
                                    ));
                                    break;
            
                                case 'textarea':
                                    $wp_customize->add_setting( $fields['key'], array(
                                        'default'   => isset( $fields['default'] ) ? $fields['default'] : '',
                                        'sanitize_callback'    => array($this, 'field_sanitize_html')
                                    ));
                                    $wp_customize->add_control( $fields['key'], array(
                                        'type'      => 'textarea',
                                        'section'   => $section['key'],
                                        'label'     => $fields['title'],
                                    ));
                                    break;
            
                                case 'email':
                                    $wp_customize->add_setting( $fields['key'], array(
                                        'default'   => isset( $fields['default'] ) ? $fields['default'] : '',
                                        'sanitize_callback'    => array($this, 'field_sanitize_html')
                                    ));
                                    $wp_customize->add_control( $fields['key'], array(
                                        'type'      => 'email',
                                        'label'     => $fields['title'],
                                        'section'   => $section['key'],
                                    ));
                                    break;
            
                                case 'select':
                                    $wp_customize->add_setting( $fields['key'], array(
                                        'default' => isset( $fields['default'] ) ? $fields['default'] : '',
                                        'sanitize_callback'    => array($this, 'field_sanitize_html')
                                    ));
                                    $wp_customize->add_control( new Coblog_Select_Control( $wp_customize, $fields['key'], array(
                                        'label'     => $fields['title'],
                                        'section'   => $section['key'],
                                        'options'   => $fields['options'],
                                        'depends'   => isset($fields['depends']) ? $fields['depends'] : '',
                                    )));
                                    break;
            
                                case 'color':
                                    $wp_customize->add_setting( $fields['key'], array(
                                        'default' => isset( $fields['default'] ) ? $fields['default'] : '',
                                        'sanitize_callback'    => array($this, 'field_sanitize_html')
                                    ));
                                    $wp_customize->add_control( $fields['key'], array(
                                        'type'      => 'color',
                                        'section'   => $section['key'],
                                        'label'     => $fields['title'],
                                    ));
                                    break;
            
                                case 'separator':
                                    $wp_customize->add_setting( $fields['key'], array(
                                        'sanitize_callback'    => array($this, 'field_sanitize_html')
                                    ) );
                                    $wp_customize->add_control( new Coblog_Separator_Control( $wp_customize, $fields['key'], array(
                                        'label'     => $fields['title'],
                                        'section'   => $section['key'],
                                    )));
                                    break;
            
                                case 'number':
                                    $wp_customize->add_setting( $fields['key'], array(
                                        'default'   => isset( $fields['default'] ) ? $fields['default'] : '',
                                        'sanitize_callback'    => array($this, 'field_sanitize_html')
                                    ));
                                    $wp_customize->add_control( $fields['key'], array(
                                        'type'      => 'number',
                                        'label'     => $fields['title'],
                                        'section'   => $section['key'],
                                    ));
                                    break;
            
                                case 'date':
                                    $wp_customize->add_setting( $fields['key'], array(
                                        'default' => isset( $fields['default'] ) ? $fields['default'] : '',
                                        'sanitize_callback'    => array($this, 'field_sanitize_html')
                                    ));
                                    $wp_customize->add_control( $fields['key'], array(
                                        'type'    => 'date',
                                        'label'   => $fields['title'],
                                        'section' => $section['key'],
                                    ));
                                    break;
            
                                case 'switch':
                                    $wp_customize->add_setting( $fields['key'], array(
                                        'default' => isset( $fields['default'] ) ? $fields['default'] : '',
                                        'sanitize_callback'    => array($this, 'field_sanitize_html')
                                    ));
                                    $wp_customize->add_control( new Coblog_Switch_Control( $wp_customize, $fields['key'], array(
                                        'label'   => $fields['title'],
                                        'section' => $section['key'],
                                        'settings' => $fields['key'],
                                        'depends' => isset($fields['depends']) ? $fields['depends'] : '',
                                    )));
                                    break;
            
                                case 'media':
                                    $wp_customize->add_setting( $fields['key'], array(
                                        'default' => isset( $fields['default'] ) ? $fields['default'] : '',
                                        'sanitize_callback'    => array($this, 'field_sanitize_html')
                                    ));
                                    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $fields['key'], array(
                                        'label'   => $fields['title'],
                                        'section' => $section['key'],
                                    )));
                                    break;
                                
                                case 'rgba':
                                    $wp_customize->add_setting( $fields['key'], array(
                                        'default' => isset( $fields['default'] ) ? $fields['default'] : '',
                                        'sanitize_callback'    => array($this, 'field_sanitize_html')
                                    ));
                                    $wp_customize->add_control( new Coblog_Rgba_Control( $wp_customize, $fields['key'], array(
                                        'label'         => $fields['title'],
                                        'section'       => $section['key'],
                                        'show_opacity'  => true,
                                    )));
                                    break;
            
                                case 'layout':
                                    $wp_customize->add_setting( $fields['key'], array(
                                        'default' => isset( $fields['default'] ) ? $fields['default'] : '',
                                        'sanitize_callback'    => array($this, 'field_sanitize_html')
                                    ));
                                    $wp_customize->add_control( new Coblog_Layout_Control( $wp_customize, $fields['key'], array(
                                        'label'     => $fields['title'],
                                        'key'       => $fields['key'],
                                        'section'   => $section['key'],
                                        'options'   => $fields['options'],
                                        'depends'   => isset($fields['depends']) ? $fields['depends'] : '',
                                    )));
                                    break;

                                case 'typography':
                                    $wp_customize->add_setting( $fields['key'], array(
                                        'default' => isset( $fields['default'] ) ? $fields['default'] : '',
                                        'sanitize_callback'    => array($this, 'field_sanitize_html')
                                    ));
                                    $wp_customize->add_control( new Coblog_Typography_Control( $wp_customize, $fields['key'], array(
                                        'label'         => $fields['title'],
                                        'section'       => $section['key'],
                                    )));
                                    break;

                                default:
                                    # code...
                                    break;
                            }
                        }
                    }
                }
            }
        }
    }
    new Coblog_Base();
}

