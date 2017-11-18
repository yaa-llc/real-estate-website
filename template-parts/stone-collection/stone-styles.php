<section class="stone-style" id="<?php the_sub_field( 'name_of_stone_style' ); ?>">
    <?php the_title(); ?> <?php the_sub_field( 'name_of_stone_style' ); ?>
    <?php $photos_of_stones_images = get_sub_field( 'photos_of_stones' ); ?>
    <?php if ( $photos_of_stones_images ) :  ?>
        <?php foreach ( $photos_of_stones_images as $photos_of_stones_image ): ?>

                <img src="<?php echo $photos_of_stones_image['sizes']['thumbnail']; ?>" alt="<?php echo $photos_of_stones_image['alt']; ?>" />

            <p><?php echo $photos_of_stones_image['caption']; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
</section>
