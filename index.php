<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
    <meta charset="<?php bloginfo('carset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,700"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
    <title><?php bloginfo('name') ?> | <?php bloginfo('description') ?> </title>
    <?php wp_head() ?>
    <style>
      .heroImg{
        background: url(<?php echo get_theme_mod('hero_image', get_bloginfo('template_url') . '/img/showcase.jpg') ?>) no-repeat center 1% / cover;
      }
      .sub2Img{
        background: url(<?php echo get_theme_mod('sub2_image', get_bloginfo('template_url') . '/img/sub2.jpg') ?>) no-repeat center 1% / cover;
      }
      #chandler{
        background: url(<?php echo get_theme_mod('box1_image', get_bloginfo('template_url') . '/img/box1.jpg') ?>) no-repeat center center / cover;
      }
      #phoebe {
        background: url(<?php echo get_theme_mod('box2_image', get_bloginfo('template_url') . '/img/box2.jpg') ?>) no-repeat center center / cover;
      }
      #ross {
        background: url(<?php echo get_theme_mod('box3_image', get_bloginfo('template_url') . '/img/box3.jpg') ?>) no-repeat center center / cover;
      }
    </style>
  </head>
  <body>
  
    <section class="Hero">
      <div class="heroImg">
        <div class="heroText">
          <h1><?php echo get_theme_mod('hero_heading', 'Elsa Mars') ?> </h1>
          <h3><?php echo get_theme_mod('hero_sub_heading', 'Personal Trainer') ?></h3>
          <h2 style="text-transform: 'uppercase' ">
           <?php echo get_theme_mod('hero_text', 'looking for personalized personal training? then you are in the right place!!') ?>
          </h2>
          <div class="heroButtons">
            <h5><a href="<?php echo get_theme_mod('btn1_url', 'http://test.com') ?>"><?php echo get_theme_mod('hero_btn1', 'View Pricing') ?></a></h5>
            <h5><a href="<?php echo get_theme_mod('btn2_url', 'http://test.com') ?> "></a><?php echo get_theme_mod('hero_btn2', 'Testimonials') ?></h5>
          </div>
        </div>
      </div>
    </section>

    <section class="Sub1">
      <h1><?php echo get_theme_mod('sub1_title', 'What Drives Us') ?></h1>
      <p>
          <?php echo get_theme_mod('sub1_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam amet qui, et vitae quisquam iure maiores cumque non impedit assumenda fugiat aspernatur adipisci quaerat velit blanditiis ipsa esse! Quasi, iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque maiores, explicabo quia perspiciatis mollitia porro, laborum distinctio aliquam quae quaerat quibusdam assumenda nemo, minus culpa? Quos aperiam eius nesciunt ex.') ?>
      </p>
    </section>

    <section class="Sub2">
      <div class="Sub2">
        <div class="sub2Img">
          <h3><?php echo get_theme_mod('sub2_title', 'TRAINING SERVICES WE OFFER') ?></h3>
        </div>
        <div class="sub2Prices">
          <div class="priceBox">
            <div class="priceText">
              <h2><?php echo get_theme_mod('box1_title', 'Cardio') ?></h2>
              <p><?php echo get_theme_mod('box1_text', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, enim ipsa modi quis harum repellendus ea! Adipisci sed at similique eaque aliquam pariatur doloribus inventore molestias repellendus? Molestiae, ad doloremque?') ?></p>
              <h4><b> $<?php echo get_theme_mod('box1_price', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, enim ipsa modi quis harum repellendus ea! Adipisci sed at similique eaque aliquam pariatur doloribus inventore molestias repellendus? Molestiae, ad doloremque?') ?>/month </b></h4>
            </div>
          </div>

          <div class="priceBox" id="second">
          <div class="priceText">
              <h2><?php echo get_theme_mod('box2_title', 'Body Weight') ?></h2>
              <p><?php echo get_theme_mod('box2_text', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, enim ipsa modi quis harum repellendus ea! Adipisci sed at similique eaque aliquam pariatur doloribus inventore molestias repellendus? Molestiae, ad doloremque?') ?></p>
              <h4><b> $<?php echo get_theme_mod('box2_price', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, enim ipsa modi quis harum repellendus ea! Adipisci sed at similique eaque aliquam pariatur doloribus inventore molestias repellendus? Molestiae, ad doloremque?') ?>/month </b></h4>
            </div>
          </div>

          <div class="priceBox">
          <div class="priceText">
              <h2><?php echo get_theme_mod('box3_title', 'Resistance Training') ?></h2>
              <p><?php echo get_theme_mod('box3_text', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, enim ipsa modi quis harum repellendus ea! Adipisci sed at similique eaque aliquam pariatur doloribus inventore molestias repellendus? Molestiae, ad doloremque?') ?></p>
              <h4><b> $<?php echo get_theme_mod('box3_price', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, enim ipsa modi quis harum repellendus ea! Adipisci sed at similique eaque aliquam pariatur doloribus inventore molestias repellendus? Molestiae, ad doloremque?') ?>/month </b></h4>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="Sub3">
      <div class="sub3Img"></div>
      <div class="sub3Text">
        <div class="schedule">
          <div class="event">
            <div class="left">
              <h3><?php echo get_theme_mod('row1_type', 'Cardio') ?></h3>
              <h4><?php echo get_theme_mod('row1_time', '7:00 - 8:00') ?>A.M</h4>
            </div>
            <div class="right"><h5><a href="<?php echo get_theme_mod('row1_btn_url', 'Sign Up') ?>"><?php echo get_theme_mod('row1_button_text', 'Sign Up') ?></a></h5></div>
          </div>
          <div class="event">
            <div class="left">
              <h3><?php echo get_theme_mod('row2_type', 'Weight Lifting') ?></h3>
              <h4><?php echo get_theme_mod('row2_time', '8:00 - 9:00') ?>A.M</h4>
            </div>
            <div class="right"><h5><a href="<?php echo get_theme_mod('row2_btn_url', 'Sign Up') ?>"><?php echo get_theme_mod('row2_button_text', 'Sign Up') ?></a></h5></div>

          </div>
          <div class="event">
            <div class="left">
              <h3><?php echo get_theme_mod('row3_type', 'Boxing') ?></h3>
              <h4><?php echo get_theme_mod('row3_time', '9:00 - 10:00') ?>A.M</h4>
            </div>
            <div class="right"><h5><a href="<?php echo get_theme_mod('row3_btn_url', 'Sign Up') ?>"><?php echo get_theme_mod('row3_button_text', 'Sign Up') ?></a></h5></div>

          </div>
          <div class="event">
            <div class="left">
              <h3><?php echo get_theme_mod('row4_type', 'Yoga') ?></h3>
              <h4><?php echo get_theme_mod('row4_time', '10:00 - 11:00') ?>A.M</h4>
            </div>
            <div class="right"><h5><a href="<?php echo get_theme_mod('row4_btn_url', 'Sign Up') ?>"><?php echo get_theme_mod('row4_button_text', 'Sign Up') ?></a></h5></div>

          </div>
        </div>
      </div>
    </section>

    <section class="Sub4">
      <h1><?php echo get_theme_mod('section4_title', 'Words From Our Clients') ?></h1>
      <div class="Reviews">
        <div class="Review">
          <div
            class="reviewImg"
            id="chandler"
          ></div>
          <div class="reviewText">
            <h4><?php echo get_theme_mod('customer1_name', 'Chandler') ?></h4>
            <h5 style="text-transform: 'uppercase'"><?php echo get_theme_mod('customer1_program', 'Resistance Training') ?></h5>
            <p><?php echo get_theme_mod('customer1_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit illo repellat quisquam earum numquam mollitia veniam, ea et accusantium at sapiente quo odio non quae eaque perspiciatis natus quas inventore.') ?></p>
          </div>
        </div>
        <div class="Review">
          <div
            class="reviewImg"
            id="phoebe"
          ></div>
          <div class="reviewText">
            <h4><?php echo get_theme_mod('customer2_name', 'Phoebe') ?></h4>
            <h5 style="text-transform: 'uppercase'"><?php echo get_theme_mod('customer2_program', 'Boxing') ?></h5>
            <p><?php echo get_theme_mod('customer2_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit illo repellat quisquam earum numquam mollitia veniam, ea et accusantium at sapiente quo odio non quae eaque perspiciatis natus quas inventore.') ?></p>
          </div>
        </div>
        <div class="Review">
          <div
            class="reviewImg"
            id="ross"
          ></div>
          <div class="reviewText">
            <h4><?php echo get_theme_mod('customer3_name', 'Ross') ?></h4>
            <h5 style="text-transform: 'uppercase'"><?php echo get_theme_mod('customer3_program', 'Yoga') ?></h5>
            <p><?php echo get_theme_mod('customer3_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit illo repellat quisquam earum numquam mollitia veniam, ea et accusantium at sapiente quo odio non quae eaque perspiciatis natus quas inventore.') ?></p>
          </div>
        </div>
      </div>
    </section>

    <section class="Sub5">
      <div class="Container">
        <div class="sub5Img"><h1><?php echo get_theme_mod('sub5_title') ?></h1></div>
        <div class="sub5Text">
          <h1><span><?php echo get_theme_mod('sub5_name', 'Elsa Mars') ?></span>/ <?php echo get_theme_mod('sub5_desc', 'PERSONAL TRAINER') ?></h1>
          <p><?php echo get_theme_mod('sub5_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, porro assumenda exercitationem non, consectetur aliquam reprehenderit nemo doloremque quisquam, aut natus iste amet nesciunt eligendi fuga hic id. Ducimus, corrupti.Expedita nulla minus quibusdam nobis voluptates, tenetur repudiandae recusandae a rerum id tempore nihil atque neque consequatur tempora temporibus explicabo impedit, exercitationem harum odio culpa quidem, vero earum dolor! Sint!') ?>
          </p>
        </div>
      </div>
    </section>

    <footer class="Footer">
      <h2>&copy; <?php echo get_theme_mod('footer_title', 'Elsa Mars') ?></h2>
      <div class="links">
        <h3><a href="<?php echo get_theme_mod('footer_link1_url', 'http://test.com') ?>"><?php echo get_theme_mod('footer_link1', 'Facebook') ?></a></h3>
        <h3><a href="<?php echo get_theme_mod('footer_link2_url', 'http://test.com') ?>"><?php echo get_theme_mod('footer_link2', 'Instagram') ?></a></h3>
        <h3><a href="<?php echo get_theme_mod('footer_link3_url', 'http://test.com') ?>"><?php echo get_theme_mod('footer_link3', 'Twitter') ?></a></h3>
        <h3><a href="<?php echo get_theme_mod('footer_link4_url', 'http://test.com') ?>"><?php echo get_theme_mod('footer_link4', 'Snapchat') ?></a></h3>
      </div>
    </footer>
    <?php wp_footer() ?>
  </body>
</html>
