<!-- getting the variable for background image -->

<?php $stone_collection_featured_image = get_sub_field( 'stone_collection_featured_image' ); ?>

<section class="featured-collection">
    <div class="inner-wrapper">
        <div class="feature-wrapper">
            <div class="featured-text-wrapper">
                <h4><?php the_sub_field( 'section_title' ); ?></h4>
                <h2><?php $post_object = get_sub_field( 'stone_collection' ); ?></h2>
                <p><?php the_sub_field( 'stone_collection_description' ); ?></p>
                <?php if ( $post_object ): ?>
                    <?php $post = $post_object; ?>
                    <?php setup_postdata( $post ); ?>
                    <a href="<?php the_permalink(); ?>" class="block-link featured"><?php the_title(); ?></a>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <div class="featured-image-wrapper">
                <?php $stone_collection_featured_image = get_sub_field( 'stone_collection_featured_image' ); ?>
                <?php if ( $stone_collection_featured_image ) { ?>
                <img src="<?php echo $stone_collection_featured_image['url']; ?>" alt="<?php echo $stone_collection_featured_image['alt']; ?>" />
            </div>
            <?php } ?>
        </div>
    </div>
</section>
