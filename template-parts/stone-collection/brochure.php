<?php $stone_collection_brochure = get_field( 'stone_collection_brochure' ); ?>
<?php if ( $stone_collection_brochure ) { ?>
    <a href="<?php echo $stone_collection_brochure['url']; ?>"><?php echo $stone_collection_brochure['filename']; ?></a>
<?php } ?>