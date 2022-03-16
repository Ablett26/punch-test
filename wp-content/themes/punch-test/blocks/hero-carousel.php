<?php 
  $background_image = get_sub_field('background_image');
?>

<div class="block-wrapper" style="background-image: url('<?php echo $background_image;?>')">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="hero-carousel-wrapper">

          <div class="hero-carousel">

            <?php if( have_rows('hero_content') ):?>

            <?php while ( have_rows('hero_content') ) : the_row();
          $small_title = get_sub_field('small_title');
          $title = get_sub_field('title');
          $title_red_word = get_sub_field('title_red_word');
          $sub_title = get_sub_field('sub_title');
          $button = get_sub_field('button');
          $text = get_sub_field('text');
        ?>
            <div class="hero-carousel__content-wrapper">

              <h5 class="small-title"><?php echo $small_title;?></h5>
              <h1 class="title"><?php echo $title;?> <span class="title__red-word"><?php echo $title_red_word;?></span>
              </h1>
              <h3 class="sub-title"><?php echo $sub_title;?></h3>
              <p class="text"><?php echo $text;?></p>
              <a class="button" href="<?php echo $button['url'];?>"><?php echo $button['title'];?></a>
            </div>

            <?php endwhile;?>

            <?php endif;?>
          </div>



        </div>

      </div>
    </div>
  </div>
</div>