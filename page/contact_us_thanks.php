<?php
/*
Template Name: Contact Us Thanks
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
<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/meta-en.php"); ?>
</head>

<body id="contact" class="en index">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/header-en.php"); ?>
  <div id="container">
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
              <div class="efo-form thanks">
                <div class="efo-form-container">
                  <p class="efo-form-caption">Your contact has been successfully submitted.</p>
                  <div class="efo-thanks-container">
                    <div class="efo-thanks-inner">
                      <p>
                        Thank you for contacting Mitsubishi Chemical Aqua Solutions Co., Ltd.<br>
                        We have sent an automatic reply to the designated E-mail address.<br>
                        Our person in charge will directly reply to you within a few days.<br>
                        We'd appreciate your kind understanding.
                      </p>
                    </div>
                  </div>
                  <div class="efo-submit-container">
                    <a href="/en/" class="btn-back">Return to Home</a>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </section>
      </div>
    </main>
  </div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/footer-en.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/script.php"); ?>
</body>
</html>

<style>
.efo-form.thanks {text-align: center;}
.efo-submit-container {
    max-width: 270px;
    width: 100%;
    border-radius: 40px;
    line-height: 1em;
    background-color: #2B72B9;
    margin:20px auto 0;
}


.btn-back {
  display: block;
  padding: 20px;
  font-weight: bold;
    color: #fff;
    font-size: 18px;
    background: url(/assets/img/en/common/icon-arrow-03.png) no-repeat;
    background-position: 90% 50%;
    transition: all 0.3s ease;
    color:#fff!important;
}
</style>