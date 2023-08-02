<?php
/*
Template Name: 会社情報 > 社長メッセージ
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
		<h1><span>会社情報</span>社長メッセージ</h1>
	</div>
</div>

<main class="l-main p-company" role="main">
	<div class="l-main__wrapper">
		<div class="l-main__inner">

      <div class="l-main__cont">
        <section class="c-section">
          <div class="p-company__message">
            <div class="p-company__message__img">
              <figure>
                <img src="<?php bloginfo('template_url') ?>/assets/img/company/president.jpg" alt="">
                <figcaption>代表取締役　社長執行役員<br>安口公勉</figcaption>
              </figure>
            </div>
            <div class="p-company__message__txt">
              <p>当社は、イオン交換樹脂（ダイヤイオン）を使用した水処理、分離精製設備を製造販売する日本錬水株式会社として1952年に創業以来、三菱ケミカルグループの中空糸膜技術を使用した排水事業や地下水浄化サービス事業などを統合し、お客様のご要望に最適なソリューションを提供するビジネスを展開してまいりました。</p>
              <p>現在、気候変動やグローバル化の影響により、水資源の重要性がこれまで以上に高まっています。当社は長年にわたり培ってまいりました水処理関連の「材」・「装置」・「サービス」の知見・経験を最大限に活かし、社会課題解決に向けた提案を行う一方、自らの持続的成長を実現しながら、2050年には多くの課題が解決されている社会をめざし、食・農業・医療・工業に関連する多様な技術を組み合わせることで、お客様の持続可能な事業に貢献するソリューションプロバイダーを目指します。</p>
              <p>これからも、当社は三菱ケミカルグループの一員として、安全第一に努め、コンプライアンスを徹底・推進し、安全・安心な水の供給により、お客様の新しい価値創造に貢献してまいります。</p>
              <p>今後とも皆様の変わらぬご愛顧とご支援を賜りますよう、よろしくお願い申し上げます。</p>
            </div>
          </div>
        </section>
      </div>

      <nav class="l-main__nav c-localnav">
        <ul>
          <li class="c-localnav__h1">会社情報</li>
          <li class="c-localnav__01"><a href="<?php echo home_url('/company/outline'); ?>">会社概要</a></li>
          <li class="c-localnav__02"><a href="<?php echo home_url('/company/message'); ?>">社長メッセージ</a></li>
          <li class="c-localnav__03"><a href="<?php echo home_url('/company/history'); ?>">会社沿革</a></li>
          <li class="c-localnav__04"><a href="<?php echo home_url('/company/business'); ?>">事業概要</a></li>
          <li class="c-localnav__05"><a href="<?php echo home_url('/company/network'); ?>">拠点紹介・関連会社</a></li>
          <li class="c-localnav__06"><a href="<?php echo home_url('/company/iso'); ?>">ISO</a></li>
        </ul>
      </nav>

		</div>
	</div>

<?php get_footer(); ?>