<?php
/*
Template Name: お問い合わせ
 */
get_header(); ?>

<main class="l-main">
  <section class="l-wrapper">
    <div class="p-breadcrumb">
      <ul class="p-breadcrumb__container">
        <li class="p-breadcrumb__item"><a href="../">Home</a></li>
        <li class="p-breadcrumb__item">お問い合わせ</li>
      </ul>
    </div>
    <div class="l-hero">
      <h1 class="c-text--h1">お問い合わせ</h1>
    </div>
  </section>
  <?php echo do_shortcode('[contact-form-7 id="5" title="お問い合わせ" html_class="h-adr"]'); ?>

<?php get_footer(); ?>
