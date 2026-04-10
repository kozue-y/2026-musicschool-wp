// --------------------------------------------------
// 最初の設定
// --------------------------------------------------
<?php
function custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        )
    );
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'custom_theme_setup');

// --------------------------------------------------
// ファイル読み込み
// --------------------------------------------------

function add_files() {
$now = date('YmdHis');

//テーマCSS
wp_enqueue_style(
    'style',
    get_theme_file_uri('/css/style.css'),
    array(),
    $now
);

// Swiper CSS
wp_enqueue_style(
    'swiper-style',
    'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css',
    array(),
    null
);

// WordPressの標準jQueryを読み込まない
wp_deregister_script('jquery');

// jQuery
wp_enqueue_script(
    'jquery',
    'https://code.jquery.com/jquery-3.7.1.min.js',
    array(),
    null,
    false
);

// Swiper JS
wp_enqueue_script(
    'swiper-script',
    'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js',
    array(),
    null,
    true
);

// テーマJS
wp_enqueue_script(
    'main-script',
    get_theme_file_uri('/js/main.js'),
    array('jquery', 'swiper-script'),
    $now,
    true
);
}
add_action('wp_enqueue_scripts', 'add_files');