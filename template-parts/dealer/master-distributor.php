<?php while ( have_rows( 'master_distributors' ) ) : the_row(); ?>
    <?php the_sub_field( 'master_distributor_name' ); ?>
    <?php $master_distributor_address = get_sub_field( 'master_distributor_address' ); ?>
    <?php if ( $master_distributor_address ) { ?>
        <?php echo $master_distributor_address['address']; ?>
        <?php echo $master_distributor_address['lat']; ?>
        <?php echo $master_distributor_address['lng']; ?>
    <?php } ?>
    <?php the_sub_field( 'master_distributor_phone_number' ); ?>
    <?php the_sub_field( 'master_distributor_website' ); ?>
<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

