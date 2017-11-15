<?php the_sub_field( 'section_title' ); ?>
<?php $post_object = get_sub_field( 'stone_collection' ); ?>
<?php if ( $post_object ): ?>
    <?php $post = $post_object; ?>
    <?php setup_postdata( $post ); ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
<?php the_sub_field( 'stone_collection_description' ); ?>
<?php $stone_collection_featured_image = get_sub_field( 'stone_collection_featured_image' ); ?>
<?php if ( $stone_collection_featured_image ) { ?>
    <img src="<?php echo $stone_collection_featured_image['url']; ?>" alt="<?php echo $stone_collection_featured_image['alt']; ?>" />
<?php } ?>