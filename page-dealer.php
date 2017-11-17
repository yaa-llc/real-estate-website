<?php
/**
 * Template Name: Dealer Page
 *
 * @package Pacific_Art_Stone
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <?php if ( have_rows( 'master_distributors_list' ) ) : ?>
                <?php while ( have_rows( 'master_distributors_list' ) ) : the_row(); ?>
                    <?php the_sub_field( 'master_distributor_name' ); ?>
                    <?php $master_distributor_logo = get_sub_field( 'master_distributor_logo' ); ?>
                    <?php if ( $master_distributor_logo ) { ?>
                        <img src="<?php echo $master_distributor_logo['url']; ?>" alt="<?php echo $master_distributor_logo['alt']; ?>" />
                    <?php } ?>
                    <?php $master_distributor_address = get_sub_field( 'master_distributor_address' ); ?>
                    <?php if ( $master_distributor_address ) { ?>
                        <?php echo $master_distributor_address['address']; ?>
                        <?php echo $master_distributor_address['lat']; ?>
                        <?php echo $master_distributor_address['lng']; ?>
                    <?php } ?>
                    <?php the_sub_field( 'master_distributor_phone_number' ); ?>
                    <?php the_sub_field( 'master_distributor_website' ); ?>

                    <!-- I will do the map LATER -->

                    <?/*php
                    if( !empty($master_distributor_address) ):
                        ?>
                        <!-- <div class="acf-map">
                            <div class="marker" data-lat="<?php echo $master_distributor_address['lat']; ?>" data-lng="<?php echo $master_distributor_address['lng']; ?>"></div>
                        </div> -->

                    <?php endif; */?>

                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
