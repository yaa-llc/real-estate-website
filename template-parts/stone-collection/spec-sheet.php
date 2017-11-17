<?php $stone_collection_spec_sheet = get_field( 'stone_collection_spec_sheet' ); ?>
<?php if ( $stone_collection_spec_sheet ) { ?>
    <a href="<?php echo $stone_collection_spec_sheet['url']; ?>"><?php echo $stone_collection_spec_sheet['filename']; ?></a>
<?php } ?>