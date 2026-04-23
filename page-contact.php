<?php get_header(); ?>

<!-- メイン -->
<main class="main">
    <!-- mv -->
    <section class="c-page-mv" id="mv">
        <div class="c-page-mv__image">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="<?php echo get_template_directory_uri(); ?>/images/contact.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/contact_sp.jpg" alt="お問い合わせ">
            </picture>
            <h1 class="c-page-mv__title">お問い合わせ</h1>
        </div>
    </section>

    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <!-- contact -->
    <div class="p-contact">
        <div class="l-inner">
            <!-- <form class="p-contact-form" action="contact_send.html">
                <p class="p-contact-form__text">
                    当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。<br>
                    通常３営業日以内にメールにてご連絡させていただきます。
                </p>
                <div class="p-contact-form__list">
                    <dl class="p-contact-form__row p-contact-form__row--end">
                        <dt class="p-contact-form__term">
                            <label for="company">会社名</label>
                        </dt>
                        <dd class="p-contact-form__desc">
                            <input id="company" name="company" type="text" class="p-contact-form__input"
                                placeholder="きたむらミュージックスクール">
                        </dd>
                    </dl>

                    <dl class="p-contact-form__row p-contact-form__row--end">
                        <dt class="p-contact-form__term">
                            <label for="name">お名前</label>
                        </dt>
                        <dd class="p-contact-form__desc">
                            <input id="name" name="name" type="text" class="p-contact-form__input"
                                placeholder="北村&#12288;翔平">
                        </dd>
                    </dl>

                    <dl class="p-contact-form__row p-contact-form__row--end">
                        <dt class="p-contact-form__term">
                            <label for="email">メールアドレス</label>
                        </dt>
                        <dd class="p-contact-form__desc">
                            <input id="email" name="email" type="email" class="p-contact-form__input"
                                placeholder="info@kitamura.musicschool.jp">
                        </dd>
                    </dl>

                    <dl class="p-contact-form__row p-contact-form__row--end">
                        <dt class="p-contact-form__term">
                            <label for="tel">電話番号</label>
                        </dt>
                        <dd class="p-contact-form__desc">
                            <input id="tel" name="tel" type="tel" class="p-contact-form__input"
                                placeholder="090-1234-5678">
                        </dd>
                    </dl>

                    <dl class="p-contact-form__row">
                        <dt class="p-contact-form__term p-contact-form__term--lineheight-s">
                            目&#12288;的<br class="u-pc-only"><span class="p-contact-form__term__note"></span>(複数選択可)
                        </dt>
                        <dd class="p-contact-form__desc">
                            <div class="p-contact-form__checkbox">
                                <label class="p-contact-form__check"><input type="checkbox" name="purpose[]"
                                        value="plan">
                                    <span>プランについてのお問い合わせ</span>
                                </label>
                                <label class="p-contact-form__check"><input type="checkbox" name="purpose[]"
                                        value="hearing">
                                    <span>ヒアリングのご予約</span>
                                </label>
                                <label class="p-contact-form__check"><input type="checkbox" name="purpose[]"
                                        value="doc">
                                    <span>資料請求</span>
                                </label>
                                <label class="p-contact-form__check"><input type="checkbox" name="purpose[]"
                                        value="other">
                                    <span>その他</span>
                                </label>
                            </div>
                        </dd>
                    </dl>

                    <dl class="p-contact-form__row">
                        <dt class="p-contact-form__term">
                            <label for="message">内&#12288;容</label>
                        </dt>
                        <dd class="p-contact-form__desc">
                            <textarea id="message" name="message" class="p-contact-form__textarea"
                                placeholder="内容に関する詳細や備考等をご入力ください。"></textarea>
                        </dd>
                    </dl>
                </div>
                <div class="p-contact-form__btn">
                    <button type="submit" class="c-btn c-btn--block">送 信</button>
                </div>

            </form> -->
            <?php if ( have_posts() ) :
            while ( have_posts() ) : the_post();
            remove_filter('the_content', 'wpautop');
            the_content();
            endwhile;
          endif; ?>


        </div>
    </div>



</main>

<!-- footer -->
<?php get_footer(); ?>