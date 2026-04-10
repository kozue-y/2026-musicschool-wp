<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>きたむらミュージックスクール</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/sitetitle_icon.svg" type="image/svg">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="ミュージックスクールご紹介サイトです">
    <meta name="keywords" content="ミュージックスクール, レッスン">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
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
                        <ul class="c-global-nav__list">
                            <li><a href="plan.html">料金</a></li>
                            <li><a href="blog.html">ブログ</a></li>
                            <li><a href="result_list.html">卒業実績</a></li>
                        </ul>
                        <div class="c-global-nav__contact-wrap">
                            <a href="contact_form.html" class="c-header-btn c-global-nav__contact">お問い合わせ</a>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- ハンバーガーボタンSP用 -->
            <button id="hamburger-block" class="c-hamburger u-sp-only">
                <span class="c-hamburger__inner">
                    <span class="c-hamburger__line"></span>
                    <span class="c-hamburger__line"></span>
                    <span class="c-hamburger__line"></span>
                </span>
            </button>

            <!-- ハンバーガーナビゲーションSP用 -->
            <div class="c-drawer-menu u-sp-only" id="js-drawer">
                <nav aria-label="ヘッダーナビゲーション">
                    <ul class="c-drawer-menu__list">
                        <li><a href="plan.html">料金</a></li>
                        <li><a href="blog.html">ブログ</a></li>
                        <li><a href="result_list.html">卒業実績</a></li>
                    </ul>
                </nav>
            </div>
        </header>