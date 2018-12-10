<?php 
$wp_customize->add_section('sub3', array(
  'title' => __('Section 3 ', 'Elsa Mars'),
  'description' => sprintf(__('Options for Section 3'), 'Elsa Mars'),
  'priority' => 130
));

$wp_customize->add_setting(
  'sub3_image',
  array(
    'default' => get_bloginfo('template_directory') . '/img/sub3.jpg',
    'type' => 'theme_mod'
  )
);

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
  'label' => __('Section 3 Image', 'Elsa Mars'),
  'section' => 'sub3',
  'settings' => 'sub3_image',
  'priority' => 1
)));
        // ROW1
$wp_customize->add_setting('row1_type', array(
  'default' => __('Cardio', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('row1_type', array(
  'label' => __('Row 1 Type'),
  'section' => 'sub3',
  'priority' => 3
));
$wp_customize->add_setting('row1_time', array(
  'default' => __('7:00 - 8:00', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('row1_time', array(
  'label' => __('Row 1 Time'),
  'section' => 'sub3',
  'priority' => 3
));

$wp_customize->add_setting('row1_btn', array(
  'default' => _x('Sign Up', 'Elsa Mars'),
  'type' => 'theme_mod',

));
$wp_customize->add_control('row1_btn', array(
  'label' => __('Row 1 Button Text '),
  'section' => 'sub3',
  'priority' => 1
));

$wp_customize->add_setting('row1_btn_url', array(
  'default' => _x('http://test.com', 'Elsa Mars'),
  'type' => 'theme_mod',

));

$wp_customize->add_control('row1_btn_url', array(
  'label' => __('Row 1 Button URL', 'Elsa Mars'),
  'section' => 'sub3',
  'priority' => 3
));


        // ROW2
$wp_customize->add_setting('row2_type', array(
  'default' => __('Weight Lifting', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('row2_type', array(
  'label' => __('Row 2 Type'),
  'section' => 'sub3',
  'priority' => 3
));
$wp_customize->add_setting('row2_time', array(
  'default' => __('8:00 - 9:00', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('row2_time', array(
  'label' => __('Row 2 Time'),
  'section' => 'sub3',
  'priority' => 3
));


$wp_customize->add_setting('row2_btn', array(
  'default' => _x('Sign Up', 'Elsa Mars'),
  'type' => 'theme_mod',

));
$wp_customize->add_control('row2_btn', array(
  'label' => __('Row 2 Button Text '),
  'section' => 'sub3',
  'priority' => 1
));

$wp_customize->add_setting('row2_btn_url', array(
  'default' => _x('http://test.com', 'Elsa Mars'),
  'type' => 'theme_mod',

));

$wp_customize->add_control('row2_btn_url', array(
  'label' => __('Row 2 Button URL', 'Elsa Mars'),
  'section' => 'sub3',
  'priority' => 3
));

        // ROW3
$wp_customize->add_setting('row3_type', array(
  'default' => __('Boxing', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('row3_type', array(
  'label' => __('Row 3 Type'),
  'section' => 'sub3',
  'priority' => 3
));
$wp_customize->add_setting('row3_time', array(
  'default' => __('9:00 - 10:00 ', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('row3_time', array(
  'label' => __('Row 3 Time'),
  'section' => 'sub3',
  'priority' => 3
));
$wp_customize->add_setting('row3_button_text', array(
  'default' => __('Sign Up', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('row3_button_text', array(
  'label' => __('Row 3 Button Text'),
  'section' => 'sub3',
  'priority' => 3
));

$wp_customize->add_setting('row3_btn', array(
  'default' => _x('Sign Up', 'Elsa Mars'),
  'type' => 'theme_mod',

));
$wp_customize->add_control('row3_btn', array(
  'label' => __('Row 3 Button Text '),
  'section' => 'sub3',
  'priority' => 1
));

$wp_customize->add_setting('row3_btn_url', array(
  'default' => _x('http://test.com', 'Elsa Mars'),
  'type' => 'theme_mod',

));

$wp_customize->add_control('row3_btn_url', array(
  'label' => __('Row 3 Button URL', 'Elsa Mars'),
  'section' => 'sub3',
  'priority' => 3
));

        // ROW4
$wp_customize->add_setting('row4_type', array(
  'default' => __('Yoga', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('row4_type', array(
  'label' => __('Row 4 Type'),
  'section' => 'sub3',
  'priority' => 3
));
$wp_customize->add_setting('row4_time', array(
  'default' => __('10:00 - 11:00 ', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('row4_time', array(
  'label' => __('Row 4 Time'),
  'section' => 'sub3',
  'priority' => 3
));
$wp_customize->add_setting('row4_button_text', array(
  'default' => __('Sign Up', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('row4_button_text', array(
  'label' => __('Row 4 Button Text'),
  'section' => 'sub3',
  'priority' => 3
));


$wp_customize->add_setting('row4_btn_url', array(
  'default' => _x('http://test.com', 'Elsa Mars'),
  'type' => 'theme_mod',

));

$wp_customize->add_control('row4_btn_url', array(
  'label' => __('Row 4 Button URL', 'Elsa Mars'),
  'section' => 'sub3',
  'priority' => 3
));
?>