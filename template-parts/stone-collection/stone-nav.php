<?/*php
// your taxonomy name
$tax = 'style_of_stone';

// get the terms of taxonomy
$terms = get_terms( $tax, $args = array(
    'hide_empty' => false, // do not hide empty terms
));

// loop through all terms
foreach( $terms as $term ) {

    // Get the term link
    $term_link = get_term_link( $term );

    if( $term->count > 0 )
        // display link to term archive
        echo '<a href="' . esc_url( $term_link ) . '">' . $term->name .'</a>';

    elseif( $term->count !== 0 )
        // display name
        echo '' . $term->name .'';
}
 */?>

<div class="stone-nav-wrapper">
    <?php
    // your taxonomy name
    $tax = 'style_of_stone';

    // get the terms of taxonomy
    $terms = get_terms( $tax, $args = array(
        'hide_empty' => false, // do not hide empty terms
    ));

    // loop through all terms
    foreach( $terms as $term ) {

        // Get the term link
        //$term_link = get_term_link( $term );

        if( $term->count > 0 )

            echo '<a href="#' . $term->name . '" class="stone-nav-link smooth-scroll">' .$term->name . '</a>';

        elseif( $term->count !== 0 )
            // display name
            echo '' . $term->name .'';
    }
    ?>
</div>

