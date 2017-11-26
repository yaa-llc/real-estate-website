<?php
/**
 * Template Name: Inspiration Gallery Page
 *
 * @package Pacific_Art_Stone
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
			while ( have_posts() ) : the_post();
				// If comments are open or we have at least one comment, load up the comment template.
                the_content();
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
