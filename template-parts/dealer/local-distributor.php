<?php if ( have_rows( 'local_distributors_list' ) ) : ?>
    <?php while ( have_rows( 'local_distributors_list' ) ) : the_row(); ?>
        <?php the_sub_field( 'Local_distributor_name' ); ?>
        <?php $local_distributor_logo = get_sub_field( 'local_distributor_logo' ); ?>
        <?php if ( $local_distributor_logo ) { ?>
            <img src="<?php echo $local_distributor_logo['url']; ?>" alt="<?php echo $local_distributor_logo['alt']; ?>" />
        <?php } ?>
        <?php $local_distributor_address = get_sub_field( 'local_distributor_address' ); ?>
        <?php if ( $local_distributor_address ) { ?>
            <?php echo $local_distributor_address['address']; ?>
            <?php echo $local_distributor_address['lat']; ?>
            <?php echo $local_distributor_address['lng']; ?>
        <?php } ?>
        <?php the_sub_field( 'local_distributor_phone_number' ); ?>
        <?php the_sub_field( 'local_distributor_website' ); ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>