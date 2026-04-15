<?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        ?>

<nav class="p-blog-detail__post-nav" aria-label="前後の記事">
    <ul class="p-blog-detail__post-nav-list">
        <?php if ( ! empty($prev_post) ) : ?>
        <li class="p-blog-detail__post-nav-item">
            <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="p-blog-detail__post-nav-link">
                <span class="p-blog-detail__post-nav-label p-blog-detail__post-nav-label--prev">
                    ◀︎ 前の記事
                </span>
                <div class="p-blog-detail__post-nav-body">
                    <div class="p-blog-detail__post-nav-thumb u-pc-only">
                        <?php if ( has_post_thumbnail($prev_post->ID) ) : ?>
                        <?php echo get_the_post_thumbnail($prev_post->ID, 'medium'); ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                        <?php endif; ?>
                    </div>
                    <p class="p-blog-detail__post-nav-title">
                        <?php echo esc_html(wp_trim_words($prev_post->post_title, 25, '...')); ?>
                    </p>
                </div>
            </a>
        </li>
        <?php endif; ?>

        <?php if ( ! empty($next_post) ) : ?>
        <li class="p-blog-detail__post-nav-item">
            <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="p-blog-detail__post-nav-link">
                <span class="p-blog-detail__post-nav-label p-blog-detail__post-nav-label--next">
                    次の記事 ▶︎
                </span>
                <div class="p-blog-detail__post-nav-body">
                    <div class="p-blog-detail__post-nav-thumb u-pc-only">
                        <?php if ( has_post_thumbnail($next_post->ID) ) : ?>
                        <?php echo get_the_post_thumbnail($next_post->ID, 'medium'); ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                        <?php endif; ?>
                    </div>
                    <p class="p-blog-detail__post-nav-title">
                        <?php echo esc_html(wp_trim_words($next_post->post_title, 25, '...')); ?>
                    </p>
                </div>
            </a>
        </li>
        <?php endif; ?>
    </ul>
</nav>