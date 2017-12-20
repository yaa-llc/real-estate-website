<?php
/**
 * Template Name: About Page
 *
 * @package Pacific_Art_Stone
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <?php if ( have_rows( 'page_content' ) ): ?>
                <?php while ( have_rows( 'page_content' ) ) : the_row(); ?>
                    <?php if ( get_row_layout() == 'navigation_to_page_sections' ) : ?>
                        <?php get_template_part('template-parts/about/in-page-nav'); ?>
                    <?php elseif ( get_row_layout() == 'text_and_image_section' ) : ?>
                        <?php get_template_part('template-parts/about/primary-content'); ?>

                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php // no layouts found ?>
            <?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
