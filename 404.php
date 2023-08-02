<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>

<nav class="l-breadcrumbs">
	<div class="c-wrapper">
    <ul>
      <li><a property="item" typeof="WebPage" title="Go to 三菱ケミカルアクア・ソリューションズ株式会社." href="/" class="home" >Home</a><meta property="position" content="1"></li>
      <span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item">404</span></span>
    </ul>
	</div>
</nav>

	<div class="c-herohead">
		<div class="c-wrapper">
			<h1>Page Not Found</h1>
		</div>
	</div>

  <main class="l-main p-page" role="main">
	<div class="l-main__wrapper">

    <section class="c-section">
      <h2>ページが見つかりませんでした</h2>
      <p>まことに申し訳ありませんが、指定されたURLのページは存在しません。<br>
      サイト更新などによってURLが変更になったか、URLが正しく入力されていない可能性があります。<br>
      恐れ入りますが、ナビゲーションのリンクからご希望のページをお探しください。</p>
      <div class="a404">
        <p><a href="<?php echo home_url(''); ?>">トップへ戻る</a></p>
      </div>
    </section>

    </div>

  <?php get_footer(); ?>

