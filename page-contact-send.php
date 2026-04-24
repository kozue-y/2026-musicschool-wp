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

    <div class="p-contact-complete">
        <div class="l-inner">
            <p class="p-contact-complete__text">
                お問い合わせいただきありがとうございました。<br>内容確認後、担当者よりメールにてご連絡いたします。
            </p>
            <div class="p-contact-form__btn p-contact-form__btn-send">
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="c-btn c-btn--block">ホームへ戻る</a>
            </div>
        </div>
    </div>

</main>

<!-- footer -->
<?php get_footer(); ?>