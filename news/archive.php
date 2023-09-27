<?php get_header(); ?>

<main class="l-main">
    <section class="l-wrapper">
        <div class="p-breadcrumb">
            <ul class="p-breadcrumb__container">
                <li class="p-breadcrumb__item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                <li class="p-breadcrumb__item">お知らせ</li>
            </ul>
        </div>
        <div class="l-hero">
            <h1 class="c-text--h1">お知らせ</h1>
        </div>
    </section>
    <section class="l-wrapper4">
        <div class="p-text-box">
            <?php if (have_posts()) : ?>
                <dl class="p-dl-table">
                    <?php while (have_posts()) : the_post(); ?>
                        <div>
                            <dt><?php the_time('Y年m月d日'); ?></dt>
                            <dd><a href="<?php the_permalink(); ?>" class="underline2"><?php the_title(); ?></a></dd>
                        </div>
                    <?php endwhile; ?>
                </dl>
            <?php endif; ?>
        </div>
        <?php
        $count_post = wp_count_posts(); // カスタム投稿タイプのスラッグを指定
        if ($count_post > 10) : ?>
            <div class="p-text-box">
                <?php wp_pagenavi(); ?>
            </div>
        <?php endif; ?>
    </section>

    <?php get_footer(); ?>