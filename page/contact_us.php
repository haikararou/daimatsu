<?php
/*
Template Name: Contact Us
 */
?>
<!DOCTYPE html>
<html lang="ja">
<!--#set var="id" value="" -->
<!--#set var="class" value="en company-en" -->
<!--#set var="title" value="Company Profile | " -->
<!--#set var="keywords" value="" -->
<!--#set var="description" value="Mitsubishi Chemical Aqua Solutions Co., Ltd. is a water treatment plant engineering company in Mitsubishi Chemical Holdings Group. Here we introduce our company profile." -->
<head>
<?php wp_head(); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/meta-en.php"); ?>
</head>

<body id="contact" class="en index">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/header-en.php"); ?>
  <div id="container">
    <!-- <main id="main" class="mod-clearfix">
      <article id="article"> -->
        <!-- <div class="breadcrumbs-list">
          <ol class="mod-panel-layout">
            <li><a href="/en/">HOME</a></li>
            <li>CONTACT</li>
          </ol>
        </div> -->
    <main class="l-main p-page" role="main">
      <div class="l-main__wrapper">
        <div class="breadcrumbs-list">
          <ol class="mod-panel-layout">
            <li><a href="/en/">HOME</a></li>
            <li>CONTACT</li>
          </ol>
        </div>
        <section class="contents">
          <div class="contents-inner">
            <div class="ttl-inner"><h1 class="ttl-01">CONTACT</h1></div>
            <section class="c-section">
              <h2>Contact Form</h2>
              <p>Please fill in all items with <i class="icon-required"></i> and press “Confirm” button.</p>
              <div class="c-form__remaining">
                <p>You have <span class="c-form__number"></span> item(s) to <br>be filled in.</p>
              </div>
              <div class="c-form">
              <?php echo do_shortcode('[contact-form-7 id="856" title="Contact Us"]'); ?>
              </div>
            </section>
          </div>
        </section>
      </div>
    </main>
      <!-- </article>
    </main> -->
  </div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/footer-en.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/script.php"); ?>
<?php wp_footer(); ?>
</body>
</html>


<script>
$(function(){
  $( 'select option[value=""]' ).html( 'ご選択ください' );
  var items = 0, i = 0;

  $(window).load(function() {
  //読み込みが完了したら少し待ってから必須項目の数を表示（非表示項目の切り替えがあり、待たないと数が正確にならない）
    setTimeout(function() {
    $("form").find('.wpcf7-validates-as-required, .c-form__required-radio').each(function() {
      if($(this).is(':visible')) {
      items++;
      }
    });
    calc();
    }, 300);
  });

  //必須項目の入力項目に変化があった時
  $("form").find('.wpcf7-validates-as-required, .wpcf7-validates-as-required input, .c-form__required-radio input').on('change keyup', function() {
    //お問合せ種別のときは、必須項目の数を数え直してから入力済みをカウント
    if($(this).parents('.c-form__radioA').length > 0) {
        setTimeout(function() {
          items = 0;
          $("form").find('.wpcf7-validates-as-required, .c-form__required-radio').each(function() {
            if($(this).is(':visible')) {
              items++;
            }
          });
        calc();
        }, 300);
    } else {
    //お問合せ種別以外のときは入力済みをカウント
      calc();
    }
  });

  //入力済みの項目をカウント
  var calc = function() {
    i = 0;
    $("form").find('.wpcf7-validates-as-required, .c-form__required-radio').each(function() {
      //チェックボックスのときの入力チェック
      if($(this).hasClass('c-form__checkbox')) {
        if($(this).find('input').prop("checked")) {
        i++;
        }
      }
      //ラジオボタンのときの入力チェック
      else if($(this).hasClass('c-form__required-radio')) {
        target = $(this).find('input').eq(0).attr('name');
        if($('input[name="'+target+'"]:checked').length > 0) {
          i++;
        }
      }
      //テキストフィールド、テキストエリアのときの入力チェック
      else {
      if($(this).val() !== "") {
        i++;
      }
    }
    });
    $(".c-form__number").html(items - i);
  };
});
</script>
<!-- 問い合わせが完了したらサンクスページにリダイレクト -->
<script>
  document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '/en/contact/thanks/';
  }, false );
</script>


