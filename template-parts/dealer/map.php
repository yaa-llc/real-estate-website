<?php

add_action( 'wp_enqueue_scripts', 'themeprefix_google_map_script' ); // Firing the JS and API

add_action( 'genesis_entry_content', 'themeprefix_add_marker_loop' );
// Output all dealers via a custom loop of the Dealer CPT and show the title and address field in the marker and link that to the Dealer CPT
function themeprefix_add_marker_loop() {

    $args = array(
        'post_type'      => 'dealer',
        'posts_per_page' => -1,
    );

    $the_query = new WP_Query($args);

    echo "<div class='map-container'><div class='wrap'><div class='acf-map'>";

    while ( $the_query->have_posts() ) : $the_query->the_post();

        $location = get_field('location');
        $title = get_the_title(); // Get the title

        if( !empty($location) ) {
            ?>

            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                <h4><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?></a></h4>
                <p class="address"><?php echo $location['address']; ?></p>

            </div>

            <?php

        }
    endwhile;
    echo '</div><</div></div>';
    wp_reset_postdata();
}

genesis();