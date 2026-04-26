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
                        <?php
                        $args = array(
                            'post_type' => 'result',
                            'posts_per_page' => 6,
                        );
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>
                        <div class="swiper-slide">
                            <a href="<?php the_permalink(); ?>" class="p-voices__card">
                                <div class="p-voices__img">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                    <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png"
                                        alt="No image">
                                    <?php endif; ?>
                                </div>

                                <p class="p-voices__name">
                                    <span class="p-voices__job"><?php the_field('job'); ?></span>
                                    <span class="p-voices__person"><?php the_field('name'); ?>さん</span>
                                </p>
                                <p class="p-voices__text"><?php echo wp_trim_words(get_the_content(), 45, '...'); ?></p>
                            </a>
                        </div>
                        <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>


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
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'post_type' => 'blog',
                    'taxonomy' => 'blog_recommend',
                    'term' => 'recommend',
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="p-blog__item">
                    <div class="p-blog__img-wrapper">
                        <?php if (has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                        <?php endif; ?>
                        <span class="p-blog__category"><?php
                        $terms = get_the_terms(get_the_ID(), 'blog_cate');
                        if (!empty($terms) && !is_wp_error($terms)) {
                            echo esc_html($terms[0]->name);
                        }
                        ?>
                        </span>
                    </div>
                    <div class="p-blog__content">
                        <h3 class="p-blog__subtitle"><?php echo wp_trim_words(get_the_title(), 35, '...'); ?></h3>
                        <time datetime="<?php the_time('Y-m-d'); ?>"
                            class="p-blog__date"><?php the_time('Y.m.d'); ?></time>
                    </div>
                </a>
                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>

            </div>
            <div class="p-blog__link">
                <a href="<?php echo esc_url(home_url('blog')); ?>" class="p-blog__link-text">ブログ一覧へ</a>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>