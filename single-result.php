<?php get_header(); ?>
<!-- メイン -->
<main class="main">
    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <section class="p-result-detail">
        <div class="l-inner">
            <?php if (have_posts() ) : ?>
            <?php while (have_posts() ) : the_post(); ?>

            <div class="p-result-detail__header">
                <h1 class="p-result-detail__title"><?php echo esc_html( get_the_title() ); ?></h1>
                <time class="p-result-detail__date"
                    datetime="<?php echo esc_attr( get_the_date('Y-m-d') ); ?>"><?php echo esc_html (get_the_date('Y.m.d') ); ?></time>
                <div class="p-result-detail__img-wrapper">
                    <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('large'); ?>
                    <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                    <?php endif; ?>
                    <span class="p-result-detail__category"><?php
                    $terms = get_the_terms(get_the_ID(), 'genre');
                    if (!empty($terms) && !is_wp_error($terms)) {
                      echo esc_html($terms[0]->name); }
                      ?></span>
                </div>
            </div>

            <div class="p-result-detail__profile">
                <table class="p-result-detail__table">
                    <tbody>
                        <tr>
                            <th scope="row">名前</th>
                            <td><?php echo esc_html( get_field('name') ); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">職業</th>
                            <td><?php echo esc_html( get_field('job') ); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">ジャンル</th>
                            <td><?php
                            $terms = get_the_terms(get_the_ID(), 'genre');
                            if (!empty($terms) && !is_wp_error($terms)) {
                              echo esc_html($terms[0]->name); }
                              ?></td>
                        </tr>
                        <tr>
                            <th scope="row">実績</th>
                            <td><?php echo esc_html( get_field('achievement') ); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">SNS</th>
                            <td><?php echo esc_html( get_field('sns') ); ?></td>
                        </tr>
                    </tbody>
                </table>

                <div class="p-result-detail__text">
                    <?php the_content(); ?>
                </div>
            </div>
            <!-- ページネーション -->
            <?php get_template_part('template-parts/single-pagination'); ?>

            <!-- 関連記事 -->
            <?php get_template_part('template-parts/related-articles'); ?>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>




</main>

<!-- footer -->
<?php get_footer(); ?>