<?php 
$wp_customize->add_section('sub2', array(
  'title' => __('Section 2', 'Elsa Mars'),
  'description' => sprintf(__('Options for Section 2'), 'Elsa Mars'),
  'priority' => 130
));

$wp_customize->add_setting(
  'section2_image',
  array(
    'default' => get_bloginfo('template_directory') . '/img/sub2.jpg',
    'type' => 'theme_mod'
  )
);

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
  'label' => __('Section 2 Image', 'Elsa Mars'),
  'section' => 'sub2',
  'settings' => 'section2_image',
  'priority' => 1
)));

$wp_customize->add_setting('sub2_title', array(
  'default' => __('training services we offer', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('sub2_title', array(
  'label' => __('Title'),
  'section' => 'sub2',
  'priority' => 3
));

  // Box 1
$wp_customize->add_setting('box1_title', array(
  'default' => __('Cardio', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('box1_title', array(
  'label' => __('Box 1 Title'),
  'section' => 'sub2',
  'priority' => 3
));
$wp_customize->add_setting('box1_text', array(
  'default' => __('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, enim ipsa modi quis harum repellendus ea! Adipisci sed at similique eaque aliquam pariatur doloribus inventore molestias repellendus? Molestiae, ad doloremque?', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('box1_text', array(
  'label' => __('Box 1 Text'),
  'section' => 'sub2',
  'priority' => 3
));
$wp_customize->add_setting('box1_price', array(
  'default' => __('45', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('box1_price', array(
  'label' => __('Box 1 Price'),
  'section' => 'sub2',
  'priority' => 3
));



  // Box2

$wp_customize->add_setting('box2_title', array(
  'default' => __('Body Weight', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('box2_title', array(
  'label' => __('Box 2 Title'),
  'section' => 'sub2',
  'priority' => 3
));
$wp_customize->add_setting('box2_text', array(
  'default' => __('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, enim ipsa modi quis harum repellendus ea! Adipisci sed at similique eaque aliquam pariatur doloribus inventore molestias repellendus? Molestiae, ad doloremque?', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('box2_text', array(
  'label' => __('Box 2 Text'),
  'section' => 'sub2',
  'priority' => 3
));

$wp_customize->add_setting('box2_price', array(
  'default' => __('40', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('box2_price', array(
  'label' => __('Box 2 Price'),
  'section' => 'sub2',
  'priority' => 3
));

  // Box3
$wp_customize->add_setting('box3_title', array(
  'default' => __('Resistance Training', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('box3_title', array(
  'label' => __('Box 3 Title'),
  'section' => 'sub2',
  'priority' => 3
));
$wp_customize->add_setting('box3_text', array(
  'default' => __('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, enim ipsa modi quis harum repellendus ea! Adipisci sed at similique eaque aliquam pariatur doloribus inventore molestias repellendus? Molestiae, ad doloremque?', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('box3_text', array(
  'label' => __('Box 3 Text'),
  'section' => 'sub2',
  'priority' => 3
));
$wp_customize->add_setting('box3_price', array(
  'default' => __('50', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('box3_price', array(
  'label' => __('Box 3 Price'),
  'section' => 'sub2',
  'priority' => 3
));
?>