<?php get_header (); ?>

<main class="main">
    <!-- FV -->
    <section id="FV" class="p-fv">
        <div class="p-fv__image">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/fv_sp.jpg"
                    media="(max-width: 767px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/fv.jpg" alt="「音楽で生きる」を叶えるミュージックスクール">
            </picture>
        </div>
        <div class="p-fv__text">
            <h2 class="p-fv__title">「音楽で生きる」<br class="u-sp-only">を叶える<br>ミュージックスクール</h2>
        </div>
    </section>

    <!-- concept -->
    <section id="concept" class="p-concept">
        <div class="l-inner">
            <h2 class="p-concept__title">全人類、<br class="u-sp-only">ミュージシャン計画。</h2>
            <p class="p-concept__text">私たちは音楽を愛するすべての人が、音楽に熱狂できる世界を目指しています。</p>
            <div class="p-concept__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/semicircle.png" alt="カーブ画像">
            </div>

            <div class="p-concept__list-wrapper">
                <ul class="p-concept__list">
                    <li class="p-concept__item">
                        <span class="p-concept__label">Enthusiasm</span>
                        <div class="p-concept__center">
                            <span class="p-concept__dot"></span>
                        </div>
                        <span class="p-concept__text-jp">熱狂し</span>
                    </li>
                    <li class="p-concept__item">
                        <span class="p-concept__label">Envision</span>
                        <div class="p-concept__center">
                            <span class="p-concept__dot"></span>
                        </div>
                        <span class="p-concept__text-jp">想像し</span>
                    </li>
                    <li class="p-concept__item">
                        <span class="p-concept__label">Effulgent</span>
                        <div class="p-concept__center">
                            <span class="p-concept__dot"></span>
                        </div>
                        <span class="p-concept__text-jp">輝く存在へ</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- future -->
    <section id="future" class="p-future">
        <div class="l-inner">
            <h2 class="p-future__title c-section-title">音楽業界初！<br>収益化までサポートする<br class="u-sp-only">ミュージックスクール</h2>
            <p class="p-future__text">楽器や作詞作曲などの<br class="u-sp-only">技術・知識はもちろんのこと<br>自分で稼ぎつづけるための<br
                    class="u-sp-only">ビジネス面もサポートします！</p>
        </div>
    </section>

    <!-- reasons -->
    <section id="reasons" class="p-reasons">
        <div class="l-inner">

            <h2 class="p-reasons__title c-section-title">きたむらミュージック<br class="u-sp-only">スクールが選ばれる理由</h2>
            <ul class="p-reasons__list">

                <li class="p-reasons__item">
                    <div class="p-reasons__textarea">
                        <h3 class="p-reasons__heading">技術面はプロによるマンツーマン授業！</h3>
                        <p class="p-reasons__text">第一線で活躍するプロによるマンツーマン授業で、きめ細かな技術指導が受けられます。</p>
                    </div>
                    <div class="p-reasons__img">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/reason01-sp.jpg"
                                media="(max-width: 767px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/reason01.jpg"
                                alt="技術面はプロによるマンツーマン授業！">
                        </picture>
                    </div>
                </li>

                <li class="p-reasons__item">
                    <div class="p-reasons__textarea">
                        <h3 class="p-reasons__heading">収益化するためのビジネスサポート！</h3>
                        <p class="p-reasons__text">コンセプト設計や集客方法、マーケティングリサーチなど、音楽で稼ぎつづけるための方法やマインドセットをサポートするクラスをご用意。</p>
                    </div>
                    <div class="p-reasons__img">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/reason02-sp.jpg"
                                media="(max-width: 767px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/reason02.jpg"
                                alt="収益化するためのビジネスサポート！">
                        </picture>
                    </div>
                </li>

                <li class="p-reasons__item">
                    <div class="p-reasons__textarea">
                        <h3 class="p-reasons__heading">24時間365日使える練習ROOMを完備！</h3>
                        <p class="p-reasons__text">一年中使える個室の練習ROOMを完備しているため、お仕事帰りや合間の時間も自由に練習が可能です。（アプリで予約が必要です）</p>
                    </div>
                    <div class="p-reasons__img">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/reason03-sp.jpg"
                                media="(max-width: 767px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/reason03.jpg"
                                alt="24時間365日使える練習ROOMを完備！">
                        </picture>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- voices -->
    <section id="voices" class="p-voices">
        <div class="p-voices-inner">
            <h2 class="p-voices__title c-section-title">生徒さんたちの声</h2>
            <div class="p-voices__container">

                <div class="swiper p-voices__swiper js-voices-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="result_details.html" class="p-voices__card">
                                <div class="p-voices__img">
                                    <picture>
                                        <source
                                            srcset="<?php echo get_template_directory_uri(); ?>/images/voice01-sp.jpg"
                                            media="(max-width: 767px)">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/voice01.jpg"
                                            alt="証券会社勤務　丸山さん">
                                    </picture>
                                </div>
                                <p class="p-voices__name">
                                    <span class="p-voices__job">証券会社勤務</span>
                                    <span class="p-voices__person">丸山さん</span>
                                </p>
                                <p class="p-voices__text">昔やっていた音楽活動で、副収入が得られるようになったので、毎日充実するようになりました。</p>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="result_details.html" class="p-voices__card">
                                <div class="p-voices__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/voice02.jpg"
                                        alt="IT会社勤務　S.Eさん">
                                </div>
                                <p class="p-voices__name">
                                    <span class="p-voices__job">IT会社勤務</span>
                                    <span class="p-voices__person">S.Eさん</span>
                                </p>
                                <p class="p-voices__text">プロの指導が受けられるので、技術が確実に上がるし、音楽への考え方とかも勉強できて最高です。</p>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="result_details.html" class="p-voices__card">
                                <div class="p-voices__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/voice03.jpg"
                                        alt="都内大学生　田森さん">
                                </div>
                                <p class="p-voices__name">
                                    <span class="p-voices__job">都内大学生</span>
                                    <span class="p-voices__person">田森さん</span>
                                </p>
                                <p class="p-voices__text">就職する前にビジネスの事が学べるし、好きな音楽で稼げるようになったので選択肢が増えました。</p>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="result_details.html" class="p-voices__card">
                                <div class="p-voices__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/voice01.jpg"
                                        alt="証券会社勤務　丸山さん">
                                </div>
                                <p class="p-voices__name">
                                    <span class="p-voices__job">証券会社勤務</span>
                                    <span class="p-voices__person">丸山さん</span>
                                </p>
                                <p class="p-voices__text">昔やっていた音楽活動で、副収入が得られるようになったので、毎日充実するようになりました。</p>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="result_details.html" class="p-voices__card">
                                <div class="p-voices__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/voice02.jpg"
                                        alt="IT会社勤務　S.Eさん">
                                </div>
                                <p class="p-voices__name">
                                    <span class="p-voices__job">IT会社勤務</span>
                                    <span class="p-voices__person">S.Eさん</span>
                                </p>
                                <p class="p-voices__text">プロの指導が受けられるので、技術が確実に上がるし、音楽への考え方とかも勉強できて最高です。</p>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="result_details.html" class="p-voices__card">
                                <div class="p-voices__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/voice03.jpg"
                                        alt="都内大学生　田森さん">
                                </div>
                                <p class="p-voices__name">
                                    <span class="p-voices__job">都内大学生</span>
                                    <span class="p-voices__person">田森さん</span>
                                </p>
                                <p class="p-voices__text">就職する前にビジネスの事が学べるし、好きな音楽で稼げるようになったので選択肢が増えました。</p>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="p-voices__prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-l.svg" alt="左矢印">
                </div>
                <div class="p-voices__next">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-r.svg" alt="右矢印">
                </div>
            </div>
        </div>
    </section>

    <!-- flow -->
    <section id="flow" class="p-flow">
        <div class="l-inner">
            <h2 class="p-flow__title c-section-title">ご利用の流れ</h2>
            <div class="p-flow__list-wrapper">
                <ul class="p-flow__list">
                    <li class="p-flow__item">
                        <div class="p-flow__center">
                            <span class="p-flow__dot"></span>
                        </div>
                        <!-- <div class="p-flow__content"> -->
                        <h3 class="p-flow__step-title">お問い合わせ</h3>
                        <p class="p-flow__text">まずはフォームまたはメールにてお問い合わせください。<br>
                            ヒアリングの日程を調整します。</p>
                        <!-- </div> -->
                    </li>
                    <li class="p-flow__item">
                        <div class="p-flow__center">
                            <span class="p-flow__dot"></span>
                        </div>
                        <!-- <div class="p-flow__content"> -->
                        <h3 class="p-flow__step-title">ヒアリング</h3>
                        <p class="p-flow__text">現在の技術面や将来の目標などをお伺いします。<br>
                            悩みや不安な事もお気軽にご相談ください。</p>
                        <!-- </div> -->
                    </li>
                    <li class="p-flow__item">
                        <div class="p-flow__center">
                            <span class="p-flow__dot"></span>
                        </div>
                        <!-- <div class="p-flow__content"> -->
                        <h3 class="p-flow__step-title">プランのご提案</h3>
                        <p class="p-flow__text">ライフスタイルや目標によって最適なプランをご提案します。<br>
                            継続できるようサポートいたします。</p>
                        <!-- </div> -->
                    </li>
                    <li class="p-flow__item">
                        <div class="p-flow__center">
                            <span class="p-flow__dot"></span>
                        </div>
                        <!-- <div class="p-flow__content"> -->
                        <h3 class="p-flow__step-title">ご入学</h3>
                        <p class="p-flow__text">お申し込み完了後、レッスンがスタートします。<br>
                            マンツーマン指導なので、いつからでもスタートが可能です。</p>
                        <!-- </div> -->
                    </li>
                    <li class="p-flow__arrow" aria-hidden="true"></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- faq -->
    <section id="faq" class="p-faq">
        <div class="l-inner">
            <h2 class="p-faq__title c-section-title">よくあるご質問</h2>
            <dl class="p-accordion">
                <div class="p-accordion__item">
                    <dt class="p-accordion__question">
                        <span class="p-accordion__icon-q">Q</span>
                        <span class="p-accordion__question-text">どのような生徒さんがどれぐらいの期間で稼いでいますか？</span>
                    </dt>
                    <dd class="p-accordion__answer">
                        <div class="p-accordion__answer-inner">
                            <span class="p-accordion__icon-a">A</span>
                            <p class="p-accordion__answer-text">回答</p>
                        </div>
                    </dd>
                </div>
                <div class="p-accordion__item">
                    <dt class="p-accordion__question">
                        <span class="p-accordion__icon-q">Q</span>
                        <span class="p-accordion__question-text">途中でプランを変更することは可能ですか？</span>
                    </dt>
                    <dd class="p-accordion__answer">
                        <div class="p-accordion__answer-inner">
                            <span class="p-accordion__icon-a">A</span>
                            <p class="p-accordion__answer-text">途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。</p>
                        </div>
                    </dd>
                </div>
                <div class="p-accordion__item">
                    <dt class="p-accordion__question">
                        <span class="p-accordion__icon-q">Q</span>
                        <span class="p-accordion__question-text">入学金などの分割払いはできますか？</span>
                    </dt>
                    <dd class="p-accordion__answer">
                        <div class="p-accordion__answer-inner">
                            <span class="p-accordion__icon-a">A</span>
                            <p class="p-accordion__answer-text">回答</p>
                        </div>
                    </dd>
                </div>
                <div class="p-accordion__item">
                    <dt class="p-accordion__question">
                        <span class="p-accordion__icon-q">Q</span>
                        <span class="p-accordion__question-text">休学することも可能ですか？</span>
                    </dt>
                    <dd class="p-accordion__answer">
                        <div class="p-accordion__answer-inner">
                            <span class="p-accordion__icon-a">A</span>
                            <p class="p-accordion__answer-text">回答</p>
                        </div>
                    </dd>
                </div>
            </dl>
        </div>
    </section>

    <!-- blog -->
    <section id="blog" class="p-blog">
        <div class="l-inner">
            <h2 class="p-blog__title c-section-title">ブログ</h2>
            <div class="p-blog__list">
                <a href="blog_details.html" class="p-blog__item">
                    <div class="p-blog__img-wrapper">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/blog03-sp.jpg"
                                media="(max-width: 767px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog03.jpg"
                                alt="フォロワーではなくファンを増やせとは？">
                        </picture>
                        <span class="p-blog__category">SNS</span>
                    </div>
                    <div class="p-blog__content">
                        <h3 class="p-blog__subtitle">フォロワーではなくファンを増やせとは？</h3>
                        <time datetime="2026-02-05" class="p-blog__date">0000.00.00</time>
                    </div>
                </a>
                <a href="blog_details.html" class="p-blog__item">
                    <div class="p-blog__img-wrapper">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/blog02-sp.jpg"
                                media="(max-width: 767px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog02.jpg"
                                alt="集客してる間は売れないという法則">
                        </picture>
                        <span class="p-blog__category">集客方法</span>
                    </div>
                    <div class="p-blog__content">
                        <h3 class="p-blog__subtitle">集客してる間は売れないという法則</h3>
                        <time datetime="2026-02-05" class="p-blog__date">0000.00.00</time>
                    </div>
                </a>
                <a href="blog_details.html" class="p-blog__item">
                    <div class="p-blog__img-wrapper">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/blog01-sp.jpg"
                                media="(max-width: 767px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog01.jpg"
                                alt="アルペジオが劇的に向上する3つの習慣">
                        </picture>
                        <span class="p-blog__category">ギター</span>
                    </div>
                    <div class="p-blog__content">
                        <h3 class="p-blog__subtitle">アルペジオが劇的に向上する3つの習慣</h3>
                        <time datetime="2026-02-05" class="p-blog__date">0000.00.00</time>
                    </div>
                </a>
            </div>
            <div class="p-blog__link">
                <a href="blog.html" class="p-blog__link-text">ブログ一覧へ</a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>