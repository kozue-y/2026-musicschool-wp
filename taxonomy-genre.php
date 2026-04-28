<?php get_header(); ?>

<main class="main">
    <!-- mv -->
    <section class="c-page-mv" id="mv">
        <div class="c-page-mv__image c-page-mv__image--no-mask">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="<?php echo get_template_directory_uri(); ?>/images/result.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/result_sp.jpg" alt="卒業実績">
            </picture>
            <h1 class="c-page-mv__title">卒業実績</h1>
        </div>
    </section>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <!-- 卒業実績 -->
    <section class="p-result-list" id="blog">
        <div class="l-inner">
            <?php
            $term = get_queried_object();
            $term_name = isset($term->name) ? $term->name : 'カテゴリー名不明'; ?>
            <h2 class="p-result-list__title"><?php echo esc_html($term_name); ?></h2>

            <ul class="p-result-list__list">
                <!-- 記事 -->
                <?php 
                if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>

                <li class="p-result-list__item">
                    <a href="<?php the_permalink(); ?>" class="p-result-list__link">
                        <div class="p-result-list__img-wrapper">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="NO image">
                            <?php endif; ?>
                            <span class="p-result-list__category"><?php
                            $terms = get_the_terms(get_the_ID(), 'genre');
                            if (!empty($terms) && !is_wp_error($terms)) {
                              echo esc_html($terms[0]->name);
                            }
                            ?></span>
                        </div>
                        <div class="p-result-list__content">
                            <h3 class="p-result-list__text">
                                <?php echo esc_html( wp_trim_words(get_the_title(), 32, '...') ); ?>
                            </h3>
                            <time datetime="<?php echo esc_attr( get_the_date('Y-m-d') ); ?>"
                                class="p-result-list__date"><?php echo esc_html( get_the_date('Y.m.d') ); ?></time>
                        </div>
                    </a>
                </li>
                <?php endwhile;
                    endif; ?>
            </ul>
            <!-- ページネーション -->
            <nav class="c-pagination p-blog-pagination" aria-label="ページネーション">
                <?php wp_pagenavi(); ?>
            </nav>

        </div>
    </section>
</main>

<!-- footer -->
<?php get_footer(); ?>