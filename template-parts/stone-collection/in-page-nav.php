<div class="in-page-link-wrapper">
    <?php if ( have_rows( 'stone_collection_in_page_navigation' ) ) : ?>
        <?php while ( have_rows( 'stone_collection_in_page_navigation' ) ) : the_row(); ?>
            <?php if ( have_rows( 'stone_section_link' ) ) : ?>
                <?php while ( have_rows( 'stone_section_link' ) ) : the_row(); ?>
                    <a href="#<?php the_sub_field( 'stone_name_of_section' ); ?>" class="in-page-link"><?php the_sub_field( 'stone_name_of_section' ); ?></a>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <?php // no rows found ?>
    <?php endif; ?>

</div>

