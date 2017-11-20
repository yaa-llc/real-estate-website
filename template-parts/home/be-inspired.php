<?php the_sub_field( 'be_inspired_section_title' ); ?>
<?php the_sub_field( 'be_inspired_cta_main_text' ); ?>
<?php the_sub_field( 'be_inspired_cta_secondary_text' ); ?>
<?php $be_inspired_cta_link = get_sub_field( 'be_inspired_cta_link' ); ?>
<?php if ( $be_inspired_cta_link ) { ?>
    <a href="<?php echo $be_inspired_cta_link['url']; ?>" target="<?php echo $be_inspired_cta_link['target']; ?>"><?php echo $be_inspired_cta_link['title']; ?></a>
<?php } ?>
<?php $be_inspired_section_background_image = get_sub_field( 'be_inspired_section_background_image' ); ?>
<?php if ( $be_inspired_section_background_image ) { ?>
    <!-- ADD CLASS OF image-overlay to this section-->
    <?php echo wp_get_attachment_image( $be_inspired_section_background_image, 'full' ); ?>
<?php } ?>