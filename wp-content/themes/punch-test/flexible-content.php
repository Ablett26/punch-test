<?php if(have_rows('flexible_content') ) :?>
<?php while(have_rows('flexible_content')): the_row();?>

<?php if(get_row_layout() == 'hero_carousel'):
    get_template_part('./blocks/hero-carousel');
  ?>


<?php endif;?>

<?php endwhile;?>

<?php endif;?>