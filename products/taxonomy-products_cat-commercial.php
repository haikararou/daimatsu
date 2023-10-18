<?php get_header(); ?>

<main class="l-main">
    <section class="l-wrapper">
        <div class="l-hero l-hero__product">
            <div class="l-hero__product---txt">
                <div class="p-breadcrumb">
                    <ul class="p-breadcrumb__container">
                        <li class="p-breadcrumb__item"><a a href="<?php echo home_url('/'); ?>">Home</a></li>
                        <li class="p-breadcrumb__item"><a a href="<?php echo home_url('/products'); ?>">商品のご案内</a></li>
                        <li class="p-breadcrumb__item">業務用商品一覧</li>
                    </ul>
                </div>
                <h1 class="c-text--h1">業務用商品一覧</h1>
                <?php if (have_posts()) : ?>
                    <p>
                        季節の惣菜から通年の定番商品まで幅広い品揃えをご覧ください。<br>
                        商品開発など、お気軽にお問い合わせください。
                    </p>
                <?php else : ?>
                    <p>現在準備中です。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="l-wrapper2">
        <div class="p-text-box">
            <ul class="p-product__list">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                if (have_posts()) : while (have_posts()) : the_post();
                        $current_post_number = $wp_query->current_post + 1 + (($paged - 1) * get_query_var('posts_per_page')); ?>
                        <?php if (get_field('no_page')) : ?>
                            <!-- チェックが入っている時に表示される -->
                            <li class="p-product__item--null no_page"></li>
                        <?php else : ?>
                            <!-- チェックが入っていない時に表示される -->
                            <?php if (get_field('item-closed')) : ?>
                                <li class="p-product__item p-product__item--closed">
                                <?php else : ?>
                                <li class="p-product__item">
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>" class="expansion-img underline3">
                                    <?php
                                    $image_id = get_post_thumbnail_id(); //アイキャッチ画像のURLを取得
                                    $image_url = wp_get_attachment_image_src($image_id, true);
                                    ?>
                                    <figure><?php if (has_post_thumbnail()) : ?><img src="<?php echo $image_url[0]; ?>" alt=""><?php else : ?><img src="<?php bloginfo('template_url') ?>/assets/img/no_images.png" alt=""><?php endif; ?></figure>
                                    <p><?php echo $current_post_number; ?></p>
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                </li>
                            <?php endif; ?>
                    <?php endwhile;
                endif; ?>
            </ul>
        </div>
        <div class="p-text-box">
            <?php wp_pagenavi(); ?>
        </div>
    </section>

    <?php get_footer(); ?>