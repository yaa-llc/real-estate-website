<section class="quick-links-section">
    <div class="quick-links-wrapper">
        <?php if ( have_rows( 'quick_link' ) ) : ?>
            <?php while ( have_rows( 'quick_link' ) ) : the_row(); ?>
                <?php $download_a_brochure = get_sub_field( 'download_a_brochure' ); ?>
                <?php if ( $download_a_brochure ) { ?>
                    <?php $brochure_image = wp_get_attachment_image('389', 'full'); ?>

                    <div class="quick-links">
                        <?php echo $brochure_image; ?>
                        <a href="<?php echo $download_a_brochure['url']; ?>" class="block-link">Download A Brochure</a>
                    </div>

                    <div class="quick-links">
                        <!-- make dealer image varibale -->
                        <?php $dealer_image = wp_get_attachment_image('390', 'full'); ?>
                        <?php echo $dealer_image; ?>
                        <a href="<?php the_sub_field( 'find_a_dealer' ); ?>" class="block-link">Find a Dealer</a>
                    </div>

                <?php } ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
