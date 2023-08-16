<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>

<main class="l-main">
  <section class="l-wrapper">
    <div class="p-breadcrumb">
      <ul class="p-breadcrumb__container">
        <li class="p-breadcrumb__item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
        <li class="p-breadcrumb__item">404</li>
      </ul>
    </div>
    <div class="l-hero">
      <h1 class="c-text--h1">Page Not Found</h1>
    </div>
  </section>
  <section class="l-wrapper4">
    <div class="p-text-box">
      <h2 class="c-text--h2">404 Error</h2>
      <p>まことに申し訳ありませんが、指定されたURLのページは存在しません。<br>
        サイト更新などによってURLが変更になったか、URLが正しく入力されていない可能性があります。<br>
        恐れ入りますが、ナビゲーションのリンクからご希望のページをお探しください。</p>
    </div>
    <div class="p-text-box">
			<div class="wp-pager">
				<ul>
					<li class="center"><a href="<?php echo home_url('/'); ?>" class="underline">TOPへ戻る</a></li>
				</ul>
			</div>
		</div>
  </section>

<?php get_footer(); ?>

