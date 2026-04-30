<!-- footer -->
<footer id="footer" class="c-footer">
    <div class="l-inner">
        <nav aria-label="フッターナビゲーション">
            <?php
            wp_nav_menu(
                array(
                    'menu_class' => 'c-footer__nav',
                    'theme_location' => 'footer',
                    'container' => false,
                    )
                );
                ?>
        </nav>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo_white.svg" alt="サイトロゴ">
        </a>
        <div class="c-footer__copyright">
            <small>Copyright &copy; 0000 KITAMURA music school Inc. All Rights</small>
        </div>
        <ul class="c-footer__sns">
            <li><a href="https://x.com/" target="_blank" rel="noopener noreferrer"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.svg"
                        alt="twitterへのリンク（別タブで開きます）"></a></li>
            <li><a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook.svg"
                        alt="facebookへのリンク（別タブで開きます）"></a></li>
            <li><a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/icon_youtube.svg"
                        alt="youtubeへのリンク（別タブで開きます）"></a></li>
            <li><a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/icon_instagram.svg"
                        alt="instagramへのリンク（別タブで開きます）"></a></li>
        </ul>
    </div>
</footer>
</div>
<!-- TOPへ戻るボタン・お問い合わせボタン -->
<?php get_template_part('template-parts/fixed-buttons'); ?>


<?php wp_footer(); ?>
</body>

</html>