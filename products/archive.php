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
        <section class="l-wrapper p-product__top--container">
            <div class="p-text-box">
                <div class="p-product__top">
                    <div class="p-product__top--text">
                        <a href="<?php echo home_url('/products/category/commercial/'); ?>" class="underline3">
                            <h3>業務用商品</h3>
                            <p>季節の惣菜から通年の定番商品まで幅広い品揃えをご覧ください。商品開発など、お気軽にお問い合わせください。</p>
                            <h4>一覧を見る</h4>
                        </a>
                    </div>
                    <div class="p-product__top--text">
                        <a href="<?php echo home_url('/products/category/household/'); ?>" class="underline3">
                            <h3>ご家庭用商品</h3>
                            <p>食卓にもう一品！あったかごはんにぴったり！毎日の忙しい暮らしの中で、「手間をかけずにおいしく食べたい」を実現。</p>
                            <h4>一覧を見る</h4>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <?php get_footer(); ?>