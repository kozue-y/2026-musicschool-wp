                        <!-- 関連記事 -->
                        <?php
                       $post_type = get_post_type();
                       $post_id = get_the_ID();
                       
                       $taxonomy_map = [
                        'blog' => 'blog_cate',
                       ];

                       if (!isset($taxonomy_map[$post_type])) {
                          return;
                        }

                        $taxonomy = $taxonomy_map[$post_type];
                        $terms = get_the_terms($post_id, $taxonomy);

                        if (!empty($terms) && ! is_wp_error($terms)) :
                            $term_ids = wp_list_pluck($terms, 'term_id');
                        
                        $args = [
                            'posts_per_page' => 3,
                            'post_type' => $post_type,
                            'post__not_in' => [$post_id],
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'tax_query' => [
                                [
                                'taxonomy' => $taxonomy,
                                'field' => 'term_id',
                                'terms' => $term_ids,
                            ],
                        ],
                    ];


                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                        ?>

                        <section class="p-blog-detail__related">
                            <h2 class="p-blog-detail__related-title">関連記事</h2>
                            <ul class="p-blog-detail__related-list">
                                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                                <?php
                                $post_terms = get_the_terms(get_the_ID(), $taxonomy);
                                $term_name = ( ! empty($post_terms) && ! is_wp_error($post_terms) ) ? $post_terms[0]->name : '';
                                ?>
                                <li class="p-blog-detail__related-item">
                                    <a href="<?php the_permalink(); ?>" class="p-blog-detail__related-link">
                                        <div class="p-blog-detail__related-thumb">
                                            <?php if (has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail('medium'); ?>
                                            <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png"
                                                alt="No image">
                                            <?php endif; ?>

                                            <span
                                                class="p-blog-detail__related-category"><?php echo esc_html($term_name); ?></span>
                                        </div>
                                        <div class="p-blog-detail__related-body">
                                            <p class="p-blog-detail__related-subtitle">
                                                <?php echo wp_trim_words(get_the_title(), 32, '...'); ?>
                                            </p>
                                            <time class="p-blog-detail__related-date"
                                                datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                                                <?php echo esc_html(get_the_date('Y.m.d') ); ?></time>
                                        </div>
                                    </a>
                                </li>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            </ul>
                        </section>
                        <?php
                            endif;
                        endif;
                        ?>