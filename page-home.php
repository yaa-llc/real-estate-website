<?php
/**
 * Template Name: Home Page
 *
 * @package Pacific_Art_Stone
 */

?>
  <?php
    if ( is_page('home')){
            get_header('home');
            //echo '<h1>home</h1>';
        }

        else{

            get_header();// Calls the default header is any other page is created

        }?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <?php if ( have_rows( 'home_page_content_blocks' ) ): ?>
                <?php while ( have_rows( 'home_page_content_blocks' ) ) : the_row(); ?>

                    <?php if ( get_row_layout() == 'home_page_slider' ) : ?>
                        <?php get_template_part('template-parts/home/home-slider'); ?>

                    <?php elseif ( get_row_layout() == 'home_page_intro_section' ) : ?>
                        <?php get_template_part('template-parts/home/home-intro'); ?>

                    <?php elseif ( get_row_layout() == 'quick_links_section' ) : ?>
                        <?php get_template_part('template-parts/home/quick-links'); ?>

                    <?php elseif ( get_row_layout() == 'be_inspired_section' ) : ?>
                        <?php get_template_part('template-parts/home/be-inspired'); ?>

                    <?php elseif ( get_row_layout() == 'stone_collection_section' ) : ?>
                        <?php get_template_part('template-parts/home/stone-collection'); ?>

                    <?php elseif ( get_row_layout() == 'instagram_feed' ) : ?>
                        <?php get_template_part('template-parts/home/instagram'); ?>

                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php // no layouts found ?>
            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
