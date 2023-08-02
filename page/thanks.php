
<?php
/*
Template Name: お問い合わせ - 完了ページ
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
      <h2>送信完了しました</h2>
      <p>お問い合わせありがとうございました<br>お客様あてに自動返信メールが送信されましたので、ご確認ください。<br>お問い合わせ内容につきましては、改めて担当者よりご連絡させていただきます。</p>
    </section>
	</div>

<?php get_footer(); ?>