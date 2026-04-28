<?php get_header(); ?>

<!-- メイン -->
<main class="main">
    <!-- mv -->
    <section class="c-page-mv" id="mv">
        <div class="c-page-mv__image">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="<?php echo get_template_directory_uri(); ?>/images/mv404.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mv404_sp.jpg" alt="404 not found">
            </picture>
            <h1 class="c-page-mv__title">404 not found</h1>
        </div>
    </section>

    <div class="p-404">
        <div class="l-inner">
            <p class="p-404__text">
                申し訳ございませんが、お探しのページが見つかりませんでした。<br>
                お探しのページは一時的に表示ができない状態にあるか、移動または削除された可能性があります。
            </p>
            <div class="p-404__btn">
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="c-btn c-btn--block">ホームへ戻る</a>
            </div>
        </div>
    </div>

</main>

<!-- footer -->
<?php get_footer(); ?>