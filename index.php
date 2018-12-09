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
      <h1></h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam amet qui,
        et vitae quisquam iure maiores cumque non impedit assumenda fugiat
        aspernatur adipisci quaerat velit blanditiis ipsa esse! Quasi, iste.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
        maiores, explicabo quia perspiciatis mollitia porro, laborum distinctio
        aliquam quae quaerat quibusdam assumenda nemo, minus culpa? Quos aperiam
        eius nesciunt ex.
      </p>
    </section>

    <section class="Sub2">
      <div class="Sub2">
        <div class="sub2Img">
          <h3>Training</h3>
          <h2><span>Services</span> we offer</h2>
        </div>
        <div class="sub2Prices">
          <div class="priceBox">
            <div class="priceText">
              <h2>Cardio</h2>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Explicabo, enim ipsa modi quis harum repellendus ea! Adipisci
                sed at similique eaque aliquam pariatur doloribus inventore
                molestias repellendus? Molestiae, ad doloremque?
              </p>
              <h4><b> $45/month </b></h4>
            </div>
          </div>

          <div class="priceBox" id="second">
            <div class="priceText">
              <h2>Body Weight</h2>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Explicabo, enim ipsa modi quis harum repellendus ea! Adipisci
                sed at similique eaque aliquam pariatur doloribus inventore
                molestias repellendus? Molestiae, ad doloremque?
              </p>
              <h4><b> $40/month </b></h4>
            </div>
          </div>

          <div class="priceBox">
            <div class="priceText">
              <h2>Resistance Training</h2>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Explicabo, enim ipsa modi quis harum repellendus ea! Adipisci
                sed at similique eaque aliquam pariatur doloribus inventore
                molestias repellendus? Molestiae, ad doloremque?
              </p>
              <h4><b> $50/month </b></h4>
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
              <h3>Cardio</h3>
              <h4>7:00 - 8:00 A.M</h4>
            </div>
            <div class="right"><h5>Sign Up</h5></div>
          </div>
          <div class="event">
            <div class="left">
              <h3>Weight Lifting</h3>
              <h4>8:00 - 9:00 A.M</h4>
            </div>
            <div class="right"><h5>Sign Up</h5></div>
          </div>
          <div class="event">
            <div class="left">
              <h3>Boxing</h3>
              <h4>9:00 - 10:00 A.M</h4>
            </div>
            <div class="right"><h5>Sign Up</h5></div>
          </div>
          <div class="event">
            <div class="left">
              <h3>Yoga</h3>
              <h4>10:00 - 11:00 A.M</h4>
            </div>
            <div class="right"><h5>Sign Up</h5></div>
          </div>
        </div>
      </div>
    </section>

    <section class="Sub4">
      <h1>Words From Our Clients</h1>
      <div class="Reviews">
        <div class="Review">
          <div
            class="reviewImg"
            style=" background-image: url(https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7e89aa20603ea9fe62ddc6014276ca41&auto=format&fit=crop&w=634&q=80) "
          ></div>
          <div class="reviewText">
            <h4>Chandler</h4>
            <h5 style="text-transform: 'uppercase'">Resistance Training</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit
              illo repellat quisquam earum numquam mollitia veniam, ea et
              accusantium at sapiente quo odio non quae eaque perspiciatis natus
              quas inventore.
            </p>
          </div>
        </div>
        <div class="Review">
          <div
            class="reviewImg"
            style="background-image: url(https://images.unsplash.com/photo-1535324492437-d8dea70a38a7?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5020948430163a1dccb8aa26070664c4&auto=format&fit=crop&w=687&q=80)"
          ></div>
          <div class="reviewText">
            <h4>Phoebe</h4>
            <h5 style="text-transform: 'uppercase'">Boxing</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit
              illo repellat quisquam earum numquam mollitia veniam, ea et
              accusantium at sapiente quo odio non quae eaque perspiciatis natus
              quas inventore.
            </p>
          </div>
        </div>
        <div class="Review">
          <div
            class="reviewImg"
            style="background-image: url(https://images.unsplash.com/photo-1535441577682-5a7bc0702a7d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=077e17fb017e1258f3d5d3709729640a&auto=format&fit=crop&w=500&q=60) "
          ></div>
          <div class="reviewText">
            <h4>Ross</h4>
            <h5 style="text-transform: 'uppercase'">Yoga</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit
              illo repellat quisquam earum numquam mollitia veniam, ea et
              accusantium at sapiente quo odio non quae eaque perspiciatis natus
              quas inventore.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="Sub5">
      <div class="Container">
        <div class="sub5Img"><h1>About the Trainer</h1></div>
        <div class="sub5Text">
          <h1><span>Elsa Mars </span>/ Personal Trainer</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, porro
            assumenda exercitationem non, consectetur aliquam reprehenderit nemo
            doloremque quisquam, aut natus iste amet nesciunt eligendi fuga hic
            id. Ducimus, corrupti.Expedita nulla minus quibusdam nobis
            voluptates, tenetur repudiandae recusandae a rerum id tempore nihil
            atque neque consequatur tempora temporibus explicabo impedit,
            exercitationem harum odio culpa quidem, vero earum dolor! Sint!
          </p>
        </div>
      </div>
    </section>

    <footer class="Footer">
      <h2>&copy; Elsa Mars</h2>
      <div class="links">
        <h3>Facebook</h3>
        <h3>Instagram</h3>
        <h3>Twitter</h3>
        <h3>Snapchat</h3>
      </div>
    </footer>
    <?php wp_footer() ?>
  </body>
</html>
