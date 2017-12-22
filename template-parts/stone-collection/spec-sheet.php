<?php //$stone_collection_spec_sheet = get_field( 'stone_collection_spec_sheet' ); ?>
<?php //if ( $stone_collection_spec_sheet ) { ?>
<!--    <a href="--><?php //echo $stone_collection_spec_sheet['url']; ?><!--" class="featured block-link">--><?php //echo $stone_collection_spec_sheet['filename']; ?><!--</a>-->
<?php //} ?>

<?php $stone_collection_spec_sheet = get_field( 'stone_collection_spec_sheet' ); ?>
<?php if ( $stone_collection_spec_sheet ) { ?>
    <a href="<?php echo $stone_collection_spec_sheet['url']; ?>" class="block-link featured">Download Spec Sheet</a>
<?php } ?>
