<?php get_header(); ?>

<main class="l-main">
    <section class="l-wrapper">
        <div class="p-breadcrumb">
            <ul class="p-breadcrumb__container">
                <li class="p-breadcrumb__item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                <li class="p-breadcrumb__item"><a href="<?php echo home_url('/products'); ?>">商品のご案内</a></li>
                <?php if (is_object_in_term($post->ID, 'products_cat', 'commercial')) : ?>
                    <li class="p-breadcrumb__item"><a href="<?php echo home_url('/products/category/commercial/'); ?>">業務用商品一覧</a></li>
                <?php else : ?>
                    <li class="p-breadcrumb__item"><a href="<?php echo home_url('/products/category/household/'); ?>">ご家庭用商品</a></li>
                <?php endif; ?>
                <li class="p-breadcrumb__item"><?php the_title(); ?></li>
            </ul>
        </div>
    </section>
    <section class="l-wrapper5">
        <?php
        $isNull = get_field('no_page');
        if (!$isNull) : ?>
            <?php
            $isClose = get_field('item-closed');
            if ($isClose) : ?>
                <div class="p-product__post p-product__post--closed">
                <?php else : ?>
                    <div class="p-product__post">
                    <?php endif; ?>
                    <div class="p-product__post---ph">
                        <div class="sticky">
                            <h1 class="c-text--h1"><?php the_title(); ?></h1>
                            <?php if (has_post_thumbnail()) : ?><figure id="container"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt=""></figure><?php endif; ?>
                        </div>
                    </div>
                    <div class="p-product__post---txt" id="aside">
                        <?php the_content(); ?>
                    </div>
                    </div>
                <?php endif; ?>
                <div class="p-product__link">
                    <p class="p-product__link--prev">
                        <?php
                        $format = '<span class="previous">%link</span>';
                        previous_post_link_plus(array(
                            'in_same_tax' => true,
                            'format' => $format,
                            'link' => '前の商品'
                        ));
                        ?>
                    </p>
                    <p>
                        <?php if (is_object_in_term($post->ID, 'products_cat', 'commercial')) : ?>
                            <a href="<?php echo home_url('/products/category/commercial/'); ?>">一覧に戻る</a>
                        <?php else : ?>
                            <a href="<?php echo home_url('/products/category/household/'); ?>">一覧に戻る</a>
                        <?php endif; ?>
                    </p>
                    <p class="p-product__link--next">
                        <?php
                        $format = '<span class="previous">%link</span>';
                        next_post_link_plus(array(
                            'in_same_tax' => true,
                            'format' => $format,
                            'link' => '次の商品'
                        ));
                        ?>
                    </p>
                </div>
    </section>

    <?php get_footer(); ?>