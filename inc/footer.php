<?php 
$wp_customize->add_section('footer', array(
  'title' => __('Footer', 'Elsa Mars'),
  'description' => sprintf(__('Options for Footer'), 'Elsa Mars'),
  'priority' => 130
));

$wp_customize->add_setting('footer_title', array(
  'default' => __('Elsa Mars', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('footer_title', array(
  'label' => __('Footer Title Title'),
  'section' => 'footer',
  'priority' => 3
));
$wp_customize->add_setting('footer_link1', array(
  'default' => __('Facebook', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('footer_link1', array(
  'label' => __('Footer Link 1'),
  'section' => 'footer',
  'priority' => 3
));
$wp_customize->add_setting('footer_link1_url', array(
  'default' => __('http://test.com', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('footer_link1_url', array(
  'label' => __('Footer Link 1 URL'),
  'section' => 'footer',
  'priority' => 3
));

$wp_customize->add_setting('footer_link2', array(
  'default' => __('Instagram', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('footer_link2', array(
  'label' => __('Footer Link 2'),
  'section' => 'footer',
  'priority' => 3
));
$wp_customize->add_setting('footer_link2_url', array(
  'default' => __('http://test.com', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('footer_link2_url', array(
  'label' => __('Footer Link 2 URL'),
  'section' => 'footer',
  'priority' => 3
));

$wp_customize->add_setting('footer_link3', array(
  'default' => __('Twitter', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('footer_link3', array(
  'label' => __('Footer Link 3'),
  'section' => 'footer',
  'priority' => 3
));
$wp_customize->add_setting('footer_link3_url', array(
  'default' => __('http://test.com', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('footer_link3_url', array(
  'label' => __('Footer Link 3 URL'),
  'section' => 'footer',
  'priority' => 3
));
$wp_customize->add_setting('footer_link4', array(
  'default' => __('Snapchat', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('footer_link4', array(
  'label' => __('Footer Link 4'),
  'section' => 'footer',
  'priority' => 3
));
$wp_customize->add_setting('footer_link4_url', array(
  'default' => __('http://test.com', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('footer_link4_url', array(
  'label' => __('Footer Link 4 URL'),
  'section' => 'footer',
  'priority' => 3
));
?>