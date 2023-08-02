<?php
/*
Template Name: 会社情報 > ISO
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
		<h1><span>会社情報</span>ISO</h1>
	</div>
</div>

<main class="l-main p-company" role="main">
	<div class="l-main__wrapper">
		<div class="l-main__inner">

      <div class="l-main__cont">
        <section class="c-section">
          <div class="p-company__iso">
            <p>弊社取得済の各ISO認証の適用部署は以下の通りです。（2021年4月1日現在）</p>
            <div class="p-company__iso__table">
              <table>
                <thead>
                  <tr><th>適用部署名</th><th>ISO9001<br>（対象部署26）</th><th>ISO14001<br>（対象部署13）</th><th>ISO22301<br>（対象部署12）</th><th>ISO/IEC17025<br>（対象部署1）</th></tr>
                </thead>
                <tbody>
                  <tr><td>総務人事部</td><td>◎</td><td>◎</td><td>◎</td><td></td></tr>
                  <tr><td>資材部</td><td>◎</td><td>◎</td><td>◎</td><td></td></tr>
                  <tr><td>安全環境品質管理部</td><td>◎</td><td>◎</td><td>◎</td><td></td></tr>
                  <tr><td>O&amp;M部</td><td>◎</td><td></td><td></td><td></td></tr>
                  <tr><td>排水処理営業部</td><td>◎</td><td></td><td></td><td></td></tr>
                  <tr><td>排水カスタマー部</td><td>◎</td><td></td><td></td><td></td></tr>
                  <tr><td>用水処理営業部</td><td>◎</td><td></td><td></td><td></td></tr>
                  <tr><td>用水カスタマー部</td><td>◎</td><td></td><td></td><td></td></tr>
                  <tr><td>汎用装置部</td><td>◎</td><td></td><td></td><td></td></tr>
                  <tr><td>医薬用水部</td><td>◎</td><td></td><td></td><td></td></tr>
                  <tr><td>分離精製部</td><td>◎</td><td></td><td></td><td></td></tr>
                  <tr><td>地下水営業部</td><td>◎</td><td>◎</td><td>◎</td><td></td></tr>
                  <tr><td>地下水カスタマー部</td><td>◎</td><td>◎</td><td>◎</td><td></td></tr>
                  <tr><td>水質分析センター</td><td>◎</td><td>◎</td><td>◎</td><td>◎</td></tr>
                  <tr><td>メディカル部</td><td>◎</td><td></td><td></td><td></td></tr>
                  <tr><td>メディカル技術部</td><td>◎</td><td></td><td></td><td></td></tr>
                  <tr><td>秋津研究センター</td><td>◎</td><td>◎</td><td></td><td></td></tr>
                  <tr><td>エンジニアリング部</td><td>◎</td><td></td><td></td><td></td></tr>
                  <tr><td>水処理技術部</td><td>◎</td><td></td><td></td><td></td></tr>
                  <tr><td>分離精製技術部</td><td>◎</td><td></td><td></td><td></td></tr>
                  <tr><td>地下水技術部</td><td>◎</td><td>◎</td><td>◎</td><td></td></tr>
                  <tr><td>札幌支店</td><td>◎</td><td>◎</td><td>◎</td><td></td></tr>
                  <tr><td>仙台支店</td><td>◎</td><td>◎</td><td>◎</td><td></td></tr>
                  <tr><td>名古屋支店</td><td>◎</td><td>◎</td><td>◎</td><td></td></tr>
                  <tr><td>大阪支店</td><td>◎</td><td>◎</td><td>◎</td><td></td></tr>
                  <tr><td>福岡支店</td><td>◎</td><td>◎</td><td>◎</td><td></td></tr>
                </tbody>
              </table>
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