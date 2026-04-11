<?php get_header(); ?>
<!-- メイン -->
<main class="main">
    <!-- breadcrumb -->
    <nav class="c-breadcrumb" aria-label="breadcrumb">
        <div class="l-inner">
            <ol class="c-breadcrumb__list">
                <li class="c-breadcrumb__item"><a href="index.html">ホーム</a></li>
                <li class="c-breadcrumb__item"><a href="blog.html">ブログ</a></li>
                <li class="c-breadcrumb__item"><span>ギター</span></li>
                <li class="c-breadcrumb__item c-breadcrumb__item--title">アルペジオが劇的に向上する３つの習慣</li>
            </ol>
        </div>
    </nav>

    <section class="p-blog-detail">
        <div class="l-inner">
            <div class="p-blog-detail__layout">
                <div class="p-blog-detail__main">
                    <article class="p-blog-detail__article">
                        <div class="p-blog-detail__header">
                            <h1 class="p-blog-detail__title"><?php the_title(); ?></h1>
                            <time class="p-blog-detail__date"
                                datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
                            <div class="p-blog-detail__img-wrapper">
                                <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('large') ; ?>
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png"
                                    alt="No image">
                                <?php endif; ?>
                                <span class="p-blog-detail__category">
                                    <?php $terms = get_the_terms(get_the_ID(), 'blog_cate');
                                    if ( ! empty($terms) && ! is_wp_error($terms) ) {
                                    echo esc_html($terms[0]->name); } ?>
                                </span>
                            </div>
                            <nav class="p-blog-detail__sns" aria-label="SNSでシェア">
                                <ul class="p-blog-detail__sns-list">
                                    <li class="p-blog-detail__sns-item p-blog-detail__sns-item--facebook">
                                        <a href="#" target="_blank" rel="noopener noreferrer" aria-label="facebookでシェア">
                                            <span class="p-blog-detail__sns-icon">
                                                <picture>
                                                    <source
                                                        srcset="<?php echo get_template_directory_uri(); ?>/images/facebook_icon_sp.svg"
                                                        media="(max-width: 767px)">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook_color.svg"
                                                        alt="facebookへのリンク">
                                                </picture>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="p-blog-detail__sns-item p-blog-detail__sns-item--twitter">
                                        <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Xでシェア">
                                            <span class="p-blog-detail__sns-icon">
                                                <picture>
                                                    <source
                                                        srcset="<?php echo get_template_directory_uri(); ?>/images/twitter_icon_sp.svg"
                                                        media="(max-width: 767px)">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/twitter_color.svg"
                                                        alt="Xへのリンク">
                                                </picture>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="p-blog-detail__sns-item p-blog-detail__sns-item--hatena">
                                        <a href="#" target="_blank" rel="noopener noreferrer" aria-label="hatenaでシェア">
                                            <span class="p-blog-detail__sns-icon">
                                                <picture>
                                                    <source
                                                        srcset="<?php echo get_template_directory_uri(); ?>/images/hatena_icon_sp.svg"
                                                        media="(max-width: 767px)">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/hatena_color.svg"
                                                        alt="hatenaへのリンク">
                                                </picture>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="p-blog-detail__sns-item p-blog-detail__sns-item--line">
                                        <a href="#" target="_blank" rel="noopener noreferrer" aria-label="LINEでシェア">
                                            <span class="p-blog-detail__sns-icon">
                                                <picture>
                                                    <source
                                                        srcset="<?php echo get_template_directory_uri(); ?>/images/line_icon_sp.svg"
                                                        media="(max-width: 767px)">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/line_color.svg"
                                                        alt="LINEへのリンク">
                                                </picture>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="p-blog-detail__sns-item p-blog-detail__sns-item--pocket">
                                        <a href="#" target="_blank" rel="noopener noreferrer" aria-label="pocketでシェア">
                                            <span class="p-blog-detail__sns-icon">
                                                <picture>
                                                    <source
                                                        srcset="<?php echo get_template_directory_uri(); ?>/images/pocket_icon_sp.svg"
                                                        media="(max-width: 767px)">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pocket_color.svg"
                                                        alt="pocketへのリンク">
                                                </picture>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="p-blog-detail__body">
                            <?php the_content(); ?>
                            <!-- <h2>H2見出しが入ります。H2見出しが入ります。</h2>
                            <p>
                                本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            </p>
                            <figure class="p-blog-detail__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details02.jpg"
                                    alt="レッスン画像">
                            </figure>
                            <ul class="p-blog-detail__list">
                                <li>リストが入ります</li>
                                <li>リストが入ります</li>
                                <li>リストが入ります</li>
                            </ul>
                            <h3>H3見出しが入ります。H3見出しが入ります。</h3>
                            <blockquote class="p-blog-detail__blockquote">
                                <div class="p-blog-detail__blockquote-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-blockquote.svg"
                                        alt="''">
                                </div>
                                <p>
                                    本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                                </p>

                            </blockquote>
                            <div class="p-blog-detail__text-link">
                                <a href="#">テキストリンク</a>
                            </div> -->
                        </div>
                        <nav class="p-blog-detail__post-nav" aria-label="前後の記事">
                            <ul class="p-blog-detail__post-nav-list">
                                <li class="p-blog-detail__post-nav-item">
                                    <a href="#" class="p-blog-detail__post-nav-link">
                                        <span class="p-blog-detail__post-nav-label p-blog-detail__post-nav-label--prev">
                                            ◀︎ 前の記事
                                        </span>
                                        <div class="p-blog-detail__post-nav-body">
                                            <div class="p-blog-detail__post-nav-thumb u-pc-only">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details03.jpg"
                                                    alt="記事画像">
                                            </div>
                                            <p class="p-blog-detail__post-nav-title">
                                                タイトルが入ります。タイトルが入ります。タイトルが入ります。
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-blog-detail__post-nav-item">
                                    <a href="#" class="p-blog-detail__post-nav-link">
                                        <span class="p-blog-detail__post-nav-label p-blog-detail__post-nav-label--next">
                                            次の記事 ▶︎
                                        </span>
                                        <div class="p-blog-detail__post-nav-body">
                                            <div class="p-blog-detail__post-nav-thumb u-pc-only">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details03.jpg"
                                                    alt="記事画像">
                                            </div>
                                            <p class="p-blog-detail__post-nav-title">
                                                タイトルが入ります。タイトルが入ります。タイトルが入ります。
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <section class="p-blog-detail__related">
                            <h2 class="p-blog-detail__related-title">関連記事</h2>
                            <ul class="p-blog-detail__related-list">
                                <li class="p-blog-detail__related-item">
                                    <a href="#" class="p-blog-detail__related-link">
                                        <div class="p-blog-detail__related-thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details03.jpg"
                                                alt="記事画像">
                                            <span class="p-blog-detail__related-category">ギター</span>
                                        </div>
                                        <div class="p-blog-detail__related-body">
                                            <p class="p-blog-detail__related-subtitle">
                                                タイトルが入ります。タイトルが入ります。タイトルが入ります。
                                            </p>
                                            <time class="p-blog-detail__related-date"
                                                datetime="2026-01-15">0000.00.00</time>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-blog-detail__related-item">
                                    <a href="#" class="p-blog-detail__related-link">
                                        <div class="p-blog-detail__related-thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details03.jpg"
                                                alt="記事画像">
                                            <span class="p-blog-detail__related-category">ギター</span>
                                        </div>
                                        <div class="p-blog-detail__related-body">
                                            <p class="p-blog-detail__related-subtitle">
                                                タイトルが入ります。タイトルが入ります。タイトルが入ります。
                                            </p>
                                            <time class="p-blog-detail__related-date"
                                                datetime="2026-01-15">0000.00.00</time>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-blog-detail__related-item">
                                    <a href="#" class="p-blog-detail__related-link">
                                        <div class="p-blog-detail__related-thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog-details03.jpg"
                                                alt="記事画像">
                                            <span class="p-blog-detail__related-category">ギター</span>
                                        </div>
                                        <div class="p-blog-detail__related-body">
                                            <p class="p-blog-detail__related-subtitle">
                                                タイトルが入ります。タイトルが入ります。タイトルが入ります。
                                            </p>
                                            <time class="p-blog-detail__related-date"
                                                datetime="2026-01-15">0000.00.00</time>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </article>
                </div>

                <!-- サイドバー -->
                <?php get_sidebar(); ?>

                <!-- <aside class="p-blog-detail__side">
                    <div class="p-sidebar">
                        <div class="p-widget p-widget--magazine">
                            <p class="p-widget__title">無料メールマガジン</p>
                            <div class="p-widget__body">
                                <a href="#" target="_blank" rel="noopener noreferrer" class="p-widget__body-inner"
                                    aria-label="無料メールマガジンのバナー">
                                    <img src="images/blog-banner.jpg" alt="無料メールマガジン">
                                    <span class="p-widget__text">バナー広告</span>
                                </a>
                            </div>
                        </div>

                        <div class="p-widget p-widget--search">
                            <p class="p-widget__title">ブログ内を検索</p>
                            <form class="p-widget__search-form" action="search.html">
                                <label class="p-widget__search-label">
                                    <input type="search" name="s" class="p-widget__search-input">
                                </label>
                                <button type="submit" class="p-widget__search-button" aria-label="検索">
                                    <span class="p-widget__search-icon">
                                        <img src="images/icon-search.svg" alt="検索">
                                    </span>
                                </button>
                            </form>
                        </div>

                        <div class="p-widget p-widget--recommend">
                            <p class="p-widget__title">おすすめの記事</p>
                            <ul class="p-widget__list">
                                <li class="p-widget__item">
                                    <a href="#" class="p-widget__link">
                                        <span class="p-widget__thumb">
                                            <img src="images/blog-featured-image.jpg" alt="記事画像">
                                        </span>
                                        <span class="p-widget__subtitle">タイトルが入ります。タイトル</span>
                                    </a>
                                </li>
                                <li class="p-widget__item">
                                    <a href="#" class="p-widget__link">
                                        <span class="p-widget__thumb">
                                            <img src="images/blog-featured-image.jpg" alt="記事画像">
                                        </span>
                                        <span class="p-widget__subtitle">タイトルが入ります。タイトル</span>
                                    </a>
                                </li>
                                <li class="p-widget__item">
                                    <a href="#" class="p-widget__link">
                                        <span class="p-widget__thumb">
                                            <img src="images/blog-featured-image.jpg" alt="記事画像">
                                        </span>
                                        <span class="p-widget__subtitle">タイトルが入ります。タイトル</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="p-widget p-widget--category">
                            <p class="p-widget__title">カテゴリー</p>
                            <ul class="p-widget__category-list">
                                <li class="p-widget__category-item">
                                    <a href="#" class="p-widget__category-link">
                                        <span class="p-widget__category-label">カテゴリー</span>
                                    </a>
                                </li>
                                <li class="p-widget__category-item">
                                    <a href="#" class="p-widget__category-link">
                                        <span class="p-widget__category-label">カテゴリー</span>
                                    </a>
                                </li>
                                <li class="p-widget__category-item">
                                    <a href="#" class="p-widget__category-link">
                                        <span class="p-widget__category-label">カテゴリー</span>
                                    </a>
                                </li>
                                <li class="p-widget__category-item">
                                    <a href="#" class="p-widget__category-link">
                                        <span class="p-widget__category-label">カテゴリー</span>
                                    </a>
                                </li>
                                <li class="p-widget__category-item">
                                    <a href="#" class="p-widget__category-link">
                                        <span class="p-widget__category-label">カテゴリー</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside> -->
            </div>
        </div>
    </section>
</main>

<!-- footer -->
<?php get_footer(); ?>