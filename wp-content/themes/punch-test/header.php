<?php
/**
 *
 * The template for displaying the header
 *
 */

 $header_logo = get_field('header_logo', 'options');
 $header_text = get_field('header_text', 'options');

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>




  <body <?php body_class(); ?>>


    <header>
      <nav class="header-navigation">
        <div class="header-navigation__left">
          <img src="<?php echo $header_logo['url'];?>" alt="<?php echo $header_logo['title'];?>">
          <p><?php echo $header_text;?></p>
        </div>
        <div class="header-navigation__right">
          <?php
			echo wp_nav_menu([
					'theme_location' => 'primary',
					'menu_class' => 'header-navigation__menu',
					'container' => false
			]);
			?>
          <div class="burger-menu">
            <div class="burger-menu__bar bar1"></div>
            <div class="burger-menu__bar bar2"></div>
            <div class="burger-menu__bar bar3"></div>

          </div>
        </div>

      </nav>


    </header><!-- .site-header -->