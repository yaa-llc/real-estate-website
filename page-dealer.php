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


                //get_template_part('template-parts/dealer/master-distributor');
                //get_template_part('template-parts/dealer/local-distributor');

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

            <a href="http://via.placeholder.com/350x150" data-fancybox data-caption="My caption">
                <img src="http://via.placeholder.com/350x150" alt="" />
            </a>


		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
