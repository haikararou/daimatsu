<?php
// $title_2nd = '';
// $title_3rd = '';
// $directory_2nd = '';
// $directory_3rd = '';
?>
<!DOCTYPE html>
<html dir="ltr" lang="ja" prefix="og: https://ogp.me/ns#"  class="no-js">
<head>
<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit_test/assets/inc/meta.php");
} else {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit/assets/inc/meta.php");
}
?>
</head>

<body class="l-body">
<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit_test/assets/inc/header.php");
} else {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit/assets/inc/header.php");
}
?>

<main class="l-main">

  <section class="p-home--main--outer">
    <section class="l-wrapper home">
      <div class="p-home--main">
        <h1>誰かの一歩を、<br>支える人になる</h1>
        <p>明日を拓く、長野の中小企業を<br>支える人になりませんか。</p>
        <ul class="p-home--main-list list01">
          <li class="p-home--main-list-item -white"><a href="<?php echo $path; ?>guideline/"><span>募集要項を確認する</span></a></li>
          <li class="p-home--main-list-item -yellow"><a href="<?php echo $path; ?>entry/" target="_blank"><span>エントリーはこちら</span></a></li>
        </ul>
      </div>
    </section>
    <div class="p-home--main--move">
      <div class="swiper slider-main">
          <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="./assets/img/top/main.png"></div>
              <div class="swiper-slide"><img src="./assets/img/top/main.png"></div>
              <div class="swiper-slide"><img src="./assets/img/top/main.png"></div>
              <div class="swiper-slide"><img src="./assets/img/top/main.png"></div>
              <div class="swiper-slide"><img src="./assets/img/top/main.png"></div>
          </div>
      </div>
    </div>
    <ul class="pp-home--main-list list02">
      <li class="p-home--main-list-item -white"><a href="<?php echo $path; ?>guideline/"><span>募集要項を確認する</span></a></li>
      <li class="p-home--main-list-item -yellow"><a href="<?php echo $path; ?>entry/" target="_blank"><span>エントリーはこちら</span></a></li>
    </ul>
  </section>

  <section class="p-home--about--outer">
    <div class="l-wrapper3">
      <div class="p-home--about">
        <h2><span>ABOUT US</span><em class="bracketsL">「</em>公的な保証人<em class="bracketsR">」</em>として、<br>長野県の中小企業を<br>支えています</h2>
        <p>信用保証協会は、法律に基づいて設立された公的機関です。協会の立ち位置やお客様にとっての存在意義について、ご説明します。</p>
      </div>
      <a class="c-arrow wht" href="./about"><span>もっと見る</span></a>
    </div>
  </section>

  <section class="l-wrapper home">
    <div class="p-home--works">
      <figure>
        <img src="./assets/img/top/works.png" art="WORKS 仕事を知る" width="1394" height="932">
      </figure>
      <div>
        <h2><span>WORKS</span>仕事を知る</h2>
        <p>経営者や創業者のお客様が抱える課題と向き合い、最適な解決策を一緒に考えます。信用保証を通じて、事業の発展に貢献します。</p>
        <a class="c-arrow left" href="./works"><span>もっと見る</span></a>
      </div>
    </div>
  </section>

  <section class="l-wrapper2 home">
    <section class="p-home--people">
      <section class="p-people--intro">
        <div class="p-people--intro--title home">
          <h2><span>PEOPLE</span>人を知る</h2>
          <p>職員の性格は十人十色、仕事内容も多種多様。それぞれの特性を活かしながら、日々お客様と向き合っている職員を紹介します。</p>
        </div>
        <a href="./people/people01/" class="p-people--intro--div home intro_01">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people01A.png" alt="中島 菜々子" width="659" height="765">
            <figcaption>明朗快活で<br>場を明るくする<br>期待の新人職員</figcaption>
          </figure>
          <h2>中島 菜々子<span><em>1年目</em>松本営業部業務第1課</span></h2>
        </a>
        <a href="./people/people02/" class="p-people--intro--div home intro_02 even">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people02A.png" alt="本田 朋樹" width="662" height="761">
            <figcaption>課題を<br>本質から解決する<br>気鋭の若手職員</figcaption>
          </figure>
          <h2>本田 朋樹<span><em>2年目</em>松本営業部業務第2課</span></h2>
        </a>
        <a href="./people/people03/" class="p-people--intro--div home intro_03">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people03A.png" alt="浦野 章博" width="659" height="764">
            <figcaption>相手の話に<br>しっかり寄り添う<br>気さくな<br>広報担当職員</figcaption>
          </figure>
          <h2>浦野 章博<span><em>8年目</em>総務部企画情報課</span></h2>
        </a>
        <a href="./people/people04/" class="p-people--intro--div home intro_04 even">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people04A.png" alt="一ノ瀬 美波" width="659" height="765">
            <figcaption>誠実に<br>お客様と向き合う<br>優しい<br>ワーキングママ</figcaption>
          </figure>
          <h2>一ノ瀬 美波<span><em>14年目</em>本店営業部業務第2課</span></h2>
        </a>
        <a href="./people/people05/" class="p-people--intro--div home intro_05">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people05A.png" alt="石坂 友弥" width="659" height="764">
            <figcaption>さりげない<br>気配りで<br>誰からも頼られる<br>ベテラン社員</figcaption>
          </figure>
          <h2>石坂 友弥<span><em>16年目</em>業務統括部業務課</span></h2>
        </a>
      </section>
    </section>
  </section>

  <section class="p-home--zadankai intro_06">
    <div class="l-wrapper4">
      <h2 class="p-home--zadankai--title"><img src="<?php echo $path; ?>assets/img/people/zadankai_title.svg" alt="長野県信用保証協会職員 座談会" width="312" height="150"></h2>
      <p class="p-home--zadankai--text">それぞれの色を持った職員が、年齢、性別、キャリアの垣根を超えて、<br>協会で働く日々について語り合いました！</p>
      <a class="c-arrow" href="./people/zadankai/"><span>もっと見る</span></a>
    </div>
  </section>

  <section class="l-wrapper2 home">
    <div class="p-home--case">
      <div>
        <h2><span>CASE</span>支援事例</h2>
        <p>長野県の約半数の中小企業を支援しています。<br>創業、経営改善、事業再生など、事業の様々な場面で最適なサポートをいたします。</p>
      </div>
      <div class="btn01"><a class="c-arrow left" href="./case"><span>もっと見る</span></a></div>
    </div>
  </section>
  <section class="p-home--slide">

    <div class="swiper card-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide card-slide">
          <a href="./case/#case01" class="card csize">
            <div id="omote" class="fuda csize">
              <h2>支援事例</h2>
              <p>コロナ渦で、集客が難しくなってしまったお客様。新たな宣伝手法・販売経路をつくることで、安定した売上を生むことに成功しました。</p>
            </div>
            <div id="ura" class="fuda csize">
              <h2>創業者支援</h2>
              <figure>
                <img src="./assets/img/case/case_01.png" art="創業者支援">
                <figcaption>個人経営の<br>ケーキ屋さん</figcaption>
              </figure>
            </div>
          </a>
        </div>

        <div class="swiper-slide card-slide">
          <a href="./case/#case02" class="card csize">
            <div id="omote" class="fuda csize">
              <h2>支援事例</h2>
              <p>新規客が少なく、資金繰りが厳しかったお客様。金融機関と連携して経営改善計画を策定し、顧客獲得に向け新メニューを開発しました。</p>
            </div>
            <div id="ura" class="fuda csize">
              <h2>創業者支援</h2>
              <figure>
                <img src="./assets/img/case/case_02.png" art="事業継承支援">
                <figcaption>個性派メニューの<br>欧風料理店</figcaption>
              </figure>
            </div>
          </a>
        </div>

        <div class="swiper-slide card-slide">
          <a href="./case/#case03" class="card csize">
            <div id="omote" class="fuda csize">
              <h2>支援事例</h2>
              <p>近年の売上は減少傾向。事業継承を控えつつ、時期や方法も不明確だったお客様。現状の課題を洗い出し、事業継承の筋道を立てました。</p>
            </div>
            <div id="ura" class="fuda csize">
              <h2>事業継承支援</h2>
              <figure>
                <img src="./assets/img/case/case_03.png" art="創業者支援">
                <figcaption>地域密着型の<br>眼鏡・補聴器店</figcaption>
              </figure>
            </div>
          </a>
        </div>

        <div class="swiper-slide card-slide">
          <a href="./case/#case04" class="card csize">
            <div id="omote" class="fuda csize">
              <h2>支援事例</h2>
              <p>人気店でありながら、低価格な設定のため収益は厳しい状況。店舗移転のタイミングで、事業継続に向け経営改善を図りました。</p>
            </div>
            <div id="ura" class="fuda csize">
              <h2>経営改善支援</h2>
              <figure>
                <img src="./assets/img/case/case_04.png" art="事業継承支援">
                <figcaption>個人経営の<br>ステーキ店</figcaption>
              </figure>
            </div>
          </a>
        </div>

        <div class="swiper-slide card-slide">
          <a  href="./case/#case05" class="card csize">
            <div id="omote" class="fuda csize">
              <h2>支援事例</h2>
              <p>資金繰りに窮していたお客様。経営戦略を練り直し、環境を整えるための資金を保証協力。徐々に、社長の表情が明るくなっていきました。</p>
            </div>
            <div id="ura" class="fuda csize">
              <h2>経営改善支援</h2>
              <figure>
                <img src="./assets/img/case/case_05.png" art="創業者支援">
                <figcaption>木製建具・家具<br>製造業者</figcaption>
              </figure>
            </div>
          </a>
        </div>

        <div class="swiper-slide card-slide">
          <a  href="./case/#case06" class="card csize">
            <div id="omote" class="fuda csize">
              <h2>支援事例</h2>
              <p>債務が過大で、将来に向けた設備投資が困難だったお客様。原価管理の基本的な考え方や今後の方向性について、専門家の指導を受けました。</p>
            </div>
            <div id="ura" class="fuda csize">
              <h2>課題解決支援</h2>
              <figure>
                <img src="./assets/img/case/case_06.png" art="事業継承支援">
                <figcaption>自動車部品中心の<br>塗装業者</figcaption>
              </figure>
            </div>
          </a>
        </div>

        <div class="swiper-slide card-slide">
          <a href="./case/#case07" class="card csize">
            <div id="omote" class="fuda csize">
              <h2>支援事例</h2>
              <p>社内でハラスメント行為が発生。再発防止のために就業規則の見直しを行い、優秀な従業員を確保するために必要な労働環境を整備しました。</p>
            </div>
            <div id="ura" class="fuda csize">
              <h2>課題解決支援</h2>
              <figure>
                <img src="./assets/img/case/case_07.png" art="創業者支援">
                <figcaption>業歴50年の<br>プリント基板製造業者</figcaption>
              </figure>
            </div>
          </a>
        </div>

        <div class="swiper-slide card-slide">
          <a href="./case/#case08" class="card csize">
            <div id="omote" class="fuda csize">
              <h2>支援事例</h2>
              <p>先代の借入金が多額のため更新投資ができず、集客力が大きく低下。過剰な債務の解消、販売チャネルの見直しにより、事業存続を支援しました。</p>
            </div>
            <div id="ura" class="fuda csize">
              <h2>事業再生支援</h2>
              <figure>
                <img src="./assets/img/case/case_08.png" art="事業継承支援">
                <figcaption>地域を代表する<br>老舗温泉旅館</figcaption>
              </figure>
            </div>
          </a>
        </div>

      </div>
    </div>

    <section class="l-wrapper home btn02"><a class="c-arrow left" href="./case"><span>もっと見る</span></a></section>
  </section>

  <section class="l-wrapper home">
    <div class="p-home--environment">
      <figure>
        <img src="./assets/img/top/environment.png" art="ENVIRONMENT 働く環境" width="1395" height="932">
      </figure>
      <div>
        <h2><span>ENVIRONMENT</span>働く環境</h2>
        <p>充実した福利厚生や、職員同士助け合う空気。協会には、安心して働ける「支え合い」の地盤があります。</p>
        <a class="c-arrow left" href="./environment"><span>もっと見る</span></a>
      </div>
    </div>
  </section>
</main>

<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit_test/assets/inc/footer.php");
} else {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit/assets/inc/footer.php");
}
?>

<script>
const swiper = new Swiper('.card-slider', {
  loop: true,
  speed: 6000,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  breakpoints: {//ブレークポイント
    340: {
      slidesPerView: 1.6,
    },
    460: {
      slidesPerView: 1.6,
    },
    540: {
      slidesPerView: 2,
    },
    640: {
      slidesPerView: 2.4,
    },
    800: {
      slidesPerView: 3,
    },
    1080: {
      slidesPerView: 4,
    },
    1340: {
      slidesPerView: 5,
    },
    1600: {
      slidesPerView: 6,
    }
  },
})
</script>

<script>
const swiper2 = new Swiper('.slider-main', {
  loop: true,
  speed: 60000,
  spaceBetween: -72,
  autoplay: {
    delay: 0,
  },
  breakpoints: {//ブレークポイント
    340: {
      spaceBetween: -32,
    },
    768: {
      spaceBetween: -72,
    },
  },
})
</script>

<script>
$(function() {
  $('.intro_02').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_01 figure').addClass('on');
    }else{
      $('.intro_01 figure').removeClass('on');
    }
  });
  $('.intro_03').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_02 figure').addClass('on');
    }else{
      $('.intro_02 figure').removeClass('on');
    }
  });
  $('.intro_04').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_03 figure').addClass('on');
    }else{
      $('.intro_03 figure').removeClass('on');
    }
  });
  $('.intro_05').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_04 figure').addClass('on');
    }else{
      $('.intro_04 figure').removeClass('on');
    }
  });
  $('.intro_06').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_05 figure').addClass('on');
    }else{
      $('.intro_05 figure').removeClass('on');
    }
  });
});
</script>

</body>
</html>