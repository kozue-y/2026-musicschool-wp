<?php get_header(); ?>

<main class="main">
    <!-- mv -->
    <section class="c-page-mv" id="mv">
        <div class="c-page-mv__image">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="<?php echo get_template_directory_uri(); ?>/images/about.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about_sp.jpg" alt="プラン・料金">
            </picture>
            <h1 class="c-page-mv__title">プラン・料金</h1>
        </div>
    </section>

    <!-- breadcrumb -->
    <nav class="c-breadcrumb" aria-label="breadcrumb">
        <div class="l-inner">
            <ol class="c-breadcrumb__list">
                <li class="c-breadcrumb__item"><a href="index.html">ホーム</a></li>
                <li class="c-breadcrumb__item"><span>プラン・料金</span></li>
            </ol>
        </div>
    </nav>

    <!-- system -->
    <section class="p-plan-system" id="system">
        <div class="l-inner">
            <h2 class="p-plan__title">料金体系</h2>
            <div class="p-plan-system__wrapper">
                <div class="p-plan-system__item">
                    <div class="p-plan-system__card">
                        <p class="p-plan-system__card-title">入会金 39,000円</p>
                    </div>
                    <span class="p-plan-system__plus"></span>
                    <div class="p-plan-system__card">
                        <p class="p-plan-system__card-title">月額料金</p>
                    </div>
                </div>
                <p class="p-plan-system__text">
                    きたむらミュージックスクールでは、個人に合わせたサポートを行う完全オーダーメイドのプランを用意しており、サポート内容により月額料金が異なります。担当者があなたに最適なプランを提案いたしますので、お気軽にお問い合わせください。※すべての料金は税込価格となります。
                </p>
            </div>
        </div>
    </section>

    <!-- table -->
    <section class="p-plan-table" id="table">
        <div class="l-inner">
            <h2 class="p-plan__title">プラン内容・月額料金</h2>
            <div class="p-plan-table__wrapper">
                <!-- スクロール範囲 -->
                <div class="p-plan-table__scroll-area">
                    <table class="p-plan-table__list">
                        <thead>
                            <tr>
                                <th class="p-plan-table__head-empty"></th>
                                <th class="p-plan-table__head">
                                    <span class="p-plan-table__head-text">ベーシック<br class="u-sp-only">プラン</span>
                                </th>
                                <th class="p-plan-table__head p-plan-table__head--recommend">
                                    <span class="p-plan-table__recommend-label">おすすめ</span>
                                    <br>スタンダード<br class="u-sp-only">プラン
                                </th>
                                <th class="p-plan-table__head">
                                    <span class="p-plan-table__head-text">プレミアム<br class="u-sp-only">プラン</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="p-plan-table__row--price">
                                <th>月額料金</th>
                                <td>39,000円</td>
                                <td class="p-plan-table__td--recommend">59,000円</td>
                                <td>128,000円</td>
                            </tr>
                            <tr>
                                <th>マンツーマン授業</th>
                                <td><span class="p-plan-table__mark"></span>
                                    <br>週１回
                                </td>
                                <td><span class="p-plan-table__mark p-plan-table__mark--recommend"></span>
                                    <br>週２回
                                </td>
                                <td><span class="p-plan-table__mark"></span>
                                    <br>無制限
                                </td>
                            </tr>
                            <tr>
                                <th>ビジネス基本講座</th>
                                <td><span class="p-plan-table__mark"></span></td>
                                <td><span class="p-plan-table__mark p-plan-table__mark--recommend"></span></td>
                                <td><span class="p-plan-table__mark"></span></td>
                            </tr>
                            <tr>
                                <th>練習ROOM利用</th>
                                <td><span class="p-plan-table__mark"></span>
                                    <br>月10時間
                                </td>
                                <td><span class="p-plan-table__mark p-plan-table__mark--recommend"></span>
                                    <br>月20時間
                                </td>
                                <td><span class="p-plan-table__mark"></span>
                                    <br>無制限
                                </td>
                            </tr>
                            <tr>
                                <th>ビジネスコンサル</th>
                                <td><span class="p-plan-table__mark-border"></span></td>
                                <td><span class="p-plan-table__mark p-plan-table__mark--recommend"></span>
                                    <br>月２回
                                </td>
                                <td><span class="p-plan-table__mark"></span>
                                    <br>月３回
                                </td>
                            </tr>
                            <tr>
                                <th>コミュニティ<br class="u-sp-only">参加資格</th>
                                <td><span class="p-plan-table__mark-border"></span></td>
                                <td><span class="p-plan-table__mark-border"></span></td>
                                <td><span class="p-plan-table__mark"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- スクロールバー -->
                <div class="p-plan-table__scrollbar u-sp-only" aria-hidden="true">
                    <div class="p-plan-table__scrollbar-track">
                        <div class="p-plan-table__scrollbar-thumb"></div>
                    </div>
                </div>
                <p class="p-plan-table__text">
                    ※各サービスは１回ごとのオプション追加が可能です。詳しくは事務局までお問い合わせください。
                </p>
            </div>
        </div>
    </section>

</main>

<!-- footer -->
<?php get_footer(); ?>