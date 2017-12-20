<section class="primary-text">
    <div class="inner-wrapper about">
        <div class="content-wrapper">
            <?php if ( get_row_layout() == 'text_and_image_section' ) : ?>
                <div class="half about-text text">
                    <?php the_sub_field( 'text_content' ); ?>
                </div>

                <div class="half about-image">
                    <?php $image_content = get_sub_field( 'image_content' ); ?>
                    <?php if ( $image_content ) { ?>
                    <img src="<?php echo $image_content['url']; ?>" alt="<?php echo $image_content['alt']; ?>" />
                </div>

                <?php } ?>
            <?php endif; ?>
        </div>

    </div>
</section>

