<?php

/**
 * フッターテンプレート
 */
?>
</main>

<footer class="l-footer">
    <div class="p-footer">
        <div class="p-footer__banner">
            <div class="p-footer__banner-inner l-wrapper">
                <ul class="p-footer__banner-list">
                    <li class="p-footer__banner-list-item">
                        <a href="tel:0120-014-700" class="p-footer__banner-list-item-tel">
                            <p>お電話でのお問い合わせは</p>
                            <p>0120-014-700</p>
                            <p>営業時間 8:30〜17:00（平日）</p>
                        </a>
                    </li>
                    <li class="p-footer__banner-list-item">
                        <a href="<?php echo home_url('/contact'); ?>" class="p-footer__banner-list-item-mail underline4">
                            <p>メールでのお問い合わせは</p>
                            <p>お問い合わせフォーム</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="l-wrapper">
            <div class="p-footer__inner-sitemap">
                <div class="p-footer__inner-list">
                    <ul class="p-footer__list">
                        <li class="p-footer__list-item div1"><a href="<?php echo home_url('/products'); ?>" class="a-effect<?php if (is_post_type_archive('products') || is_tax('products_cat') || is_singular('products')) : ?> a-active<?php endif; ?>">商品のご案内</a></li>
                        <li class="p-footer__list-item div2"><a href="<?php echo home_url('/information'); ?>" class="a-effect<?php if (is_page('information')) : ?> a-active<?php endif; ?>">工場のご案内</a></li>
                        <li class="p-footer__list-item div3"><a href="<?php echo home_url('/about'); ?>" class="a-effect<?php if (is_page('about')) : ?> a-active<?php endif; ?>">会社概要</a></li>
                        <li class="p-footer__list-item div4"><a href="<?php echo home_url('/contact'); ?>" class="a-effect<?php if (is_page('contact')) : ?> a-active<?php endif; ?>">お問い合わせ</a></li>
                        <li class="p-footer__list-item div5"><a href="<?php echo home_url('/news'); ?>" class="a-effect<?php if (is_post_type_archive('news') || is_tax('news_cat') || is_singular('news')) : ?> a-active<?php endif; ?>">お知らせ</a></li>
                        <li class="p-footer__list-item div6"><a href="<?php echo home_url('/privacy'); ?>" class="a-effect<?php if (is_page('privacy')) : ?> a-active<?php endif; ?>">プライバシーポリシー</a></li>
                    </ul>
                </div>
                <div class="p-footer__inner-logo">
                    <figure class="p-footer__logo">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="株式会社ダイマツ">
                    </figure>
                    <div class="p-footer__inner-add">
                        <address><em>〒383-0053</em>長野県中野市大字草間2079</address><br>
                        <span>TEL: 0269-24-1133</span><span>FAX: 0269-24-1033</span>
                    </div>
                    <div class="p-footer__bottom">
                        <small>Copyright&copy; 2023 DAIMATSU Co;Ltd. All Rights Reserved.<br>おうちdeごはん&copy;</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php bloginfo('template_url') ?>/assets/js/common.js"></script>

<?php wp_footer(); ?>
<?php if (is_page('contact')) : ?>
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
<?php endif; ?>
</body>

</html>