<?php
/**
 * Template Name: Inspiration Gallery Page
 *
 * @package Pacific_Art_Stone
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
			while ( have_posts() ) : the_post();
				// If comments are open or we have at least one comment, load up the comment template.
                the_content();
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

    <select id="filters-countries" class="filter">
        <option value="*" selected="selected">all</option>
        <option value=".bolivia">bolivia</option>
        <option value=".cambodia">cambodia</option>
        <option value=".colombia">colombia</option>
        <option value=".ecuador">ecuador</option>
    </select>
    <select id="filters-program" class="filter">
        <option value="*" selected="selected">all</option>
        <option value=".medical">medical</option>
        <option value=".dental">dental</option>
    </select>

    <div id="container">
        <a href="http://unsplash.it/50/50" class="fancybox">
            <div class="item ecuador red medical" data-color="red">
                <p class="number">1</p>
                <p class="letters"></p>
            </div>
        </a>

        <a href="http://unsplash.it/51/48" class="fancybox" rel="gallery1">
            <div class="item blue ecuador moo dental" data-color="blue">
                <p class="number">2</p>
                <p class="letters"></p>
            </div>
        </a>

        <a href="http://unsplash.it/47/51" class="fancybox" rel="gallery1">
            <div class="item green ecuador dental " data-color="green">
                <p class="number">3</p>
                <p class="letters"></p>
            </div>
        </a>

        <a href="http://unsplash.it/51/50" class="fancybox" rel="gallery2">
            <div class="item yellow cambodia medical" data-color="yellow">
                <p class="number">4</p>
                <p class="letters"></p>
            </div>
        </a>

        <a href="http://unsplash.it/52/50" class="fancybox" rel="gallery2">
            <div class="item red  cambodia dental " data-color="red">
                <p class="number">5</p>
                <p class="letters"></p>
            </div>
        </a>


        <a href="http://unsplash.it/53/50" class="fancybox" rel="gallery2">
            <div class="item blue ecuador dental" data-color="blue">
                <p class="number"></p>
                <p class="letters"></p>
            </div>
        </a>



        <a href="http://unsplash.it/54/50" class="fancybox" rel="gallery3">
            <div class="item ecuador green medical" data-color="green">
                <p class="number"></p>
                <p class="letters"></p>
            </div>
        </a>


        <a href="http://unsplash.it/55/50" class="fancybox" rel="gallery3">
            <div class="item cambodia yellow medical" data-color="yellow">
                <p class="number"></p>
                <p class="letters"></p>
            </div>
        </a>



        <a href="http://unsplash.it/50/52" class="fancybox" rel="gallery3">
            <div class="item red bolivia medical" data-color="red">
                <p class="number"></p>
                <p class="letters"></p>
            </div>
        </a>


        <div class="item blue bolivia medical" data-color="blue">
            <p class="number"></p>
            <p class="letters"></p>
        </div>
        <div class="item ecuador green medical" data-color="green">
            <p class="number"></p>
            <p class="letters"></p>
        </div>
        <div class="item yellow colombia medical" data-color="yellow">
            <p class="number"></p>
            <p class="letters"></p>
        </div>
        <div class="item red colombia medical" data-color="red">
            <p class="number"></p>
            <p class="letters"></p>
        </div>
        <div class="item blue colombia medical" data-color="blue">
            <p class="number"></p>
            <p class="letters"></p>
        </div>
        <div class="item green colombia dental" data-color="green">
            <p class="number"></p>
            <p class="letters"></p>
        </div>
        <div class="item yellow colombia dental" data-color="yellow">
            <p class="number"></p>
            <p class="letters"></p>
        </div>
        <div class="item red colombia dental" data-color="red">
            <p class="number"></p>
            <p class="letters"></p>
        </div>
        <div class="item blue" data-color="blue">
            <p class="number"></p>
            <p class="letters"></p>
        </div>
        <div class="item green colombia dental" data-color="green">
            <p class="number"></p>
            <p class="letters"></p>
        </div>
        <div class="item yellow colombia dental" data-color="yellow">
            <p class="number"></p>
            <p class="letters"></p>
        </div>
    </div>

    <style>
        #container {
            border: 1px solid;
            padding: 3px;
        }
        .item {
            width: 70px;
            height: 70px;
            margin: 3px;
            float: left;
            color: white;
            font-weight: bold;
            text-shadow: 1px 1px black;
        }
        .item.next {
            width: 60px;
            height: 60px;
            border: 5px solid black;
            border-radius: 35px;
        }
        .red {
            background: red;
        }
        .blue {
            background: blue;
        }
        .green {
            background: green;
        }
        .yellow {
            background: yellow;
        }
        /* Start: Recommended Isotope styles */

        /**** Isotope Filtering ****/
        .isotope-item {
            z-index: 2;
        }
        .isotope-hidden.isotope-item {
            pointer-events: none;
            z-index: 1;
        }
        /**** Isotope CSS3 transitions ****/
        .isotope, .isotope .isotope-item {
            -webkit-transition-duration: 0.8s;
            -moz-transition-duration: 0.8s;
            transition-duration: 0.8s;
        }
        .isotope {
            -webkit-transition-property: height, width;
            -moz-transition-property: height, width;
            transition-property: height, width;
        }
        .isotope .isotope-item {
            -webkit-transition-property: -webkit-transform, opacity;
            -moz-transition-property: -moz-transform, opacity;
            transition-property: transform, opacity;
        }
        /**** disabling Isotope CSS3 transitions ****/
        .isotope.no-transition, .isotope.no-transition .isotope-item, .isotope .isotope-item.no-transition {
            -webkit-transition-duration: 0s;
            -moz-transition-duration: 0s;
            transition-duration: 0s;
        }
        /* End: Recommended Isotope styles */
    </style>


<?php
get_sidebar();
get_footer();
