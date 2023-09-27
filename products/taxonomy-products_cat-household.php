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
                        食卓にもう一品！　あったかごはんにぴったり！<br>
                        毎日の忙しい暮らしの中で、「手間をかけずにおいしく食べたい」を実現。
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
                        $current_post_number_house = $wp_query->current_post + 1 + (($paged - 1) * get_query_var('posts_per_page')); ?>
                        <?php if (get_field('no_page')) : ?>
                            <!-- チェックが入っている時に表示される -->
                            <li class="no_page"></li>
                        <?php else : ?>
                            <!-- チェックが入っていない時に表示される -->
                            <li class="p-product__item">
                                <a href="<?php the_permalink(); ?>" class="expansion-img underline3">
                                    <?php
                                    $image_id = get_post_thumbnail_id(); //アイキャッチ画像のURLを取得
                                    $image_url = wp_get_attachment_image_src($image_id, true);
                                    ?>
                                    <figure><?php if (has_post_thumbnail()) : ?><img src="<?php echo $image_url[0]; ?>" alt=""><?php else : ?><img src="<?php bloginfo('template_url') ?>/assets/img/no_images.png" alt=""><?php endif; ?></figure>
                                    <p><?php echo $current_post_number_house; ?></p>
                                    <h2><?php the_title(); ?></h2>
                                </a>
                            </li>
                        <?php endif; ?>
                <?php endwhile;
                endif; ?>
            </ul>
        </div>
    </section>

    <?php get_footer(); ?>