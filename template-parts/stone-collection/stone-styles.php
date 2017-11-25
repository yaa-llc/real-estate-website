<section class="stone-style" id="<?php the_sub_field( 'name_of_stone_style' ); ?>">
    <div class="inner-wrapper">
        <div class="stone-style-wrapper">

            <h4><?php the_title(); ?> <?php the_sub_field( 'name_of_stone_style' ); ?></h4>
            <div class="content-wrapper flex-stone-collection">
                <?php $photos_of_stones_images = get_sub_field( 'photos_of_stones' ); ?>
                <?php if ( $photos_of_stones_images ) :  ?>
                <?php foreach ( $photos_of_stones_images as $photos_of_stones_image ): ?>

                <div class="individual-stone-style">
                    <img src="<?php echo $photos_of_stones_image['sizes']['collection-stone-thumb']; ?>" alt="<?php echo $photos_of_stones_image['alt']; ?>" />
                    <h4><?php echo $photos_of_stones_image['caption']; ?></h4>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
