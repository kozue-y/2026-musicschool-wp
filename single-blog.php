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

                            <?php
                            $url = urlencode(get_permalink());
                            $title = urlencode(get_the_title());
                            ?>
                            <nav class="p-blog-detail__sns" aria-label="SNSでシェア">
                                <ul class="p-blog-detail__sns-list">
                                    <li class="p-blog-detail__sns-item p-blog-detail__sns-item--facebook">
                                        <a href="<?php echo esc_url('https://www.facebook.com/share.php?u=' . $url); ?>"
                                            target="_blank" rel="noopener noreferrer" aria-label="facebookでシェア">
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
                                        <a href="<?php echo esc_url('https://x.com/share?url=' . $url . '&text=' . $title); ?>"
                                            target="_blank" rel="noopener noreferrer" aria-label="Xでシェア">
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
                                        <a href="<?php echo esc_url('http://b.hatena.ne.jp/add?mode=confirm&url=' . $url . '&title=' . $title); ?>"
                                            target="_blank" rel="noopener noreferrer" aria-label="hatenaでシェア">
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
                                        <a href="<?php echo esc_url('https://social-plugins.line.me/lineit/share?url=' .$url); ?>"
                                            target="_blank" rel="noopener noreferrer" aria-label="LINEでシェア">
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
                                        <a href="<?php echo esc_url('https://getpocket.com/edit?url=' . $url . '&title=' .$title); ?>"
                                            target="_blank" rel="noopener noreferrer" aria-label="pocketでシェア">
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
                        </div>

                        <!-- ページネーション -->
                        <?php get_template_part('template-parts/single-pagination'); ?>


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

            </div>
        </div>
    </section>
</main>

<!-- footer -->
<?php get_footer(); ?>