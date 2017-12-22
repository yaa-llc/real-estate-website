<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pacific_Art_Stone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.css">
    <link rel="stylesheet" href="js/woocommerce-FlexSlider-0d95828/flexslider.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pacific-art-stone' ); ?></a>


    <div class="nav-wrapper">
        <!-- Phone number and featured on houzz -->
        <div class="header-featured">
            <div class="header-phone">
                <a href="tel:<?php the_field( 'telephone_number', 'option' ); ?>"><?php the_field( 'telephone_number', 'option' ); ?></a>
            </div>

            <div class="houzz-button-wrapper">
                <?php if ( have_rows( 'featured_on_houzz_button', 'option' ) ) : ?>
                    <?php while ( have_rows( 'featured_on_houzz_button', 'option' ) ) : the_row(); ?>
                        <?php $button_image = get_sub_field( 'button_image' ); ?>
                        <?php if ( $button_image ) { ?>
                            <a href="<?php the_sub_field( 'houzz_url' ); ?>"><?php $button_image = get_sub_field( 'button_image' ); ?>
                                <?php if ( $button_image ) { ?>
                                    <img src="<?php echo $button_image['url']; ?>" alt="<?php echo $button_image['alt']; ?>" />
                                <?php } ?></a>
                        <?php } ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="branding-navigation-group">
            <div class="site-branding">
                <?php
                the_custom_logo();
                if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
                endif; ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'pacific-art-stone' ); ?></button>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ) );
                ?>
            </nav><!-- #site-navigation -->
        </div>
    </div>

    <!-- Getting the post thumbnail as making it the background image of the header -->
    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

    <header class="image-overlay" style="background:linear-gradient(rgba(51, 51, 60, 0.7),rgba(51, 51, 60, 0.7)), url('<?php echo $backgroundImg[0]; ?>')">
            <div class="inner-wrapper flex-title">
                <h1><?php the_title(); ?></h1>
            </div>
    </header>


	<div id="content" class="site-content">
