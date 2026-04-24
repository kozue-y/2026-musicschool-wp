<?php
$is_contact_page = is_page('contact');
$is_contact_send_page = is_page('contact-send');
$is_404_page = is_404();
?>

<!-- TOPへ戻るボタン -->
<?php if ( ! $is_contact_send_page && ! $is_404_page) : ?>
<a href="#" class="c-page-top__link" id="js-page-top">
    <div class="c-page-top">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top-arrows.svg" alt="TOPへ戻る矢印">
    </div>
</a>
<?php endif; ?>

<!-- お問合せボタン -->
<?php if ( ! $is_contact_page && ! $is_contact_send_page && ! $is_404_page) : ?>
<a href="contact_form.html" class="c-contact-btn__link" id="js-contact-btn">
    <span class="c-contact-btn__text">お問い合わせ</span>
</a>
<?php endif; ?>