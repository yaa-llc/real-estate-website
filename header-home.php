<?php
/**
 * The home page header for our theme
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
                    <?php $custom_home_page_logo = get_field( 'custom_home_page_logo', 'option' ); ?>
                    <?php if ( $custom_home_page_logo ) { ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php echo $custom_home_page_logo['url']; ?>" alt="<?php echo $custom_home_page_logo['alt']; ?>" class="custom-logo"/>
                        </a>
                    <?php } ?>

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
