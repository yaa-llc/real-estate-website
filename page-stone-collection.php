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

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

            <!-- the page title, main content & thumbnail, spec sheet download -->
            <section class="primary-content primary-text">
                <?php get_template_part('template-parts/stone-collection/stone-nav'); ?>
            <div class="inner-wrapper">
                <div class="stone-collection-wrapper content-wrapper">
                    <div class="half text">
                        <?php the_content(); ?>
                    </div>

                    <div class="half stone-collection-image-wrapper">
                        <?php the_post_thumbnail(); ?>
                    </div>

                </div>
            </div>


            </section>


            <?php if ( have_rows( 'stone_collection_galleries' ) ): ?>
                <?php while ( have_rows( 'stone_collection_galleries' ) ) : the_row(); ?>

                    <!-- Each group of styled stone -->
                    <?php if ( get_row_layout() == 'stone_styles' ) : ?>
                       <?php get_template_part('template-parts/stone-collection/stone-styles'); ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php // no layouts found ?>
            <?php endif; ?>

            <section class="collection-cta">
                <?php get_template_part('template-parts/stone-collection/brochure'); ?>
                <a href="<?php the_permalink(10); ?>" class="block-link featured">Inspiration Gallery</a>
                <a href="<?php the_permalink(16); ?>" class="block-link featured">Contact Us</a>
            </section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
