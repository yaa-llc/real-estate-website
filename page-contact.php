<?php
/**
 * Template Name: Contact Page
 *
 * @package Pacific_Art_Stone
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <section class="contact-details">
                <div class="contact-sidebar">
                    <?php the_field('contact_details'); ?>
                </div>

                <div class="contact-form-wrapper">
                    <?php gravity_form( 1, false, false, false, '', false ); ?>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

    <section class="instagram">
        <?php the_field( 'instragram_shortcode' ); ?>
    </section>

<?php
get_footer();
