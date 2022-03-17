<?php if(have_rows('flexible_content') ) :?>
<?php while(have_rows('flexible_content')): the_row();?>

<?php if(get_row_layout() == 'hero_carousel'):
    get_template_part('./blocks/hero-carousel');

  ?>
<?php elseif(get_row_layout() == 'text_cta_block'):
    get_template_part('./blocks/text-cta');
?>
<?php elseif(get_row_layout() == 'four_column_cta_block'):
    get_template_part('./blocks/four-column-cta');
?>
<?php elseif(get_row_layout() == 'image_text_block'):
    get_template_part('./blocks/image-text');
?>

<?php endif;?>

<?php endwhile;?>

<?php endif;?>