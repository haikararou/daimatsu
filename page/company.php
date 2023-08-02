<?php
/*
Template Name: 会社情報
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
		<h1>会社情報</h1>
	</div>
</div>

<main class="l-main p-company" role="main">
	<div class="l-main__wrapper">

    <section class="c-section">
      <ul class="p-company__index">
        <li><a href="<?php echo home_url('/company/outline'); ?>"><figure><img src="<?php bloginfo('template_url') ?>/assets/img/company/index01.jpg"><figcaption>会社概要</figcaption></figure></a></li>
        <li><a href="<?php echo home_url('/company/message'); ?>"><figure><img src="<?php bloginfo('template_url') ?>/assets/img/company/index02.jpg"><figcaption>社長メッセージ</figcaption></figure></a></li>
        <li><a href="<?php echo home_url('/company/history'); ?>"><figure><img src="<?php bloginfo('template_url') ?>/assets/img/company/index03.jpg"><figcaption>会社沿革</figcaption></figure></a></li>
        <li><a href="<?php echo home_url('/company/business'); ?>"><figure><img src="<?php bloginfo('template_url') ?>/assets/img/company/index04.jpg"><figcaption>事業概要</figcaption></figure></a></li>
        <li><a href="<?php echo home_url('/company/network'); ?>"><figure><img src="<?php bloginfo('template_url') ?>/assets/img/company/index05.jpg"><figcaption>拠点紹介・関連会社</figcaption></figure></a></li>
        <li><a href="<?php echo home_url('/company/iso'); ?>"><figure><img src="<?php bloginfo('template_url') ?>/assets/img/company/index06.jpg"><figcaption>ISO</figcaption></figure></a></li>
      </ul>
    </section>

	</div>

<?php get_footer(); ?>