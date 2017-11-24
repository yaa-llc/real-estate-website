<?/*php

<?php if ( have_rows( 'distributors' ) ) : ?>
    <?php while ( have_rows( 'distributors' ) ) : the_row(); ?>
        <?php if ( have_rows( 'master_distributors' ) ) : ?>
            <?php while ( have_rows( 'master_distributors' ) ) : the_row(); ?>

                <?php $master_distributor_address = get_sub_field( 'master_distributor_address' );
                if( !empty($master_distributor_address) ):
                ?>
                <div class="acf-map">
                    <div class="marker" data-lat="<?php echo $master_distributor_address['lat']; ?>" data-lng="<?php echo $master_distributor_address['lng']; ?>"></div>
                </div>
                <?php endif; ?>

                <?php the_sub_field( 'master_distributor_name' ); ?>
                <?php the_sub_field( 'master_distributor_phone_number' ); ?>
                <?php the_sub_field( 'master_distributor_website' ); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>

        <?php if ( have_rows( 'distributors' ) ) : ?>
            <?php while ( have_rows( 'distributors' ) ) : the_row(); ?>
                <?php $distributor_address = get_sub_field( 'distributor_address' ); ?>

                <div class="acf-map">
                    <div class="marker" data-lat="<?php echo $distributor_address['lat']; ?>" data-lng="<?php echo $distributor_address['lng']; ?>"></div>
                </div>


                <?php the_sub_field( 'distributor_name' ); ?>

                <?php if ( $distributor_address ) { ?>
                    <?php echo $distributor_address['address']; ?>
                    <?php echo $distributor_address['lat']; ?>
                    <?php echo $distributor_address['lng']; ?>
                <?php } ?>
                <?php the_sub_field( 'distributor_phone_number' ); ?>
                <?php the_sub_field( 'distributor_website' ); ?>

                <?php // distributor_type ( value )
                $distributor_type_array = get_sub_field( 'distributor_type' );
                if ( $distributor_type_array ):
                    foreach ( $distributor_type_array as $distributor_type_item ):
                        echo $distributor_type_item;
                    endforeach;
                endif; ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

    */?>


<?php if ( have_rows( 'distributors' ) ) : ?>
    <?php while ( have_rows( 'distributors' ) ) : the_row(); ?>
        <?php the_sub_field( 'distributor_name' ); ?>


        <?php // distributor_type ( value )
        $distributor_type_array = get_sub_field( 'distributor_type' );
        if ( $distributor_type_array ):
            foreach ( $distributor_type_array as $distributor_type_item ):
                echo $distributor_type_item;
            endforeach;
        endif; ?>


        <?php $distributor_address = get_sub_field( 'distributor_address' ); ?>

<!--        <div class="acf-map">-->
<!--            <div class="marker" data-lat="--><?php //echo $distributor_address['lat']; ?><!--" data-lng="--><?php //echo $distributor_address['lng']; ?><!--"></div>-->
<!--        </div>-->

        <?php if ( $distributor_address ) { ?>
            <?php echo $distributor_address['address']; ?>
            <?//php echo $distributor_address['lat']; ?>
            <?//php echo $distributor_address['lng']; ?>
        <?php } ?>
        <?php the_sub_field( 'distributor_phone_number' ); ?>
        <?php the_sub_field( 'distributor_website' ); ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>

