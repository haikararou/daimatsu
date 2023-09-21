<?php get_header(); ?>

<main class="l-main">
    <section class="l-wrapper">
        <div class="p-breadcrumb">
            <ul class="p-breadcrumb__container">
                <li class="p-breadcrumb__item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                <li class="p-breadcrumb__item">商品のご案内</li>
            </ul>
        </div>
        <div class="l-hero">
            <h1 class="c-text--h1">商品のご案内</h1>
        </div>
    </section>
    <section class="lead">
        <section class="l-wrapper4">
            <div class="p-text-box">
                <div class="p-product__top">
                    <div class="p-product__top---txt">
                        <h2>業務用商品</h2>
                        <p>季節の惣菜から通年の定番商品まで<br>
                            幅広い品揃えをご覧ください。<br>
                            商品開発など、<br>
                            お気軽にお問い合わせください。</p>
                        <p><a href="<?php echo home_url('/products/category/commercial/'); ?>" class="underline">一覧を見る</a></p>
                    </div>
                </div>
                <div class="p-product__top even">
                    <div class="p-product__top---txt">
                        <h2>ご家庭用商品</h2>
                        <p>食卓にもう一品！<br>
                            あったかごはんにぴったり！<br>
                            毎日の忙しい暮らしの中で、<br>
                            「手間をかけずにおいしく食べたい」を<br>
                            実現。<br>
                            ご購入総額5,250円（税込）以上で<br>
                            送料サービス。</p>
                        <p><a href="<?php echo home_url('/products/category/household/'); ?>" class="underline">一覧を見る</a></p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <?php get_footer(); ?>