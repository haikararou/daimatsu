<?php
/*
Template Name: 資材購買規約・約款
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
		<h1>資材購買規約・約款</h1>
	</div>
</div>

<main class="l-main p-page" role="main">
	<div class="l-main__wrapper">

    <section class="c-section">
      <p>下記のPDFのにてご確認ください。</p>

      <ul class="p-page__pdf">
        <li><a target="_blank" class="c-icn__pdf" href="<?php bloginfo('template_url') ?>/assets/pdf/partner_c47bdced73aea2f42523603c329abf79a4682d48.pdf"><span>購入・工事に関する取引基準書</span></a></li>
        <li><a target="_blank" class="c-icn__pdf" href="<?php bloginfo('template_url') ?>/assets/pdf/partner_6a8ffa229abc176876b5a22e284183006f422ae4.pdf"><span>工事下請負基本契約約款</span></a></li>
      </ul>

    </section>

	</div>

<?php get_footer(); ?>