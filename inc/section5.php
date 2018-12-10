<?php 
$wp_customize->add_section('sub5', array(
  'title' => __('Section 5', 'Elsa Mars'),
  'description' => sprintf(__('Options for Section 5'), 'Elsa Mars'),
  'priority' => 130
));

$wp_customize->add_setting(
  'sub_5',
  array(
    'default' => get_bloginfo('template_directory') . '/img/about.jpg',
    'type' => 'theme_mod'
  )
);

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sub_5', array(
  'label' => __('Hero Image', 'Elsa Mars'),
  'section' => 'sub5',
  'settings' => 'sub_5',
  'priority' => 1
)));

$wp_customize->add_setting('sub5_title', array(
  'default' => __('ABOUT THE TRAINER', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('sub5_title', array(
  'label' => __('Section 5 Title'),
  'section' => 'sub5',
  'priority' => 3
));

$wp_customize->add_setting('sub5_name', array(
  'default' => __('Elsa Mars', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('sub5_name', array(
  'label' => __('Section 5 Name'),
  'section' => 'sub5',
  'priority' => 3
));

$wp_customize->add_setting('sub5_desc', array(
  'default' => __('Personal Trainer', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('sub5_desc', array(
  'label' => __('Section 5 Description'),
  'section' => 'sub5',
  'priority' => 3
));

$wp_customize->add_setting('sub5_text', array(
  'default' => __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, porro assumenda exercitationem non, consectetur aliquam reprehenderit nemo doloremque quisquam, aut natus iste amet nesciunt eligendi fuga hic id. Ducimus, corrupti.Expedita nulla minus quibusdam nobis voluptates, tenetur repudiandae recusandae a rerum id tempore nihil atque neque consequatur tempora temporibus explicabo impedit, exercitationem harum odio culpa quidem, vero earum dolor! Sint!', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('sub5_text', array(
  'label' => __('Section 5 Text'),
  'section' => 'sub5',
  'priority' => 3
));
?>