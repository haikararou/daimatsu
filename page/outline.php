<?php
/*
Template Name: 会社情報 > 会社概要
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
		<h1><span>会社情報</span>会社概要</h1>
	</div>
</div>

<main class="l-main p-company" role="main">
	<div class="l-main__wrapper">
		<div class="l-main__inner">

      <div class="l-main__cont">
        <section class="c-section">
          <dl class="p-company__outline">
            <div><dt>商号</dt><dd>三菱ケミカルアクア・ソリューションズ株式会社</dd></div>
            <div><dt>所在地</dt><dd>〒103-0021　東京都中央区日本橋本石町1-2-2　三菱ケミカル日本橋ビル</dd></div>
            <div><dt>電話</dt><dd><a href="tel:03-6848-4220">03-6848-4220</a></dd></div>
            <div><dt>設立</dt><dd>昭和60年11月</dd></div>
            <div><dt>資本金</dt><dd>37,350万円</dd></div>
            <div><dt>決算期</dt><dd>3月（年1回）</dd></div>
            <div><dt>株主</dt><dd>三菱ケミカル株式会社</dd></div>
            <div><dt>従業員数</dt><dd>414人</dd></div>
            <div><dt>事業内容</dt><dd><ul>
              <li>さく井、地下水・工業用水等の飲料水化に関する設計、製作、販売及び運転並びにこれらに関連する装置の巡回点検、検査、工事、試運転及び通常運転の受託業務</li>
              <li>イオン交換樹脂・イオン交換膜その他のイオン交換体の販売及び加工並びに医薬品、吸着剤その他の各種化学工業薬品の販売及び製造</li>
              <li>膜分離活性汚泥法を応用した排水処理装置、中空糸膜による洗浄技術を応用した水濾過装置の設計・製造・施工及び中空糸膜等の販売</li>
              <li>水処理薬品及び関連装置の販売</li>
              <li>水処理装置、化学装置、医療用水機器及び温浴用人工炭酸泉製造装置に関する設計、製作、販売及び運転並びにこれらに関連する水処理装置の巡回点検、検査、工事、試運転及び通常運転の受託業務</li>
              <li>機械器具設置工事業及び土木工事業</li>
              <li>養液栽培システム、苗育苗施設等の農業用関連商品の製造及び販売</li>
              <li>水質分析業</li>
            </ul></dd></div>
            <div><dt>登録</dt><dd><ul>
              <li>建設業許可：国土交通大臣許可(般-2)第16465号<br>許可年月日：令和3年2月9日<br>許可業種：さく井工事業</li>
              <li>建設業許可：国土交通大臣許可(特-2)第16465号<br>許可年月日：令和3年2月9日<br>許可業種：土木工事業･管工事業･鋼構造物工事業・機械器具設置工事業・水道施設工事業・電気工事業・とび・土工工事業</li>
              <li>厚生労働大臣登録水質検査機関第166号　水質分析業</li>
              <li>毒物劇物一般販売業登録：登録番号　30品保生薬第2134号　平成31年4月18日</li>
              <li>一級建築士事務所　東京都知事登録　第53259号</li>
              <li>登録電気工事業者　東京都知事届出 第2810085号</li>
              <li>品質マネジメントシステム認証登録：ISO9001:2015　登録証番号　JQA-QM7641</li>
              <li>環境マネジメントシステム認証登録：ISO14001:2015　登録証番号　JQA-EM2709</li>
              <li>事業継続マネジメントシステム認証登録：ISO22301:2019　登録証番号　JQA-BC0006</li>
              <li>試験所認定：ISO/IEC17025:2017　認定番号　ASNITE 0100 Testing</li>
            </ul></dd></div>
          </dl>
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