<header class="home-slider">
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
        <?php if ( have_rows( 'slider_image_and_text' ) ) : ?>
            <?php while ( have_rows( 'slider_image_and_text' ) ) : the_row(); ?>
                <?php $slider_images = get_sub_field( 'slider_image' ); ?>
                <?php if ( $slider_images ) { ?>


                <?php } ?>

                <?php
                echo '<div class="carousel-cell gradient">';
                echo '<img src="' . $slider_images['url'] . '" alt="' . $slider_images['alt'] . '" />';
                echo '</div>';
                ?>
            <?php endwhile; ?>

        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>

    </div>

</header>
