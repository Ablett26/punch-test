<?php
  $background_image = get_sub_field('background_image');
  $small_title = get_sub_field('small_title');
  $sub_title = get_sub_field('sub_title');
  $title = get_sub_field('title');
  $image = get_sub_field('image');
?>





<div class="full-width-image-parallax" style="background-image: url('<?php echo $background_image['url'];?>')">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="full-width-image-parallax__content">
          <h6><?php echo $small_title;?></h6>
          <p><?php echo $sub_title;?></p>
          <div class="title"><?php echo $title;?></div>
          <img src="<?php echo $image['url'];?>" alt="<?php echo $image['title'];?>">
        </div>

      </div>
    </div>
  </div>
</div>