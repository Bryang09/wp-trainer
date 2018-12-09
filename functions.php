<?php 

function wp_customize_register($wp_customize)
{
  //  CUSTOMIZE HERO SECTION

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

  // CUSTOMIZE SECTION 1

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



  // CUSTOMIZE SECTION 2
  $wp_customize->add_section('sub2', array(
    'title' => __('Section 2', 'Elsa Mars'),
    'description' => sprintf(__('Options for Section 1'), 'Elsa Mars'),
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
}


add_action('customize_register', 'wp_customize_register')
?>