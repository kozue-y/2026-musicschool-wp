<?php get_header(); ?>
<!-- メイン -->
<main class="main">
    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <section class="p-result-detail">
        <div class="l-inner">
            <div class="p-result-detail__header">
                <h1 class="p-result-detail__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h1>
                <time class="p-result-detail__date" datetime="2026-01-15">0000.00.00</time>
                <div class="p-result-detail__img-wrapper">
                    <picture>
                        <source media="(min-width: 768px)" srcset="images/result_detail01.jpg">
                        <img src="images/result_details_sp.jpg" alt="卒業実績紹介画像">
                    </picture>
                    <span class="p-result-detail__category">ポップス</span>
                </div>
            </div>

            <div class="p-result-detail__profile">
                <table class="p-result-detail__table">
                    <tbody>
                        <tr>
                            <th scope="row">名前</th>
                            <td>丸山</td>
                        </tr>
                        <tr>
                            <th scope="row">職業</th>
                            <td>証券会社勤務</td>
                        </tr>
                        <tr>
                            <th scope="row">ジャンル</th>
                            <td>入力欄</td>
                        </tr>
                        <tr>
                            <th scope="row">実績</th>
                            <td>入力欄</td>
                        </tr>
                        <tr>
                            <th scope="row">SNS</th>
                            <td>入力欄</td>
                        </tr>
                    </tbody>
                </table>

                <div class="p-result-detail__text">
                    <p>昔やっていた音楽活動で、副収入が得られるようになったので、毎日充実するようになりました。</p>
                </div>
            </div>
            <!-- ページネーション -->
            <?php get_template_part('template-parts/single-pagination'); ?>

            <!-- 関連記事 -->
            <div class="p-result-detail__related">
                <h2 class="p-result-detail__related-title">関連記事</h2>
                <ul class="p-result-detail__related-list">
                    <li class="p-result-detail__related-item">
                        <a href="#" class="p-result-detail__related-link">
                            <div class="p-result-detail__related-thumb">
                                <img src="images/voice02.jpg" alt="記事画像">
                                <span class="p-result-detail__related-category">ロック</span>
                            </div>
                            <div class="p-result-detail__related-body">
                                <p class="p-result-detail__related-subtitle">
                                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                                </p>
                                <time class="p-result-detail__related-date" datetime="2026-01-15">0000.00.00</time>
                            </div>
                        </a>
                    </li>
                    <li class="p-result-detail__related-item">
                        <a href="#" class="p-result-detail__related-link">
                            <div class="p-result-detail__related-thumb">
                                <img src="images/voice03.jpg" alt="記事画像">
                                <span class="p-result-detail__related-category">ジャズ</span>
                            </div>
                            <div class="p-result-detail__related-body">
                                <p class="p-result-detail__related-subtitle">
                                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                                </p>
                                <time class="p-result-detail__related-date" datetime="2026-01-15">0000.00.00</time>
                            </div>
                        </a>
                    </li>
                    <li class="p-result-detail__related-item">
                        <a href="#" class="p-result-detail__related-link">
                            <div class="p-result-detail__related-thumb">
                                <img src="images/result-details03.jpg" alt="記事画像">
                                <span class="p-result-detail__related-category">ラテン</span>
                            </div>
                            <div class="p-result-detail__related-body">
                                <p class="p-result-detail__related-subtitle">
                                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                                </p>
                                <time class="p-result-detail__related-date" datetime="2026-01-15">0000.00.00</time>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </section>




</main>

<!-- footer -->
<?php get_footer(); ?>