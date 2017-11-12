<?php
/**
 * Template for the home page flexible content
 */

?>

<?php
/**
 * Making template parts for home page flexible content
 *
 */
?>

<?php
/**
 * <?php if ( get_row_layout() == 'row_name' ) : ?>
 * <?php get_template_part('template-parts/path/to/template'); ?>
 */
?>

<?php if ( have_rows( 'home_page_content_blocks' ) ): ?>
    <?php while ( have_rows( 'home_page_content_blocks' ) ) : the_row(); ?>
        <?php if ( get_row_layout() == 'home_page_slider' ) : ?>
            <?php get_template_part('template-parts/home/home-slider'); ?>
        <?php elseif ( get_row_layout() == 'home_page_intro_section' ) : ?>
            <?php get_template_part('template-parts/home/home-intro'); ?>
        <?php elseif ( get_row_layout() == 'quick_links_section' ) : ?>
            <?php get_template_part('template-parts/home/quick-links'); ?>
        <?php elseif ( get_row_layout() == 'be_inspired_section' ) : ?>
            <?php the_sub_field( 'be_inspired_section_title' ); ?>
            <?php the_sub_field( 'be_inspired_cta_main_text' ); ?>
            <?php the_sub_field( 'be_inspired_cta_secondary_text' ); ?>
            <?php $be_inspired_cta_link = get_sub_field( 'be_inspired_cta_link' ); ?>
            <?php if ( $be_inspired_cta_link ) { ?>
                <a href="<?php echo $be_inspired_cta_link['url']; ?>" target="<?php echo $be_inspired_cta_link['target']; ?>"><?php echo $be_inspired_cta_link['title']; ?></a>
            <?php } ?>
            <?php $be_inspired_section_background_image = get_sub_field( 'be_inspired_section_background_image' ); ?>
            <?php if ( $be_inspired_section_background_image ) { ?>
                <?php echo wp_get_attachment_image( $be_inspired_section_background_image, 'full' ); ?>
            <?php } ?>
        <?php elseif ( get_row_layout() == 'stone_collection_section' ) : ?>
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
        <?php elseif ( get_row_layout() == 'instagram_feed' ) : ?>
            <?php the_sub_field( 'instragram_shortcode' ); ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php else: ?>
    <?php // no layouts found ?>
<?php endif; ?>