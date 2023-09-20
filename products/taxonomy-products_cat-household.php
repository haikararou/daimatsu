<?php get_header(); ?>

<main class="l-main">
    <section class="l-wrapper">
        <div class="l-hero l-hero__product">
            <div class="l-hero__product---txt">
                <div class="p-breadcrumb">
                    <ul class="p-breadcrumb__container">
                        <li class="p-breadcrumb__item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                        <li class="p-breadcrumb__item"><a href="<?php echo home_url('/products'); ?>">商品のご案内</a></li>
                        <li class="p-breadcrumb__item">ご家庭向け商品一覧</li>
                    </ul>
                </div>
                <h1 class="c-text--h1">ご家庭向け商品一覧</h1>
                <?php if (have_posts()) : ?>
                    <p>
                        季節の惣菜から通年の定番商品まで<br>
                        幅広い品揃えをご覧ください。<br>
                        商品開発など、お気軽にお問い合わせください。
                    </p>
                <?php else : ?>
                    <p>現在準備中です。</p>
                <?php endif; ?>
            </div>
            <div class="l-hero__product---ph">
                <figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/products/household.jpg" alt=""></figure>
            </div>
        </div>
    </section>
    <section class="l-wrapper2">
        <div class="p-text-box">
            <ul class="p-product__list">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="expansion-img underline3">
                                <figure><?php if (get_field('products_thumb')) : ?><img src="<?php the_field('products_thumb'); ?>" alt=""><?php else : ?><img src="<?php bloginfo('template_url') ?>/assets/img/no_images.png" alt=""><?php endif; ?></figure>
                                <h2><?php the_title(); ?></h2>
                            </a>
                        </li>
                <?php endwhile;
                endif; ?>
            </ul>
        </div>
        <div class="p-text-box">
            <div class="p-product__bnr">
                <a href="" target="_blank">
                    <picture>
                        <source media="(min-width: 620px)" srcset="<?php bloginfo('template_url') ?>/assets/img/products/bnr.jpg">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/products/bnr_sp.jpg" alt="">
                    </picture>
                </a>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>