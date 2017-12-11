<?php
/**
 * Template Name: Inspiration Gallery Page
 *
 * @package Pacific_Art_Stone
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <?php $projectQuery = new WP_Query(
                array(
                    'posts_per_page' => -1,
                    'post_type' => 'project',
                    //'project_type' => $projectTerms,
                    //'post__not_in' => array( $post->ID )
                )
            ); ?>

            <?php if ( $projectQuery->have_posts() ) : ?>

                <?php while ( $projectQuery->have_posts() ) : $projectQuery->the_post(); ?>
                    <section class="inspiration-gallery">
                        <div class="inner-wrap">
                            
                        </div>
                    </section>
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php else:  ?>

            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
