<!-- getting the variable for background image -->

<?php $stone_collection_background_image = get_sub_field( 'stone_collection_row_background_image', 'full' ); ?>

<section class="featured-collection" style="background:url('<?php echo $stone_collection_background_image['url']; ?>')">
    <div class="inner-wrapper">
        <div class="feature-wrapper content-wrapper">
            <!-- adding a class of half to see if I can make this easier for media queries. ie) at phone half = 75% -->
            <div class="featured-text-wrapper half text">
                <h4><?php the_sub_field( 'section_title' ); ?></h4>
                <?php $post_object = get_sub_field( 'stone_collection' ); ?>
                <?php if ( $post_object ): ?>
                    <?php $post = $post_object; ?>
                    <?php setup_postdata( $post ); ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_sub_field( 'stone_collection_description' ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="block-link featured"><?php the_sub_field( 'stone_collection_link_text' ); ?></a>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <div class="featured-image-wrapper half">
                <?php $stone_collection_featured_image = get_sub_field( 'stone_collection_featured_image' ); ?>
                <?php if ( $stone_collection_featured_image ) { ?>
                <img src="<?php echo $stone_collection_featured_image['url']; ?>" alt="<?php echo $stone_collection_featured_image['alt']; ?>" />
            </div>
            <?php } ?>
        </div>
    </div>
</section>
