<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package style
 */

?>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=5.0">
    <meta name="language" content="Russian">
    <meta name="robots" content="index, follow">
    <link rel="shortlink" href="https://rockncode.net/">
    <link rel="canonical" href="https://rockncode.net/">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="120x120" href="img/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#c6ff00">
    <meta name="msapplication-TileColor" content="#c6ff00">
    <meta name="theme-color" content="#0D0C0F">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class('main__body'); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header class="header">
            <!-- Navbar -->
            <div class="container">
                <nav>
                    <div class="navbar-wrapper">
                        <div class="navbar">
                            <div class="logo">
                                <a href="<?php echo home_url(); ?>">
                                    <img src="/wp-content/themes/style/img/logo-rockncode-new.svg"
                                        alt="логотип веб-студии rockncode" title="логотип веб-студии rockncode">
                                </a>
                            </div>

                            <?php
                            wp_nav_menu([
                                'theme_location' => 'main_menu',
                                'menu_class' => 'menu',
                                'container' => false,
                                'fallback_cb' => false,
                                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                                'walker' => new Walker_Nav_Menu(), // или свой кастомный если нужен
                            ]);
                            ?>


                            <!-- <div class="header__btn">
                                <button class="btn btn--light" id="modal-btn">Рассчитать стоимость</button>
                            </div> -->


                            <div class="burger">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
        </header>