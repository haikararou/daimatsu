<?php
/*
Template Name: お問い合わせ - 完了ページ
 */
get_header(); ?>

<main class="l-main">
    <section class="l-wrapper">
        <div class="p-breadcrumb">
            <ul class="p-breadcrumb__container">
                <li class="p-breadcrumb__item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                <li class="p-breadcrumb__item"><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
                <li class="p-breadcrumb__item">お問い合わせありがとうございました</li>
            </ul>
        </div>
        <div class="l-hero">
            <h1 class="c-text--h1">お問い合わせありがとうございました</h1>
        </div>
    </section>
    <section class="l-wrapper4">
        <div class="p-text-box">
            <p>株式会社ダイマツへお問い合わせ頂き誠にありがとうございます。</p>
            <p>お送り頂きました内容を確認の上、折り返しご連絡させて頂きます。<br>また、ご記入頂いたメールアドレスへ、自動返信の確認メールをお送りしております。</p>
            <p></p>
            <p>しばらく経ってもメールが届かない場合は、入力頂いたメールアドレスが間違っているか、迷惑メールフォルダに振り分けられている可能性がございます。
                また、ドメイン指定をされている場合は、「info@daimatsu-net.jp」からのメールが受信できるようあらかじめ設定をお願いいたします。以上の内容をご確認の上、お手数ですがもう一度フォームよりお問い合わせ頂きますようお願い申し上げます。</p>
        </div>
        <div class="p-text-box">
            <div class="wp-pager">
                <ul>
                    <li class="center"><a href="<?php echo home_url('/'); ?>" class="underline">TOPに戻る</a></li>
                </ul>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>