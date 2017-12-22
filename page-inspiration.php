<?php
/**
 * Template Name: Inspiration Page
 *
 * @package Pacific_Art_Stone
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <?php
            while ( have_posts() ) : the_post();
                //get_template_part('template-parts/dealer/distributor');
                //get_template_part('template-parts/dealer/local-distributor');

                the_content();
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

            <?//php wp_dropdown_categories( 'taxonomy=portfolio-filter' ); ?>



		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
