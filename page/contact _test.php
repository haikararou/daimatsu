<?php
/*
Template Name: お問い合わせ-TEST
 */
get_header(); ?>

<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

<nav class="l-breadcrumbs">
	<div class="c-wrapper">
    <ul>
      <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </ul>
	</div>
</nav>

<div class="c-herohead">
	<div class="c-wrapper">
		<h1>お問い合わせ</h1>
	</div>
</div>

<main class="l-main p-page" role="main">
	<div class="l-main__wrapper">
    <section class="c-section">
      <h2>フォームでのお問い合わせ</h2>
      <p>下記フォームに必要事項を入力後、確認ボタンを押してください。</p>
      <div class="c-form__remaining">
        <p>入力必須な項目は、<br>残り<span class="c-form__number"></span><!-- / <span class="c-form__items"></span>-->件です。</p>
      </div>
      <div class="c-form">
      <?php echo do_shortcode('[contact-form-7 id="1333" title="コンタクトフォーム_TEST" html_class="h-adr"]'); ?>
      </div>
    </section>
	</div>

<?php get_footer(); ?>