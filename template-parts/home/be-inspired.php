<!-- get the variable to make the background image -->
<?php $be_inspired_section_background_image = get_sub_field( 'be_inspired_section_background_image', 92 ); ?>

<?//php if ( $be_inspired_section_background_image ) { ?>

<?//php } ?>

<section class="be-inspired" style="background:linear-gradient(rgba(51, 51, 60, 0.7),rgba(51, 51, 60, 0.7)), url(<?php echo $be_inspired_section_background_image; ?>); background-repeat: no-repeat; background-size: cover; background-position: 50%; background-attachment: fixed;">
    <div class="inner-wrapper">
        <h4><?php the_sub_field( 'be_inspired_section_title' ); ?></h4>
        <h2><?php the_sub_field( 'be_inspired_cta_main_text' ); ?></h2>
        <p><?php the_sub_field( 'be_inspired_cta_secondary_text' ); ?></p>
        <?php $be_inspired_cta_link = get_sub_field( 'be_inspired_cta_link' ); ?>
        <?php if ( $be_inspired_cta_link ) { ?>
            <a href="<?php echo $be_inspired_cta_link['url']; ?>" target="<?php echo $be_inspired_cta_link['target']; ?>" class="block-link"><?php the_sub_field('be_inspired_cta_link_text'); ?></a>
        <?php } ?>
    </div>
</section>
