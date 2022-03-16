<?php 
$title = get_sub_field('title');
$text = get_sub_field('text');
$button = get_sub_field('button');
$block_footer_text = get_sub_field('block_footer_text');

?>


<div class="text-cta-block">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="text-cta-block__wrapper">
          <div class="left-content">
            <h5 class="left-content-title"><?php echo $title;?></h5>
            <p class="left-content-text"><?php echo $text;?></p>
          </div>
          <div class="text-cta-block__wrapper-right-content">
            <a href="<?php echo $button['url'];?>" class="button button--white"><?php echo $button['title'];?></a>
          </div>
        </div>
        <div class="text-cta-block__footer">
          <p class="text-cta-block__footer-text"><?php echo $block_footer_text;?></p>
        </div>
      </div>
    </div>
  </div>
</div>