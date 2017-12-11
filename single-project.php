<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Pacific_Art_Stone
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>


            <?php if ( have_rows( 'project_gallery' ) ) : ?>
                <?php while ( have_rows( 'project_gallery' ) ) : the_row(); ?>
                    <?php $photo_of_project = get_sub_field( 'photo_of_project' ); ?>
                    <?php if ( $photo_of_project ) { ?>
                        <img src="<?php echo $photo_of_project['url']; ?>" alt="<?php echo $photo_of_project['alt']; ?>" />
                    <?php } ?>
                    <?php $stone_collection_of_gallery_image_ids = get_sub_field( 'stone_collection_of_gallery_image' ); ?>
                    <?php // var_dump( $stone_collection_of_gallery_image_ids ); ?>
                    <?php $stone_style_of_gallery_image_ids = get_sub_field( 'stone_style_of_gallery_image' ); ?>

                    <?/*php $terms = get_terms( array(
                        'taxonomy' => 'post_tag',
                        'hide_empty' => false,
                    ) );
                    */?>

                    <?//php $terms = get_the_terms($post, 'taxonomy') ?>

                    <?/*php
                    foreach ($terms as $term) {
                        echo $term;
                    }
                    */?>

                    <?php
                    // first we grab an array of all the terms asociated with this post
                    $collections = get_the_terms($post, 'collection');
                    // we use our dump function to see what is in the variable
                    //dump($collections);
                    ?>
                    <?php /* start an unordered list */ ?>
                    <ul>
                        <?php
                        // we use the for each loop to iterate over the technologies variable
                        // each item in the array is put into a $technology variable
                        foreach ($collections as $collection) {
                            // create an <li> for each one with the name as the elemnt text
                            echo '<li>'.$collection->name.'</li>';
                        } /* end foreach */ ?>
                    </ul> <?//php end UL tag?>

                    <?php
                    // first we grab an array of all the terms asociated with this post
                    $styles = get_the_terms($post, 'style_of_stone');
                    // we use our dump function to see what is in the variable
                    //dump($collections);
                    ?>
                    <?php /* start an unordered list */ ?>
                    <ul>
                        <?php
                        // we use the for each loop to iterate over the technologies variable
                        // each item in the array is put into a $technology variable
                        foreach ($styles as $style) {
                            // create an <li> for each one with the name as the elemnt text
                            echo '<li>'.$style->name.'</li>';
                        } /* end foreach */ ?>
                    </ul> <?//php end UL tag?>



                    <?php // var_dump( $stone_style_of_gallery_image_ids ); ?>
                    <?php the_sub_field( 'blend_of_stone_for_gallery_image' ); ?>
                    <p><?php the_sub_field( 'description_for_gallery_image' ); ?></p>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
