<?php
// --------------------------------------------------
// 最初の設定
// --------------------------------------------------
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

    register_nav_menus(
      array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
      )
    );
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

function my_page_conditions($query)
{
  if (!is_admin() && $query->is_main_query()) {
   // カスタム投稿のスラッグを記述
   if (is_post_type_archive(['blog', 'result'])) {
      // 表示件数を指定
      $query->set('posts_per_page', 10);
    }
    // 検索結果ページの場合
    if ($query->is_search()) {
      $query->set('post_type', 'blog');
    }
  }
}
add_action('pre_get_posts', 'my_page_conditions');

// --------------------------------------------------
// snow monkey エラーメッセージカスタム
// --------------------------------------------------
function my_smf_error_message( $error_message ) {
    return '必須項目に入力してください。';
}
add_filter( 'snow_monkey_forms/validator/error_message', 'my_smf_error_message' );

// --------------------------------------------------
// Snow Monkey Forms 送信後リダイレクト
// contact ページのフォーム送信完了後に /contact-send/ へ遷移
// --------------------------------------------------
add_action(
    'wp_enqueue_scripts',
    function () {
        if ( ! is_page( 'contact' ) ) {
            return;
        }

        $redirect_url = home_url( '/contact-send/' );

        $script = <<<JS
document.addEventListener('DOMContentLoaded', function () {
  var form = document.getElementById('snow-monkey-form-149');
  if (!form) return;

  form.addEventListener('submit', function () {
    var observer = new MutationObserver(function () {
      if (form.getAttribute('data-screen') === 'complete') {
        window.location.href = '{$redirect_url}';
      }
    });

    observer.observe(form, {
      attributes: true,
      attributeFilter: ['data-screen']
    });
  });
});
JS;

        wp_add_inline_script(
            'snow-monkey-forms',
            $script,
            'after'
        );
    },
    11
);