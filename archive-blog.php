<?php get_header(); ?>

<main class="main">
    <!-- mv -->
    <section class="c-page-mv" id="mv">
        <div class="c-page-mv__image">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/blog.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog_sp.jpg" alt="ブログ">
            </picture>
            <h1 class="c-page-mv__title">ブログ</h1>
        </div>
    </section>

    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <!-- blog -->
    <section class="p-blog-list" id="blog">
        <div class="l-inner">
            <h2 class="p-blog-list__title">ブログ一覧</h2>

            <ul class="p-blog-list__list">
                <!-- 記事1 -->
                <?php
                if (have_posts()) :
                  while (have_posts()) :
                    the_post();
                ?>
                <li class="p-blog-list__item">
                    <a href="<?php the_permalink(); ?>" class="p-blog-list__link">
                        <div class="p-blog-list__img-wrapper">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                            <?php endif; ?>
                            <span class="p-blog-list__category">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'blog_cate');
                                if (!empty($terms) && !is_wp_error($terms)) {
                                  echo esc_html($terms[0]->name);
                                }
                                ?>
                            </span>
                        </div>
                        <div class="p-blog-list__content">
                            <h3 class="p-blog-list__subtitle">
                                <?php echo wp_trim_words(get_the_title(), 26, '...'); ?>
                            </h3>
                            <time datetime="<?php the_time('Y-m-d'); ?>"
                                class="p-blog-list__date"><?php the_time('Y.m.d'); ?></time>
                            <p class="p-blog-list__text">
                                <?php echo wp_trim_words(get_the_content(), 120, '...'); ?>
                            </p>
                        </div>
                    </a>
                </li>
                <?php
                  endwhile;
                endif;
                ?>
            </ul>
            <nav class="c-pagination p-blog-pagination" aria-label="ページネーション">
                <?php wp_pagenavi(); ?>
            </nav>

        </div>
    </section>
</main>

<!-- footer -->
<?php get_footer(); ?>