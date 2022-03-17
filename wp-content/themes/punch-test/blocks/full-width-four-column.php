<div class="full-width-four-column">

  <div class="container-fluid">
    <div class="row">

      <?php if( have_rows('card') ):?>

      <?php while ( have_rows('card') ) : the_row();
            $card_icon = get_sub_field('card_icon');
            $card_title = get_sub_field('card_title');
            $card_text = get_sub_field('card_text');
            $background_colour = get_sub_field('background_colour');
        ?>
      <div class="col-lg-3">
        <div class="full-width-four-column__card" style="background-color: <?php echo $background_colour;?>">
          <img src="<?php echo $card_icon['url'];?>" alt="<?php echo $card_icon['title'];?>">
          <div class="full-width-four-column__card-content">
            <h6><?php echo $card_title;?></h6>
            <p><?php echo $card_text;?></p>
          </div>

        </div>
      </div>

      <?php endwhile;?>

      <?php endif;?>
    </div>
  </div>
</div>