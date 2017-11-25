<?php $stone_collection_brochure = get_field( 'stone_collection_brochure' ); ?>
<?php if ( $stone_collection_brochure ) { ?>
    <a href="<?php echo $stone_collection_brochure['url']; ?>" class="block-link featured">Download Brochure</a>
<?php } ?>