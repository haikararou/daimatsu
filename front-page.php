<?php
/*
Template Name: トップページのテンプレート
*/
get_header(); ?>

<main class="l-main" id="main">
	<section class="p-home__main---wrapper">
		<div class="p-home__main">
			<figure id="ViewIn"><div><img src="<?php bloginfo('template_url') ?>/assets/img/top/ph001.jpg" alt="" width="928" height="696"></div></figure>
			<div class="p-home__main---txt">
				<h1>おいしい笑顔の<br>ために</h1>
				<p>株式会社ダイマツは<br>
				野菜・きのこ・山菜を使用した、<br>
				漬物・惣菜の製造と販売を行っています。</p>
			</div>
		</div>
	</section>
	<section class="p-home__lead">
		<div class="p-home__lead---flx">
			<figure class="p-home__lead---flx____ph" id="ViewIn"><picture><source media="(min-width: 619px)" srcset="<?php bloginfo('template_url') ?>/assets/img/top/ph008.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/top/ph002.jpg" width="544" height="724"></picture></figure>
			<div class="p-home__lead---flx____txt">
				<h2>こころを込めて<br>食卓へ</h2>
				<p>豊かな自然が息づく信州。<br>
				ダイマツは志賀高原の入口・中野市に位置し、<br>
				素晴しい景観と便利な交通アクセス、という恵まれた環境にあります。<br>
				ここからおいしい商品と夢とが育まれます。<br>
				おいしいものは人を幸せにします。<br>
				安全安心はもとより、品質の高い商品をご提供して、<br>
				心豊かになるような食卓づくりのお役に立てることを願っています。<br>
				お客様に喜んでいただける商品の製造に日々励んでいます。</p>
				<p><a href="<?php echo home_url('/information'); ?>" class="underline">工場案内を見る</a></p>
			</div>
		</div>
	</section>

	<div class="p-home__strength">
		<h2 class="p-home__strength---title">ダイマツの強み</h2>
		<div class="p-home__strength---list">
			<div class="p-home__strength---list____block">
				<h3>開発力</h3>
				<p>バリエーションに富んだ商品群は150品目にのぼります。オリジナリティを大切に、お客様の嗜好に沿った商品開発に努めています。</p>
				<figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/top/ph003.jpg" alt="" width="256" height="256"></figure>
			</div>
			<div class="p-home__strength---list____block">
				<h3>量産力</h3>
				<p>充実した最新機械設備を使用して、迅速かつ高い量産性を発揮します。<br>細心の衛生管理のもとに、効率的な生産を目指しています。</p>
				<figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/top/ph004.jpg" alt="" width="256" height="256"></figure>
			</div>
			<div class="p-home__strength---list____block">
				<h3>提案力</h3>
				<p>お客様のニーズにお応えし、お役に立てる商品をご提案いたします。伝統を踏まえつつ、次代に向けた食文化の提案を発信してまいります。</p>
				<figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/top/ph005.jpg" alt="" width="256" height="256"></figure>
			</div>
		</div>
	</div>

	<section class="p-home__product---wrapper">
		<div class="p-home__product">
			<h2 class="p-home__product---title">商品紹介</h2>
			<div class="l-wrapper3000">
				<div class="p-product__top">
					<div class="p-product__top---txt">
						<h2>業務用商品</h2>
						<p>季節の惣菜から通年の定番商品まで<br>
						幅広い品揃えをご覧ください。<br>
						商品開発など、<br>
						お気軽にお問い合わせください。</p>
						<p><a href="<?php echo home_url('/products/commercial'); ?>" class="underline">一覧を見る</a></p>
					</div>
					<figure class="p-product__top---ph" id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/top/ph006.jpg" alt=""></figure>
				</div>
				<div class="p-product__top even">
					<div class="p-product__top---txt">
						<h2>ご家庭用商品</h2>
						<p>食卓にもう一品！<br>
						あったかごはんにぴったり！<br>
						毎日の忙しい暮らしの中で、<br>
						「手間をかけずにおいしく食べたい」<br class="br_min">を実現。<br>
						ご購入総額5,250円（税込）<br class="br_min">以上で送料サービス。</p>
						<p><a href="<?php echo home_url('/products/household'); ?>" class="underline">一覧を見る</a></p>
					</div>
					<figure class="p-product__top---ph" id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/top/ph007.jpg" alt=""></figure>
				</div>
			</div>
		</div>
	</section>

	<div class="p-home__news">
		<h2 class="p-home__news---title">お知らせ</h2>
		<div class="p-home__news---list">
			<dl class="p-dl-table">
			<?php $news_posts = get_posts('post_type=news&posts_per_page=5'); if ( !empty($news_posts) ): ?>
			<?php foreach ( $news_posts as $post ): setup_postdata($post); ?>
				<div>
					<dt><?php the_time('Y年m月d日') ?></dt>
					<dd><a href="<?php the_permalink();?>" class="underline2"><?php the_title(); ?></a></dd>
				</div>
			<?php endforeach; wp_reset_postdata(); ?>
			<?php endif; ?>
			</dl>
			<p class="p-home__news---more"><a href="<?php echo home_url('/news'); ?>" class="underline">一覧を見る</a></p>
		</div>
	</div>

<?php get_footer(); ?>