<?php
/*
Template Name: トップページのテンプレート
*/
get_header(); ?>

<main class="l-main" id="main">
    <section class="p-home__main---wrapper">
        <div class="p-home__main">
            <figure id="ViewIn">
                <div><img src="<?php bloginfo('template_url') ?>/assets/img/top/ph-main.webp" alt="" width="3136" height="1560"></div>
            </figure>
            <div class="p-home__main--txt">
                <h1>｢おいしい笑顔」のために……</h1>
                <p>株式会社ダイマツは野菜・きのこ・山菜をもちいた、漬物・惣菜の製造と販売をおこなっています。</p>
            </div>
        </div>
    </section>
    <section class="p-home__lead">
        <div class="p-home__lead--txt">
            <h2>こころを込めて食卓へ</h2>
            <p>豊かな自然が息づく信州。<br>
                ダイマツは志賀高原の入口・中野市に位置し、<br>
                素晴しい景観と便利な交通アクセス、という恵まれた環境にあります。<br>
                ここからおいしい商品と夢とが育まれます。<br>
                おいしいものは人を幸せにします。<br>
                安全安心はもとより、品質の高い商品をご提供して、心豊かになるような食卓づくりのお役に立てることを願っています。<br>
                お客様に喜んでいただける商品の製造に日々励んでいます。</p>
        </div>
        <div class="p-home__strength">
            <div class="p-home__strength--list">
                <div class="p-home__strength--block">
                    <h3>開発力</h3>
                    <p>オリジナリティを大切に、お客様の嗜好に沿った商品開発に努めています。バリエーションに富んだ商品をご用意しています。</p>
                </div>
                <div class="p-home__strength--block">
                    <h3>量産力</h3>
                    <p>充実した最新機械設備を使用して、迅速かつ高い量産性を発揮します。細心の衛生管理のもとに、効率的な生産を目指しています。</p>
                </div>
                <div class="p-home__strength--block">
                    <h3>提案力</h3>
                    <p>お客様のニーズにお応えし、お役に立てる商品をご提案いたします。伝統を踏まえつつ、次代に向けた食文化の提案を発信してまいります。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-home__product--wrapper">
        <div class="p-home__product">
            <h2 class="p-home__product--title c-text--top-h2">商品のご案内</h2>
            <div class="p-home__product--container">
                <div class="p-home__product--text">
                    <h2>業務用商品</h2>
                    <p>季節の惣菜から通年の定番商品まで幅広い品揃えをご覧ください。商品開発など、お気軽にお問い合わせください。</p>
                    <p><a href="<?php echo home_url('/products/commercial'); ?>" class="underline">一覧を見る</a></p>
                </div>
                <div class="p-home__product--text">
                    <h2>ご家庭用商品</h2>
                    <p>食卓にもう一品！あったかごはんにぴったり！毎日の忙しい暮らしの中で、「手間をかけずにおいしく食べたい」を実現。</p>
                    <p><a href="<?php echo home_url('/products/household'); ?>" class="underline">一覧を見る</a></p>
                </div>
                </>
            </div>
            <div class="p-contact__tel">
                <a href="tel:0120-014-700">
                    <p>お電話でのお問い合わせは</p>
                    <p>0120-014-700</p>
                    <p>営業時間 8:30〜17:00（平日）</p>
                </a>
            </div>
        </div>
    </section>

    <div class="p-home__news">
        <h2 class="p-home__news--title  c-text--top-h2">お知らせ</h2>
        <div class="p-home__news---list">
            <dl class="p-dl-table">
                <?php $news_posts = get_posts('post_type=news&posts_per_page=5');
                if (!empty($news_posts)) : ?>
                    <?php foreach ($news_posts as $post) : setup_postdata($post); ?>
                        <div>
                            <dt><?php the_time('Y年m月d日') ?></dt>
                            <dd><a href="<?php the_permalink(); ?>" class="underline2"><?php the_title(); ?></a></dd>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                <?php endif; ?>
            </dl>
            <p class="p-home__news---more"><a href="<?php echo home_url('/news'); ?>" class="underline">一覧を見る</a></p>
        </div>
    </div>

    <?php get_footer(); ?>