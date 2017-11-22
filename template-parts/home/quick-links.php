
<?php if ( have_rows( 'quick_link' ) ) : ?>
    <?php while ( have_rows( 'quick_link' ) ) : the_row(); ?>
        <?php the_sub_field( 'link' ); ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>