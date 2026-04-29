<?php
    $search_keyword = get_search_query();
    $is_search_empty = empty($search_keyword) || ! have_posts();

    if ( $is_search_empty) {
        add_filter( 'body_class', function( $classes ) {
        $classes[] = 'is-search-empty';
        return $classes;
      } );
    }
    get_header();
    ?>

<main class="main">
    <!-- breadcrumb -->
    <?php get_template_part( 'template-parts/breadcrumbs' ); ?>

    <!-- blog -->
    <section class="p-blog-list p-search-list" id="blog">
        <div class="l-inner">

            <?php if ( ! empty( $search_keyword ) ) : ?>
            <?php if ( have_posts() ) : ?>
            <?php $total_posts = $wp_query->found_posts; ?>

            <div class="p-search-result">
                <p class="p-search-result__title">
                    「<span class="p-search-result__keyword"><?php echo esc_html($search_keyword); ?></span>」の検索結果</p>
                <p class="p-search-result__count"><?php echo esc_html($total_posts); ?>件</p>
            </div>

            <ul class="p-blog-list__list p-search-list__list">
                <?php while ( have_posts() ) : the_post(); ?>
                <!-- 記事 -->
                <li class="p-blog-list__item">
                    <a href="<?php the_permalink(); ?>" class="p-blog-list__link">
                        <div class="p-blog-list__img-wrapper">
                            <?php if (has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                            <?php endif; ?>

                            <span class="p-blog-list__category">
                                <?php
                              $terms = get_the_terms( get_the_ID(), 'blog_cate' );
                              if ( ! empty($terms) && ! is_wp_error( $terms) ) {
                              echo esc_html( $terms[0]->name);
                            }
                            ?>
                            </span>
                        </div>

                        <div class="p-blog-list__content">
                            <h2 class="p-blog-list__subtitle">
                                <?php echo esc_html( wp_trim_words( get_the_title(), 26, '...') ); ?>
                            </h2>
                            <time datetime="<?php echo esc_attr( get_the_date('Y-m-d') ); ?>"
                                class="p-blog-list__date"><?php echo esc_html( get_the_date('Y.m.d') ); ?></time>
                            <p class="p-blog-list__text">
                                <?php echo esc_html( wp_trim_words( get_the_content(), 95, '...') ); ?>
                            </p>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
            <nav class="c-pagination p-search-pagination" aria-label="ページネーション">
                <?php wp_pagenavi(); ?>
            </nav>

            <?php else :?>
            <div class="p-search-result p-search-result--empty">
                <p class="p-search-result__message">検索されたキーワードにマッチする<br class="u-sp-only">記事はありませんでした。</p>
                <div class="p-search-result__back">
                    <button type="button" class="c-btn c-btn--block js-history-back">戻る</button>
                </div>
            </div>
            <?php endif; ?>

            <?php else :?>
            <div class="p-search-result p-search-result--empty">
                <p class="p-search-result__message">検索キーワードが未入力です。</p>
                <div class="p-search-result__back">
                    <button type="button" class="c-btn c-btn--block js-history-back">戻る</button>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </section>
</main>

<!-- footer -->
<?php get_footer(); ?>