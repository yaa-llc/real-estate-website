<header class="home-slider">
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "adaptiveHeight": true, "setGallerySize": true, "imagesLoaded": true }'>
        <?php if ( have_rows( 'slider_image_and_text' ) ) : ?>
            <?php while ( have_rows( 'slider_image_and_text' ) ) : the_row(); ?>
                <?php $slider_images = get_sub_field( 'slider_image' ); ?>
                <?php if ( $slider_images ) { ?>


                <?php } ?>

                <?php
                $collectionLink = get_sub_field('link_to_page');
                echo '<div class="carousel-cell">';
                echo '<img src="' . $slider_images['url'] . '" alt="' . $slider_images['alt'] . '" />';
                echo '<div class="text-container">';//container for text
                echo '<div class="slider-text-wrapper">'; //the wrapper for the text content
                echo '<h1 class="slider-headline">';
                echo  the_sub_field('slider_headline');
                echo '</h1>';
                echo '<p class="banner-text">';
                echo  the_sub_field( 'slider_description' );
                echo '</p>';
                echo '<a href="'.$collectionLink.'" class="block-link">View Collection</a>';
                echo '</div>'; //slider-text-wrapper
                echo '</div>';//making a container to postion text algined with nav
                echo '</div>'; //carousel-cell
                ?>
            <?php endwhile; ?>

        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>

    </div>

</header>
