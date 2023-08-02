<?php
/*
Template Name: 会社情報 > 事業概要
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
		<h1><span>会社情報</span>事業概要</h1>
	</div>
</div>

<main class="l-main p-company p-company__business" role="main">
	<div class="l-main__wrapper">
		<div class="l-main__inner">

      <div class="l-main__cont">
        <section class="c-section p-company__business__lead">
          <h2>水を活かす。水で結ぶ。</h2>
          <p>三菱ケミカルアクア・ソリューションズ株式会社は、1952年に前進の日本錬水株式会社が事業を開始して、約70年間水処理に関する事業を行っています。2018年には地下水飲料化サービスのパイオニアであるウェルシィ社を仲間に加え、上水から排水までワンストップに事業を拡大してきました。さらに、2021年に養液栽培システムを販売する植物工場事業をスタートし、水とモノのサーキュラーエコノミーを実現する企業へ進化をしようとしています。</p>
          <p>私たちが見ているのは30年後、50年度の世界です。人口が100億人に達し、食糧は1.5倍、スマートフォンなど電子デバイスも1.5倍以上の需要が見込まれています。特に工業用水の利用は2050年に今の4倍になると予測されています（※）。<br>私たちの人の営みには水が欠かせません。私たちは水を活かし、そして、社会と、そこで暮らすみなさまとを水で結ぶ企業であり続けるべく、事業活動並びに研究開発を進めていきます。</p>
          <p><small>※出典：OECD Environmental Outlook to 2050（2012）</small></p>
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

  <section class="c-section p-company__business__flow">
    <div class="c-section__wrapper">
      <img src="<?php bloginfo('template_url') ?>/assets/img/company/business_flow.png" alt="">
    </div>
  </section>

  <section class="c-section p-company__business__realization">
    <div class="c-section__wrapper">
      <h2>三菱ケミカルアクア・ソリューションズがめざす<br>水とモノのサーキュラーエコノミーの実現</h2>
      <div class="p-company__business__realization__box">
        <h3>三菱ケミカルアクア・ソリューションズ事業領域：<br class="c-sp"><span class="water">水</span>と<span class="thing">モノ</span>のサーキュラーエコノミー</h3>
        <div class="p-company__business__realization__box__img">
          <img src="<?php bloginfo('template_url') ?>/assets/img/company/business_realization.jpg" alt="">
        </div>
        <div class="p-company__business__realization__list">
          <h3>三菱ケミカルアクア・ソリューションズの事業一覧</h3>
          <ul>
            <li><a href="<?php echo home_url('/division/napperland'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/index/thumb01.jpg" alt=""><span>植物工場</span></a></li>
            <li><a href="<?php echo home_url('/division/purewater'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/index/thumb02.jpg" alt=""><span>純水・超純水<br>カートリッジ純水器</span></a></li>
            <li><a href="<?php echo home_url('/division/separation'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/index/thumb03.jpg" alt=""><span>分離精製</span></a></li>
            <li><a href="<?php echo home_url('/division/drainage'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/index/thumb04.jpg" alt=""><span>排水処理設備<br>排水診断・相談窓口</span></a></li>
            <li><a href="<?php echo home_url('/division/groundwaterwater'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/index/thumb05.jpg" alt=""><span>地下水</span></a></li>
            <li><a href="<?php echo home_url('/division/waterprocessing'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/index/thumb06.jpg" alt=""><span>水処理薬品<span>冷却水・ボイラー水・その他</span></span></a></li>
            <li><a href="<?php echo home_url('/division/filtration'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/index/thumb07.jpg" alt=""><span>ろ過・軟水</span></a></li>
            <li><a href="<?php echo home_url('/division/medical'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/index/thumb08.jpg" alt=""><span>医療用水<br>医薬用水</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="c-section p-company__business__txt">
    <div class="c-section__wrapper">
      <p>私たちは地下水を処理し、処理後の水を病院や商業施設、食品工場などのお客様に使ってもらっています。また、半導体や電子デバイス製造には、純水や超純水と言った不純物が少なく純度の高い水、限りなくH2Oに近い水を作ることができる装置を提供しています。さらに、人々の生活や工場で出た排水を規制値以下にする、または別の工程で再利用するような排水処理装置を開発、販売してきました。2021年からはこれら水の循環に加えて、養液で栽培する植物工場システムを提案していくことで、水とモノが循環する社会を実現したいと考えています。</p>
      <p>この社会の実現には、世の中のニーズを捉え、新しい技術開発を行うことも必要です。私たちはエネルギー削減を考えることはもちろんのこと、水とモノを貴重な資源と考え、廃棄するものを再利用する、又は別のモノに生まれ変わるような技術を探求していきたいと考えています。</p>
    </div>
  </section>

  <section class="c-section p-company__business__slick">
    <div class="c-section__wrapper">
      <ul class="slider" id="slick_business">
        <li><img src="<?php bloginfo('template_url') ?>/assets/img/company/business_slick.jpg" alt=""><span>植物工場事業部</span></li>
        <li><img src="<?php bloginfo('template_url') ?>/assets/img/company/business_ismb.jpg" alt=""><span>分離精製事業部</span></li>
        <li><img src="<?php bloginfo('template_url') ?>/assets/img/company/business_welcy.jpg" alt=""><span>ウェルシィ事業部</span></li>
        <li><img src="<?php bloginfo('template_url') ?>/assets/img/company/business_ppb.jpg" alt=""><span>錬水事業部</span></li>
        <li><img src="<?php bloginfo('template_url') ?>/assets/img/company/business_haisui.jpg" alt=""><span>排水処理事業部</span></li>
      </ul>
    </div>
  </section>

  <section class="c-section p-company__business__strength">
    <div class="c-section__wrapper">
      <h2>私たちの強み</h2>
      <p>私たちの強みの一つに、装置の重要部分となる処理材料を開発・製造・販売している化学会社が親会社の三菱ケミカルグループであることが挙げられます。化学会社のグループであることから、化学や物理などの専門知識、経験を保有したスタッフがお客様のお悩みをサポートさせていただいております。<br>また、三菱ケミカルアクア・ソリューションズはお客様のご要望に合わせた材料を選択し、ご使用に適した装置を設計するエンジニアリング会社という一面と、装置を設置した後、お客様が問題なくご使用できるように、またトラブルが発生した時に速やかに対応できるように保守管理を行うメンテナンス会社という面も持ち合わせた会社です。私たちはお客様のご要望を実現化させる様々なソリューションを提供する会社として、お客様と共に歩んでいきたいと考えています。</p>
    </div>
  </section>

  <section class="c-section p-company__business__material">
    <div class="c-section__wrapper">
      <!--<h2>材</h2>
      <p>化学材料の会社 三菱ケミカルグループ</p>-->
      <img src="<?php bloginfo('template_url') ?>/assets/img/company/business_material.png" alt="">
    </div>
  </section>

  <div class="c-localnav__sp">
    <nav class="l-main__nav c-localnav">
      <ul>
        <li class="c-localnav__h1">会社情報</li>
        <li class="c-localnav__01"><a href="<?php echo home_url('/company/outline') ?>">会社概要</a></li>
        <li class="c-localnav__02"><a href="<?php echo home_url('/company/message') ?>">社長メッセージ</a></li>
        <li class="c-localnav__03"><a href="<?php echo home_url('/company/history') ?>">会社沿革</a></li>
        <li class="c-localnav__04"><a href="<?php echo home_url('/company/business') ?>">事業概要</a></li>
        <li class="c-localnav__05"><a href="<?php echo home_url('/company/network') ?>">拠点紹介・関連会社</a></li>
        <li class="c-localnav__06"><a href="<?php echo home_url('/company/iso') ?>">ISO</a></li>
      </ul>
    </nav>
  </div>

<?php get_footer(); ?>