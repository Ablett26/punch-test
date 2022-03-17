<?php
  $title = get_sub_field('title');
  $sub_title = get_sub_field('sub_title');
  $background_text = get_sub_field('background_text');
?>

<div class="four-column-cta">
  <p class="background-text"><?php echo $background_text;?></p>

  <div class="container">

    <div class="four-column-cta__title-wrapper">
      <h2><?php echo $title;?></h2>
      <h3><?php echo $sub_title;?></h3>
    </div>

    <div class="row">

      <?php if( have_rows('cards') ):?>

      <?php while ( have_rows('cards') ) : the_row();
            $card_image = get_sub_field('card_image');
            $card_title = get_sub_field('card_title');
            $card_button = get_sub_field('card_button');
            $card_text = get_sub_field('card_text');
        ?>
      <div class="col-lg-3">
        <div class="card">
          <a href="<?php echo $card_button['url'];?>" class="card-link"></a>
          <div class="logo" style="-webkit-mask-image: url('<?php echo $card_image['url'];?>')"></div>
          <div class="card__content">
            <h6><?php echo $card_title;?></h6>
            <p><?php echo $card_text;?></p>
            <a href=" <?php echo $card_button['url'];?>"
              class="button button--light-grey"><?php echo $card_button['title'];?></a>
          </div>

        </div>
      </div>

      <?php endwhile;?>

      <?php endif;?>
    </div>
  </div>
</div>