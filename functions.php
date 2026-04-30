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

// --------------------------------------------------
// タイトルのカスタマイズ
// --------------------------------------------------
function custom_document_title(string $title): string
{
    $site_name = 'きたむらミュージックスクール';
  
  // トップページ
    if (is_front_page()) {
      return $site_name . ' | 「音楽で生きる」を叶える　ミュージックスクール';
    }
  // 固定ページ
    if (is_page()) {
      return get_the_title() . ' | ' . $site_name;
    }
  
  // 投稿個別ページ
    if (is_single()) {
      return get_the_title() . ' | ' . $site_name;
    }
  
  // アーカイブ（ページ番号対応）
    if (is_archive()) {
      $paged = max(1, (int) get_query_var('paged'));
    
      if (is_category()) {
         $name = single_cat_title('', false);
      } elseif (is_tax()) {
         $name = single_term_title('', false);
      } elseif (is_post_type_archive()) {
         $name = post_type_archive_title('', false);
      } else {
         $name = get_the_archive_title();
      }
          
      // 2ページ目以降だけ「◯ページ目」をつける
          $suffix = ($paged > 1) ? ' ' . $paged . 'ページ目' : '';
        
          return $name . '一覧ページ' . $suffix . ' | ' . $site_name;
    }
        //  検索結果
        if (is_search()) {
          return '検索結果 | ' . $site_name;
        }

        // 404
        if (is_404()) {
          return 'お探しのページはございません | ' . $site_name;
        }

        // その他
        return get_the_title() . ' | ' . $site_name;
        }
        add_filter('pre_get_document_title', 'custom_document_title');

// --------------------------------------------------
// メタディスクリプションの出力
// --------------------------------------------------
function custom_meta_description(): void
{
   $description = '';
  
   // トップページ
   if (is_front_page()) {
       $description = '「音楽で生きる」を叶える ミュージックスクール「きたむらミュージックスクール」の公式ホームページです。';
      
   //固定ページ
   } elseif (is_page()) {
       $description = 'きたむらミュージックスクール公式ホームページの' . get_the_title() . 'ページです。';
      
  //投稿ページ
  } elseif (is_single()) {
     if (has_excerpt()) {
       $description = get_the_excerpt();
      } else {
        $content = get_the_content();
        $content = wp_strip_all_tags($content);
        $content = preg_replace('/\s+/u', '', $content);
        $description = mb_substr($content, 0, 120, 'UTF-8');
      }
   //投稿アーカイブ 
  } elseif (is_archive()) {
     if (is_category()) {
        $name = single_cat_title('', false);
      } elseif (is_tax()) {
        $name = single_term_title('', false);
      } elseif (is_post_type_archive()) {
        $name = post_type_archive_title('', false);
      } else {
        $name = get_the_archive_title();
      }
     
      $description = 'きたむらミュージックスクール公式ホームページの' . $name . '一覧ページです。';
    // 検索結果
  } elseif (is_search()) {
     $description = 'きたむらミュージックスクール公式ホームページの検索結果ページです。';
    
    // 404
  } elseif (is_404()) {
     $description = 'きたむらミュージックスクール公式ホームページの404ページです。';
    
    // その他のページ
  } else {
     $description = 'きたむらミュージックスクール公式ホームページの' . get_the_title() . 'ページです。';
    }

    if ($description !== '') {
      echo '<meta name="description" content="' .esc_attr($description) . '">' . "\n";
    }
  }
  add_action('wp_head', 'custom_meta_description', 1);    