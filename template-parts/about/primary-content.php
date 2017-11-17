<?php if ( get_row_layout() == 'text_and_image_section' ) : ?>
    <?php the_sub_field( 'text_content' ); ?>
    <?php $image_content = get_sub_field( 'image_content' ); ?>
    <?php if ( $image_content ) { ?>
        <img src="<?php echo $image_content['url']; ?>" alt="<?php echo $image_content['alt']; ?>" />
    <?php } ?>
<?php endif; ?>