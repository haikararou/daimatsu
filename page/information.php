<?php
/*
Template Name: 工場のご案内
 */
get_header(); ?>

<main class="l-main p-information">
    <section class="l-wrapper">
        <div class="p-breadcrumb">
            <ul class="p-breadcrumb__container">
                <li class="p-breadcrumb__item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                <li class="p-breadcrumb__item">工場のご案内</li>
            </ul>
        </div>
        <div class="l-hero">
            <h1 class="c-text--h1">工場のご案内</h1>
        </div>
    </section>

    <section class="l-wrapper2">
        <div class="p-information__lead">
            規模の大きさと、充実した機械設備が弊社工場の特長です。
        </div>
        <section class="p-information__ph01">
            <figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/information/img01-01.jpg" alt=""></figure>
            <figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/information/img01-02.jpg" alt=""></figure>
            <figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/information/img01-03.jpg" alt=""></figure>
            <figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/information/img01-04.jpg" alt=""></figure>
            <figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/information/img01-05.jpg" alt=""></figure>
            <figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/information/img01-06.jpg" alt=""></figure>
        </section>

        <div class="p-information__txt">
            機械設備で省力化を目指していますが、どうしても「人の目」「人の手」でしかできない大切な工程があります。<br>
            熟達した手仕事が、高い品質を支えています。
        </div>

        <section class="p-information__ph02">
            <figure id="ViewIn">
                <picture>
                    <source media="(min-width: 620px)" srcset="<?php bloginfo('template_url') ?>/assets/img/information/img02-01.jpg">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/information/img02-01sp.jpg" alt="">
                </picture>
            </figure>
            <figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/information/img02-02.jpg" alt=""></figure>
        </section>

        <div class="p-information__txt">
            <div>丁寧な洗浄と選別、おいしい調味加工技術、正確な計量、細心の包装、日々の品質チェック、商品管理、環境への配慮……<br>
                このすべてが、お客さまの信頼を生み出しています。</div>
        </div>

        <section class="p-information__ph03">
            <figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/information/img03-01.jpg" alt=""></figure>
            <figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/information/img03-02.jpg" alt=""></figure>
            <figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/information/img03-03.jpg" alt=""></figure>
        </section>
    </section>

    <?php get_footer(); ?>