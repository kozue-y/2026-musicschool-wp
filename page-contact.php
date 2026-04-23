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
            <p class="p-contact__text">
                当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。<br>
                通常３営業日以内にメールにてご連絡させていただきます。
            </p>
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