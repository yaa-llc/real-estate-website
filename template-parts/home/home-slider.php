<?php if ( have_rows( 'slider_image_and_text' ) ) : ?>
    <?php while ( have_rows( 'slider_image_and_text' ) ) : the_row(); ?>
        <?php $slider_image = get_sub_field( 'slider_image' ); ?>
        <?php if ( $slider_image ) { ?>
            <img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" />
        <?php } ?>
        <?php the_sub_field( 'slider_headline' ); ?>
        <?php the_sub_field( 'slider_description' ); ?>
        <?php the_sub_field( 'link_to_page' ); ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>