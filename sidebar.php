<aside class="p-blog-detail__side">
    <div class="p-sidebar">
        <div class="p-widget p-widget--magazine">
            <p class="p-widget__title">無料メールマガジン</p>
            <div class="p-widget__body">
                <a href="#" target="_blank" rel="noopener noreferrer" class="p-widget__body-inner"
                    aria-label="無料メールマガジンのバナー">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog-banner.jpg" alt="無料メールマガジン">
                    <span class="p-widget__text">バナー広告</span>
                </a>
            </div>
        </div>

        <div class="p-widget p-widget--search">
            <p class="p-widget__title">ブログ内を検索</p>
            <form class="p-widget__search-form" action="search.html">
                <label class="p-widget__search-label">
                    <input type="search" name="s" class="p-widget__search-input">
                </label>
                <button type="submit" class="p-widget__search-button" aria-label="検索">
                    <span class="p-widget__search-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-search.svg" alt="検索">
                    </span>
                </button>
            </form>
        </div>

        <div class="p-widget p-widget--recommend">
            <p class="p-widget__title">おすすめの記事</p>
            <ul class="p-widget__list">
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'post_type' => 'blog',
                    'taxonomy' => 'blog_recommend',
                    'term' => 'recommend',
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()):
                    while ($the_query->have_posts()): $the_query->the_post();
                ?>
                <li class="p-widget__item">
                    <a href="<?php the_permalink(); ?>" class="p-widget__link">
                        <span class="p-widget__thumb">
                            <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                            <?php endif; ?>
                        </span>
                        <span
                            class="p-widget__subtitle"><?php echo esc_html(wp_trim_words(get_the_title(), 15, '...')); ?></span>
                    </a>
                </li>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            </ul>
        </div>

        <div class="p-widget p-widget--category">
            <p class="p-widget__title">カテゴリー</p>
            <ul class="p-widget__category-list">
                <?php
                $terms = get_terms([
                    'taxonomy' => 'blog_cate',
                    'hide_empty' => true,
                ]);
                if (!is_wp_error($terms) && !empty($terms)) :
                    foreach ($terms as $term):
                        $term_link = get_term_link($term->term_id);
                        ?>
                <li class="p-widget__category-item">
                    <a href="<?php echo esc_url($term_link); ?>" class="p-widget__category-link">
                        <span class="p-widget__category-label">
                            <?php echo esc_html($term->name); ?>
                        </span>
                    </a>
                </li>
                <?php
                endforeach;
            endif;
            ?>
            </ul>
        </div>
    </div>
</aside>