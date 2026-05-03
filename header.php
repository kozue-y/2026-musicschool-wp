<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="display: none;">
    <?php wp_body_open(); ?>
    <!-- ページごとのクラス自動付与・WordPress推奨フック -->
    <div class="container">
        <!-- header -->
        <header class="l-header" id="header">
            <div class="l-header-inner">
                <div class="c-site-title">
                    <?php if ( is_front_page() || is_search() ) : ?>
                    <h1>
                        <?php else : ?>
                        <p>
                            <?php endif; ?>
                            <a href="<?php echo esc_url( home_url('/') ); ?>">
                                <span class="c-site-title__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/sitetitle_icon.svg"
                                        alt="きたむらミュージックスクール">
                                </span>
                                <span class="c-site-title__text">きたむら<br class="u-pc-only"><span
                                        class="c-site-title__text--sub">ミュージックスクール</span></span>
                            </a>
                            <?php if ( is_front_page() || is_search() ) : ?>
                    </h1>
                    <?php else : ?>
                    </p>
                    <?php endif; ?>
                </div>
                <!-- PC用ナビ -->
                <div class="c-global-nav u-pc-only">
                    <nav aria-label="ヘッダーナビゲーション">
                        <?php
                        wp_nav_menu(
                            array(
                                'menu_class' => 'c-global-nav__list',
                                'theme_location' => 'primary',
                                'container' => false,
                                )
                            );
                        ?>
                    </nav>
                </div>
            </div>

            <!-- ハンバーガーボタンSP用 -->
            <button type="button" id="hamburger-block" class="c-hamburger u-sp-only">
                <span class="c-hamburger__inner">
                    <span class="c-hamburger__line"></span>
                    <span class="c-hamburger__line"></span>
                    <span class="c-hamburger__line"></span>
                </span>
            </button>

            <!-- ハンバーガーナビゲーションSP用 -->
            <div class="c-drawer-menu u-sp-only" id="js-drawer">
                <nav aria-label="ヘッダーナビゲーション">
                    <?php
                wp_nav_menu(
                    array(
                        'menu_class'     => 'c-drawer-menu__list',
                        'theme_location' => 'sp_header',
                        'container'      => false,
                        )
                    );
                ?>
                </nav>
            </div>
        </header>