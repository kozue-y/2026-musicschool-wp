<?php get_header(); ?>
<!-- メイン -->
<main class="main">
    
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumbs'); ?>

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

                        <!-- 関連記事 -->
                        <?php get_template_part('template-parts/related-articles'); ?>


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