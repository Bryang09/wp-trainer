<?php 
$wp_customize->add_section('sub4', array(
  'title' => __('Section 4', 'Elsa Mars'),
  'description' => sprintf(__('Options for Section 4'), 'Elsa Mars'),
  'priority' => 130
));

$wp_customize->add_setting('section4_title', array(
  'default' => __('Words From Our Clients', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('section4_title', array(
  'label' => __('Section 4 Title'),
  'section' => 'sub4',
  'priority' => 3
));

$wp_customize->add_setting(
  'box1_image',
  array(
    'default' => get_bloginfo('template_directory') . '/img/box1.jpg',
    'type' => 'theme_mod'
  )
);

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'box1_image', array(
  'label' => __('Box 1 Image', 'Elsa Mars'),
  'section' => 'sub4',
  'settings' => 'box1_image',
  'priority' => 1
)));


$wp_customize->add_setting(
  'box2_image',
  array(
    'default' => get_bloginfo('template_directory') . '/img/box2.jpg',
    'type' => 'theme_mod'
  )
);

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'box2_image', array(
  'label' => __('Box 2 Image', 'Elsa Mars'),
  'section' => 'sub4',
  'settings' => 'box2_image',
  'priority' => 1
)));

$wp_customize->add_setting(
  'box3_image',
  array(
    'default' => get_bloginfo('template_directory') . '/img/box3.jpg',
    'type' => 'theme_mod'
  )
);

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'box3_image', array(
  'label' => __('Box 3 Image', 'Elsa Mars'),
  'section' => 'sub4',
  'settings' => 'box3_image',
  'priority' => 1
)));
  
  
    
    // CUSTOMER 1
$wp_customize->add_setting('customer1_name', array(
  'default' => __('Chandler', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('customer1_name', array(
  'label' => __('Customer 1 Name'),
  'section' => 'sub4',
  'priority' => 3
));
$wp_customize->add_setting('customer1_program', array(
  'default' => __('Resistance Training', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('customer1_program', array(
  'label' => __('Customer 1 Program'),
  'section' => 'sub4',
  'priority' => 3
));
$wp_customize->add_setting('customer1_text', array(
  'default' => __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit illo repellat quisquam earum numquam mollitia veniam, ea et accusantium at sapiente quo odio non quae eaque perspiciatis natus quas inventore.', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('customer1_text', array(
  'label' => __('Customer 1 Text'),
  'section' => 'sub4',
  'priority' => 3
));
  
    // CUSTOMER 2
$wp_customize->add_setting('customer2_name', array(
  'default' => __('Phoebe', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('customer2_name', array(
  'label' => __('Customer 2 Name'),
  'section' => 'sub4',
  'priority' => 3
));
$wp_customize->add_setting('customer2_program', array(
  'default' => __('Boxing', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('customer2_program', array(
  'label' => __('Customer 2 Program'),
  'section' => 'sub4',
  'priority' => 3
));
$wp_customize->add_setting('customer2_text', array(
  'default' => __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit illo repellat quisquam earum numquam mollitia veniam, ea et accusantium at sapiente quo odio non quae eaque perspiciatis natus quas inventore.', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('customer2_text', array(
  'label' => __('Customer 2 Text'),
  'section' => 'sub4',
  'priority' => 3
));
  
    // CUSTOMER 3
$wp_customize->add_setting('customer3_name', array(
  'default' => __('Ross', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('customer3_name', array(
  'label' => __('Customer 3 Name'),
  'section' => 'sub4',
  'priority' => 3
));
$wp_customize->add_setting('customer3_program', array(
  'default' => __('Yoga', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('customer3_program', array(
  'label' => __('Customer 3 Program'),
  'section' => 'sub4',
  'priority' => 3
));
$wp_customize->add_setting('customer3_text', array(
  'default' => __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit illo repellat quisquam earum numquam mollitia veniam, ea et accusantium at sapiente quo odio non quae eaque perspiciatis natus quas inventore.', 'Elsa Mars'),
  'type' => 'theme_mod'
));

$wp_customize->add_control('customer3_text', array(
  'label' => __('Customer 3 Text'),
  'section' => 'sub4',
  'priority' => 3
));
?>