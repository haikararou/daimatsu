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
					<li class="p-footer__banner-list-item">お電話でのお問い合わせは<a href="tel:0120-014-700" class="p-footer__banner-list-item-green">0120-014-700<span>営業時間 8:30〜17:00（平日）</span></a></li>
					<li class="p-footer__banner-list-item">メールでのお問い合わせは<a href="<?php echo home_url('/contact'); ?>" class="p-footer__banner-list-item-white underline4"><span>お問い合わせフォーム</span></a></li>
				</ul>
			</div>
		</div>
		<div class="l-wrapper">
			<div class="p-footer__inner-sitemap">
				<div class="p-footer__inner-list">
					<ul class="p-footer__list">
						<li class="p-footer__list-item div1"><a href="<?php echo home_url('/product'); ?>" class="a-effect<?php if(is_post_type_archive('product') || is_tax('product_cat') || is_singular('product')): ?> a-active<?php endif; ?>">商品紹介</a></li>
						<li class="p-footer__list-item div2"><a href="<?php echo home_url('/information'); ?>" class="a-effect<?php if(is_page('information')): ?> a-active<?php endif; ?>">工場案内</a></li>
						<li class="p-footer__list-item div3"><a href="<?php echo home_url('/about'); ?>" class="a-effect<?php if(is_page('about')): ?> a-active<?php endif; ?>">会社概要</a></li>
						<li class="p-footer__list-item div4"><a href="<?php echo home_url('/contact'); ?>" class="a-effect<?php if(is_page('contact')): ?> a-active<?php endif; ?>">お問い合わせ</a></li>
						<li class="p-footer__list-item div5"><a href="<?php echo home_url('/news'); ?>" class="a-effect<?php if(is_post_type_archive('news') || is_tax('news_cat') || is_singular('news')): ?> a-active<?php endif; ?>">お知らせ</a></li>
						<li class="p-footer__list-item div6"><a href="<?php echo home_url('/privacy'); ?>" class="a-effect<?php if(is_page('privacy')): ?> a-active<?php endif; ?>">プライバシーポリシー</a></li>
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
</body>
</html>