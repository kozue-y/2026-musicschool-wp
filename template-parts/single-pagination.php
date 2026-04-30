<?php
$prev_post = get_previous_post();
$next_post = get_next_post();
$add_class_result = '';

if (is_singular('result')) {
$add_class_result = 'c-single-pagination--result';
}
?>

<nav class="c-single-pagination <?php echo $add_class_result; ?>" aria-label="前後の記事">
    <ul class="c-single-pagination__list">
        <?php if ( ! empty($prev_post) ) : ?>
        <li class="c-single-pagination__item">
            <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="c-single-pagination__link">
                <span class="c-single-pagination__label c-single-pagination__label--prev">
                    ◀︎ 前の記事
                </span>
                <div class="c-single-pagination__body">
                    <div class="c-single-pagination__thumb u-pc-only">
                        <?php if ( has_post_thumbnail($prev_post->ID) ) : ?>
                        <?php echo get_the_post_thumbnail($prev_post->ID, 'medium'); ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                        <?php endif; ?>
                    </div>
                    <p class="c-single-pagination__title">
                        <?php echo esc_html(wp_trim_words($prev_post->post_title, 25, '...')); ?>
                    </p>
                </div>
            </a>
        </li>
        <?php endif; ?>

        <?php if ( ! empty($next_post) ) : ?>
        <li class="c-single-pagination__item">
            <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="c-single-pagination__link">
                <span class="c-single-pagination__label c-single-pagination__label--next">
                    次の記事 ▶︎
                </span>
                <div class="c-single-pagination__body">
                    <div class="c-single-pagination__thumb u-pc-only">
                        <?php if ( has_post_thumbnail($next_post->ID) ) : ?>
                        <?php echo get_the_post_thumbnail($next_post->ID, 'medium'); ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                        <?php endif; ?>
                    </div>
                    <p class="c-single-pagination__title">
                        <?php echo esc_html(wp_trim_words($next_post->post_title, 25, '...')); ?>
                    </p>
                </div>
            </a>
        </li>
        <?php endif; ?>
    </ul>
</nav>