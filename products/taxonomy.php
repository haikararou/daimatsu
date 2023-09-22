<?php get_header(); ?>

<main class="l-main">
    <section class="l-wrapper">
        <div class="l-hero l-hero__product">
            <?php if (is_object_in_term($post->ID, 'products_cat', 'commercial')) : ?>
                <div class="l-hero__product---txt">
                    <div class="p-breadcrumb">
                        <ul class="p-breadcrumb__container">
                            <li class="p-breadcrumb__item"><a a href="<?php echo home_url('/'); ?>">Home</a></li>
                            <li class="p-breadcrumb__item"><a a href="<?php echo home_url('/products'); ?>">商品のご案内</a></li>
                            <li class="p-breadcrumb__item">業務用商品一覧</li>
                        </ul>
                    </div>
                    <h1 class="c-text--h1">業務用商品一覧</h1>
                    <p>
                        季節の惣菜から通年の定番商品まで<br>
                        幅広い品揃えをご覧ください。<br>
                        商品開発など、お気軽にお問い合わせください。
                    </p>
                </div>
            <?php else : ?>
                <div class="l-hero__product---txt">
                    <div class="p-breadcrumb">
                        <ul class="p-breadcrumb__container">
                            <li class="p-breadcrumb__item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                            <li class="p-breadcrumb__item"><a href="<?php echo home_url('/products'); ?>">商品のご案内</a></li>
                            <li class="p-breadcrumb__item">ご家庭向け商品一覧</li>
                        </ul>
                    </div>
                    <h1 class="c-text--h1">ご家庭向け商品一覧</h1>
                    <p>
                        季節の惣菜から通年の定番商品まで<br>
                        幅広い品揃えをご覧ください。<br>
                        商品開発など、お気軽にお問い合わせください。
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="l-wrapper2">
        <div class="p-text-box">
            <ul class="p-product__list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li class="p-product__item">
                            <a href="<?php the_permalink(); ?>" class="expansion-img underline3">
                                <figure><img src="<?php if (has_post_thumbnail()) : ?><?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?><?php else : ?><?php echo catch_that_image(); ?>" alt=""><?php endif; ?></figure>
                                <h2><?php the_title(); ?></h2>
                            </a>
                        </li>
                <?php endwhile;
                endif; ?>
            </ul>
        </div>
        <?php if (is_object_in_term($post->ID, 'products_cat', 'commercial')) : ?>
            <div class="p-text-box">
                <?php wp_pagenavi(); ?>
            </div>
        <?php else : ?>
            <div class="p-text-box">
                <div class="p-product__bnr">
                    <a href="" target="_blank">
                        <picture>
                            <source media="(min-width: 620px)" srcset="<?php bloginfo('template_url') ?>/assets/img/dummy/product/household/bnr.jpg">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/dummy/product/household/bnr_sp.jpg" alt="">
                        </picture>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </section>

    <?php get_footer(); ?>