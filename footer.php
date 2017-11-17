<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pacific_Art_Stone
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="footer-collection footer-column">
            <?php if ( have_rows( 'collection_column', 'option' ) ) : ?>
                <?php while ( have_rows( 'collection_column', 'option' ) ) : the_row(); ?>
                    <?php the_sub_field( 'stone_collection_footer_link' ); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        </div>

        <div class="footer-resources footer-column">
            <?php if ( have_rows( 'resources_column', 'option' ) ) : ?>
                <?php while ( have_rows( 'resources_column', 'option' ) ) : the_row(); ?>
                    <?php the_sub_field( 'resources_footer_link' ); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        </div>

        <div class="footer-showroom footer-column">

            <?php if ( have_rows( 'showroom_column', 'option' ) ) : ?>
                <?php while ( have_rows( 'showroom_column', 'option' ) ) : the_row(); ?>
                    <?php the_sub_field( 'address_line_1' ); ?>
                    <?php the_sub_field( 'address_line_2' ); ?>
                    <?php the_sub_field( 'hours' ); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="footer-contact footer-column">
            <?php if ( have_rows( 'contact_us_column', 'option' ) ) : ?>
                <?php while ( have_rows( 'contact_us_column', 'option' ) ) : the_row(); ?>
                    <?php the_sub_field( 'footer_telephone' ); ?>
                    <?php the_sub_field( 'footer_fax' ); ?>
                    <?php the_sub_field( 'email_us' ); ?>
                    <?php the_sub_field( 'dealer_inquiries' ); ?>
                    <?php the_sub_field( 'returns_and_warranties' ); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pacific-art-stone' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'pacific-art-stone' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'pacific-art-stone' ), 'pacific-art-stone', '<a href="http://kennedyanderson.ca">Kennedy Anderson Group - Yaa Otchere</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
    // scripts.js, plugins.js and jquery are enqueued in functions.php
    /* Google Analytics! */
    var _gaq=[["_setAccount","UA-105751048-1"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
        g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
        s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

</body>
</html>
