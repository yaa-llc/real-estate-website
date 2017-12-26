<?php
/**
 * Template Name: Dealer Page
 *
 * @package Pacific_Art_Stone
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <?php
            while ( have_posts() ) : the_post();


                get_template_part('template-parts/dealer/dealer-navigation');
                get_template_part('template-parts/dealer/distributor');

                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>



		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
