<?php if ( have_rows( 'section_link' ) ) : ?>
    <?php while ( have_rows( 'section_link' ) ) : the_row(); ?>
        <a href="#<?php the_sub_field( 'name_of_section' ); ?>"><?php the_sub_field( 'link_text_and_label' ); ?></a>
    <?php endwhile; ?>
<?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>