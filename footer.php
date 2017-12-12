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
        <div class="inner-wrapper footer-wrapper">

            <!-- Collections Column -->
            <div class="footer-collection footer-column">
                <h4>Collections</h4>
                <?php if ( have_rows( 'collection_column', 'option' ) ) : ?>
                    <?php while ( have_rows( 'collection_column', 'option' ) ) : the_row(); ?>
                        <a href="<?php the_sub_field( 'stone_collection_footer_link' ); ?>"><?php the_sub_field( 'stone_collection_link_text' ); ?></a>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
            </div>

            <!-- Resources Column -->
            <div class="footer-resources footer-column">
                <h4>Resources</h4>
                <?php if ( have_rows( 'resources_column', 'option' ) ) : ?>
                    <?php while ( have_rows( 'resources_column', 'option' ) ) : the_row(); ?>
                        <?php $footer_inspiration_gallery_link = get_sub_field( 'footer_inspiration_gallery_link' ); ?>
                        <?php if ( $footer_inspiration_gallery_link ) { ?>
                            <a href="<?php echo $footer_inspiration_gallery_link['url']; ?>" target="<?php echo $footer_inspiration_gallery_link['target']; ?>"><?php the_sub_field( 'inspiration_link_text' ); ?></a>
                        <?php } ?>
                        <a href="<?php the_sub_field( 'dealer_page_link' ); ?>"><?php the_sub_field( 'dealer_link_text' ); ?></a>

                        <?php $footer_brochure_file = get_sub_field( 'footer_brochure_file' ); ?>
                        <?php if ( $footer_brochure_file ) { ?>
                            <a href="<?php echo $footer_brochure_file['url']; ?>"><?php the_sub_field( 'brochure_download_text' ); ?></a>
                        <?php } ?>

                        <a href="<?php the_sub_field( 'about_page_link' ); ?>"><?php the_sub_field( 'about_page_link_text' ); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <!-- Spacer Div -->
            <div class="footer-column spacer">
               <!-- Space -->
           </div>

            <!-- Showroom Column -->
            <div class="footer-showroom footer-column">
                <h4>Showroom</h4>
                <?php if ( have_rows( 'showroom_column', 'option' ) ) : ?>
                    <?php while ( have_rows( 'showroom_column', 'option' ) ) : the_row(); ?>
                        <ul>
                            <li><?php the_sub_field( 'address_line_1' ); ?></li>
                            <li><?php the_sub_field( 'address_line_2' ); ?></li>
                            <li><?php the_sub_field( 'hours' ); ?></li>
                        </ul>




                    <?php endwhile; ?>
                <?php endif; ?>

            <!-- Social -->

                <h4>Follow Us</h4>
                <?php if ( have_rows( 'social_media_accounts', 'option' ) ) : ?>
                    <?php while ( have_rows( 'social_media_accounts', 'option' ) ) : the_row(); ?>
                        <a href="<?php the_sub_field( 'social_media_link' ); ?>"><?php the_sub_field( 'social_media_icon' ); ?></a>

                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
            </div>

            <!-- Contact Us -->
            <div class="footer-contact footer-column">
                <h4>Contact Us</h4>
                <?php if ( have_rows( 'contact_us_column', 'option' ) ) : ?>
                    <?php while ( have_rows( 'contact_us_column', 'option' ) ) : the_row(); ?>
                        <ul>
                            <li>
                                <a href="tel:<?php the_sub_field( 'footer_telephone' ); ?>"><?php the_sub_field( 'footer_telephone' ); ?></a>
                            </li>
                            <li><?php the_sub_field( 'footer_fax' ); ?></li>
                            <li>
                                <a href="mailto:<?php the_sub_field( 'email_us' ); ?>">Email Us</a>
                            </li>
                            <li>
                                <a href="mailto:<?php the_sub_field( 'dealer_inquiries' ); ?>">Dealer Inquiries</a>
                            </li>
                            <li>
                                <a href="mailto:<?php the_sub_field( 'returns_and_warranties' ); ?>">Returns + Warranties</a>
                            </li>
                        </ul>







                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>

        <div class="site-info inner-wrapper">
            <ul>
                <li>&copy; <?php echo date("Y"); ?> Pacific Art Stone</li>
                <li>Website design by <a href="http://kennedyanderson.ca">Kennedy Anderson Creative Group</a></li>
            </ul>
        </div><!-- .site-info -->

    </footer><!-- #colophon -->

<?php wp_footer(); ?>


<script>
    // scripts.js, plugins.js and jquery are enqueued in functions.php
    /* Google Analytics! */
    var _gaq=[["_setAccount","UA-105751048-1"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
        g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
        s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>
<script>
    jQuery('.sub-menu').parent().find('a:first').removeAttr('href').css('cursor','default');
</script>

<script>
    jQuery(document).ready(function(){
// Add smooth scrolling to all links
        jQuery("a").on('click', function(event) {

// Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                jQuery('html, body').animate({
                    scrollTop: jQuery(hash).offset().top
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>

</body>
</html>
