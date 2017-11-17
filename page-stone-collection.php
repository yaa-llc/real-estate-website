<?php
/**
 * Template Name: Stone Collection Page
 *
 * @package Pacific_Art_Stone
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>


            <?php if ( have_rows( 'stone_collection_information' ) ): ?>
                <?php while ( have_rows( 'stone_collection_information' ) ) : the_row(); ?>
                    <?php if ( get_row_layout() == 'link_group' ) : ?>
                        <?php $stone_collection_brochure = get_sub_field( 'stone_collection_brochure' ); ?>
                        <?php if ( $stone_collection_brochure ) { ?>
                            <a href="<?php echo $stone_collection_brochure['url']; ?>"><?php echo $stone_collection_brochure['filename']; ?></a>
                        <?php } ?>
                        <?php the_sub_field( 'inspiration_gallery' ); ?>
                    <?php elseif ( get_row_layout() == 'stone_styles' ) : ?>
                        <?php the_sub_field( 'name_of_stone_style' ); ?>
                        <?php $photos_of_stones_images = get_sub_field( 'photos_of_stones' ); ?>
                        <?php if ( $photos_of_stones_images ) :  ?>
                            <?php foreach ( $photos_of_stones_images as $photos_of_stones_image ): ?>
                                <a href="<?php echo $photos_of_stones_image['url']; ?>">
                                    <img src="<?php echo $photos_of_stones_image['sizes']['thumbnail']; ?>" alt="<?php echo $photos_of_stones_image['alt']; ?>" />
                                </a>
                                <p><?php echo $photos_of_stones_image['caption']; ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php // no layouts found ?>
            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
