<?php 

function sanitize_integer($int) {
    $int = (int)$int;
    return $int;
}

function copyright_customizer($wp_customize) {
    $wp_customize->add_section(
        'section_copyright', array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright Section'
        )
        );

        $wp_customize->add_setting(
            'setting_copyright', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
            );

            $wp_customize->add_control(
                'setting_copyright', array(
                   'label' => 'Copyright',
                   'description' => 'Please type your copyright here',
                   'section' => 'section_copyright',
                   'type' => 'text'
                )
                );
}
add_action('customize_register', 'copyright_customizer');


function feature_customizer($wp_customize) {
$wp_customize->add_section(
    'section_feature',
    array(
        'title' => 'Feature Section Setting',
        'description' => 'Homepage Feature Setting'
    )
    );

    $wp_customize->add_setting(
        'setting_show_feature', array(
            'type' => 'theme_mod',
            'default' => 0,
            'sanitize_callback' => 'sanitize_integer'
        )
        );

        $wp_customize->add_control(
            'setting_show_feature', array(
               'label' => 'Display the Feature',
               'description' => 'Toggle feature on/off',
               'section' => 'section_feature',
               'type' => 'checkbox'
            )
            );

            //feature title
            $wp_customize->add_section(
                'section_feature_title',
                array(
                    'title' => 'Feature Section Setting',
                    'description' => 'Homepage Feature Setting'
                )
                );
            
                $wp_customize->add_setting(
                    'setting_feature_title', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'sanitize_text_field'
                    )
                    );
            
                    $wp_customize->add_control(
                        'setting_feature_title', array(
                           'label' => 'Title for the Feature',
                           'description' => 'Enter title for this feature',
                           'section' => 'section_feature',
                           'type' => 'text'
                        )
                        );

                        //feature image
                        
                            $wp_customize->add_setting(
                                'setting_feature_image', array(
                                    'type' => 'theme_mod',
                                    'default' => '',
                                )
                                );
                        
                                $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,
                                    'setting_feature_image', array(
                                       'label' => 'Feature Image',
                                       'description' => 'Choose an image for this feature',
                                       'section' => 'section_feature',
                                       'width' => 400,
                                       'height' => 400,  
                                    )
                                )
                                );
}
add_action('customize_register', 'feature_customizer');






