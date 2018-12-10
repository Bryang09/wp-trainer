<?php 
$wp_customize->add_section('sub1', array(
  'title' => __('Section 1', 'Elsa Mars'),
  'description' => sprintf(__('Options for Section 1'), 'Elsa Mars'),
  'priority' => 130
));


$wp_customize->add_setting('sub1_title', array(
  'default' => __('What Drives Us', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('sub1_title', array(
  'label' => __('Title'),
  'section' => 'sub1',
  'priority' => 3
));

$wp_customize->add_setting('sub1_text', array(
  'default' => __('
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam amet qui, et vitae quisquam iure maiores cumque non impedit assumenda fugiat aspernatur adipisci quaerat velit blanditiis ipsa esse! Quasi, iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque maiores, explicabo quia perspiciatis mollitia porro, laborum distinctio aliquam quae quaerat quibusdam assumenda nemo, minus culpa? Quos aperiam eius nesciunt ex.', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('sub1_text', array(
  'label' => __('Text'),
  'section' => 'sub1',
  'priority' => 3
));


?>