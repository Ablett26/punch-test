<?php
/**
 * The template for displaying the footer
 *
 *
 */

$footer_title = get_field('footer_title', 'options');
$footer_text = get_field('footer_text', 'options');

$left_button = get_field('left_button', 'options');
$right_button = get_field('right_button', 'options');

$menu_one_title = get_field('menu_one_title', 'options');
$menu_two_title = get_field('menu_two_title', 'options');
$menu_three_title = get_field('menu_three_title', 'options');



$footer_logo = get_field('footer_logo', 'options');
$copyright = get_field('copyright', 'options');
$company = get_field('company', 'options');

$footer_bottom_copyright = get_field('footer_bottom_copyright', 'options');
$powered_by_image = get_field('powered_by_image', 'options');
$phone_number = get_field('phone_number','options');
$email = get_field('email', 'options');


?>


<footer class="footer">

  <div class="container">

    <div class="footer__top">

      <div class="footer__top-left">
        <!-- Footer Left Content -->
        <div class="footer__top-content">

          <h3><?php echo $footer_title;?></h3>

          <p><?php echo $footer_text;?></p>
          <div class="footer__top-content-buttons">

            <a class="button button--light-grey-alt left-button"
              href="<?php echo $left_button['url'];?>"><?php echo $left_button['title'];?></a>

            <a class="button button--light-grey-alt right-button"
              href="<?php echo $right_button['url'];?>"><?php echo $right_button['title'];?></a>
          </div>

        </div>


        <div class="row footer__top-menus">

          <div class="col">


            <h6 class="menu__title"><?php echo $menu_one_title;?></h6>
            <?php echo wp_nav_menu([
              'theme_location' => 'footer-one',
              'menu_class' => 'footer-menu-one footer-menu',
              'container' => false
              ]);
            ?>

          </div>

          <div class="col">
            <h6 class="menu__title"><?php echo $menu_two_title;?></h6>
            <?php echo wp_nav_menu([
              'theme_location' => 'footer-two',
              'menu_class' => 'footer-menu-two footer-menu',
              'container' => false
              ]);
            ?>
          </div>

          <div class="col">
            <h6 class="menu__title"><?php echo $menu_three_title;?></h6>
            <?php echo wp_nav_menu([
              'theme_location' => 'footer-three',
              'menu_class' => 'footer-menu-three footer-menu',
              'container' => false
              ]);
            ?>
          </div>

        </div>

      </div>

      <!-- Footer Right Content -->

      <div class="footer__top-right">
        <img src="<?php echo $footer_logo['url'];?>" alt="<?php echo $footer_logo['title'];?>">
        <p class="copyright">&copy; <?php echo $copyright;?></p>
        <p><?php echo $company;?></p>
      </div>
      <!-- Footer Right Content End-->

    </div>
  </div>

  <div class="container footer__bottom-container">

    <div class="footer__bottom">

      <p><?php echo $footer_bottom_copyright;?></p>
      <img src="<?php echo $powered_by_image['url'];?>" alt="<?php echo $powered_by_image['title'];?>">

      <div class="contact-info">
        <p>Have any questions?</p>
        <a href="tel:<?php echo $phone_number;?>"><?php echo $phone_number;?></a>
        <a href="mailto: <?php echo $email;?>"><?php echo $email;?></a>
      </div>

    </div>
  </div>


</footer><!-- .site-footer -->


<?php wp_footer(); ?>

<div class="detectDevice"></div>

</body>

</html>