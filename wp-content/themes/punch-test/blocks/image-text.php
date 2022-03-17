<?php
  $image = get_sub_field('image');
  $reverse_layout = get_sub_field('reverse_layout');
?>

<div class="image-text-block">
  <div class="container-fluid">
    <div class="row image-text-block__wrapper <?php if($reverse_layout == 1):?>reverse-layout<?php endif;?>">

      <div class="col-12 col-md-6 image-text-block__image" style="background-image: url('<?php echo $image['url'];?>')">
      </div>

      <div class="col-12 col-md-6 image-text-block__list">
        <?php if( have_rows('list') ):?>

        <?php while ( have_rows('list') ) : the_row();
          $list_title = get_sub_field('list_title');
          $list_text = get_sub_field('list_text')
        ?>
        <div class="image-text-block__list-content">

          <h6><?php echo $list_title;?></h6>
          <p><?php echo $list_text;?></p>
        </div>

        <?php endwhile;?>

        <?php endif;?>
      </div>
    </div>
  </div>
</div>