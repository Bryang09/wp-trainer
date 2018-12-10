<?php 

function wp_customize_register($wp_customize)
{
  // HERO SECTION

  require get_template_directory() . '/inc/hero.php';

  // SECTION 1

  require get_template_directory() . '/inc/section1.php';

  // SECTION 2

  require get_template_directory() . '/inc/section2.php';

  // SECTION 3

  require get_template_directory() . '/inc/section3.php';

  // SECTION 4

  require get_template_directory() . '/inc/section4.php';

  // SECTION 5

  require get_template_directory() . '/inc/section4.php';

  // FOOTER

  require get_template_directory() . '/inc/footer.php';

}


add_action('customize_register', 'wp_customize_register')
?>