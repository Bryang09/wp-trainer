<?php 

$wp_customize->add_section('hero', array(
  'title' => __('Hero', 'Elsa Mars'),
  'description' => sprintf(__('Options for Hero Section'), 'Elsa Mars'),
  'priority' => 130
));

$wp_customize->add_setting(
  'hero_image',
  array(
    'default' => get_bloginfo('template_directory') . '/img/showcase.jpg',
    'type' => 'theme_mod'
  )
);

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
  'label' => __('Hero Image', 'Elsa Mars'),
  'section' => 'hero',
  'settings' => 'hero_image',
  'priority' => 1
)));

$wp_customize->add_setting('hero_heading', array(
  'default' => _x('Elsa Mars', 'Elsa Mars'),
  'type' => 'theme_mod',

));
$wp_customize->add_control('hero_heading', array(
  'label' => __('Title'),
  'section' => 'hero',
  'priority' => 1
));

$wp_customize->add_setting('hero_sub_heading', array(
  'default' => _x('Personal Trainer', 'Elsa Mars'),
  'type' => 'theme_mod',

));
$wp_customize->add_control('hero_sub_heading', array(
  'label' => __('Sub Heading'),
  'section' => 'hero',
  'priority' => 1
));

$wp_customize->add_setting('hero_text', array(
  'default' => _x('looking for personalized personal training? then you are in the right place!!', 'Elsa Mars'),
  'type' => 'theme_mod',

));
$wp_customize->add_control('hero_text', array(
  'label' => __('Text'),
  'section' => 'hero',
  'priority' => 1
));

$wp_customize->add_setting('hero_btn1', array(
  'default' => _x('View Pricing', 'Elsa Mars'),
  'type' => 'theme_mod',

));
$wp_customize->add_control('hero_btn1', array(
  'label' => __('Button 1 Text '),
  'section' => 'hero',
  'priority' => 1
));

$wp_customize->add_setting('btn1_url', array(
  'default' => _x('http://test.com', 'Elsa Mars'),
  'type' => 'theme_mod',

));

$wp_customize->add_control('btn1_url', array(
  'label' => __('Button 1 URL', 'Elsa Mars'),
  'section' => 'hero',
  'priority' => 3
));

$wp_customize->add_setting('hero_btn2', array(
  'default' => _x('Testimonials', 'Elsa Mars'),
  'type' => 'theme_mod',

));
$wp_customize->add_control('hero_btn2', array(
  'label' => __('Button 2 Text '),
  'section' => 'hero',
  'priority' => 1
));

$wp_customize->add_setting('btn2_url', array(
  'default' => _x('http://test.com', 'Elsa Mars'),
  'type' => 'theme_mod',

));

$wp_customize->add_control('btn2_url', array(
  'label' => __('Button 2 URL', 'Elsa Mars'),
  'section' => 'hero',
  'priority' => 3
));


?>