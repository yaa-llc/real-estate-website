<div class="in-page-link-wrapper">

<?php if ( have_rows( 'dealer_in_page_navigation' ) ) : ?>
    <?php while ( have_rows( 'dealer_in_page_navigation' ) ) : the_row(); ?>
           <a href="#<?php the_sub_field( 'dealer_section_id' ); ?>" class="in-page-link"><?php the_sub_field( 'section_link_text' ); ?></a>



    <?php endwhile; ?>
<?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>
</div>

