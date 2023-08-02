<?php
/*
Template Name: サイトマップ
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
		<h1>サイトマップ</h1>
	</div>
</div>

<main class="l-main p-page" role="main">
	<div class="l-main__wrapper">

    <section class="c-section">

        <div class="p-page__sitemap">
          <dl>
            <dt><a href="<?php echo home_url(); ?>">ホーム</a></dt>
            <dd><ul>
              <li><a href="<?php echo home_url('/division/napperland'); ?>">植物工場</a></li>
              <li><a href="<?php echo home_url('/division/purewater'); ?>">純水・超純水<br>カートリッジ純水器</a></li>
              <li><a href="<?php echo home_url('/division/separation'); ?>">分離精製</a></li>
              <li><a href="<?php echo home_url('/division/drainage'); ?>">排水処理設備<br>排水診断・相談窓口</a></li>
              <li><a href="<?php echo home_url('/division/groundwaterwater'); ?>">地下水</a></li>
              <li><a href="<?php echo home_url('/division/waterprocessing'); ?>">水処理薬品<span>冷却水・ボイラー水・その他</span></a></li>
              <li><a href="<?php echo home_url('/division/filtration'); ?>">ろ過・軟水</a></li>
              <li><a href="<?php echo home_url('/division/medical'); ?>">医療用水</a></li>
            </ul></dd>
          </dl>
          <dl>
            <dt><a href="<?php echo home_url('/company'); ?>">会社情報</a></dt>
            <dd><ul>
              <li><a href="<?php echo home_url('/company/outline'); ?>">会社概要</a></li>
              <li><a href="<?php echo home_url('/company/message'); ?>">社長メッセージ</a></li>
              <li><a href="<?php echo home_url('/company/history'); ?>">会社沿革</a></li>
              <li><a href="<?php echo home_url('/company/business'); ?>">事業概要</a></li>
              <li><a href="<?php echo home_url('/company/network'); ?>">拠点紹介・関連会社</a></li>
              <li><a href="<?php echo home_url('/company/iso'); ?>">ISO</a></li>
            </ul></dd>
          </dl>
          <dl>
            <dt><a href="<?php echo home_url('/products'); ?>">製品紹介</a></dt>
            <dd>
              <?php
              $tax_name = 'products_cat'; //タクソノミーを指定
              $terms = get_terms( $tax_name, array('parent' => 0),'hide_empty=0');
              ?>
              <ul>
              <?php foreach($terms as $term): ?>
              <?php if($term->parent == 0): ?>
                <li><a href="<?php echo home_url('/products#'); ?><?php echo $term->slug ?>"><?php echo $term->name ?></a></li>
              <?php endif; ?>
              <?php endforeach; ?>
              </ul>
            </dd>
          </dl>
          <dl>
            <dt><a href="<?php echo home_url('/service'); ?>">サービス紹介</a></dt>
            <dd>
              <?php
              $tax_name = 'service_cat'; //タクソノミーを指定
              $terms = get_terms( $tax_name, array('parent' => 0),'hide_empty=0');
              ?>
              <ul>
              <?php foreach($terms as $term): ?>
              <?php if($term->parent == 0): ?>
                <li><a href="<?php echo home_url('/service#'); ?><?php echo $term->slug ?>"><?php echo $term->name ?></a></li>
              <?php endif; ?>
              <?php endforeach; ?>
              </ul>
            </dd>
          </dl>
        </div>
        <div class="p-page__sitemap__other">
          <ul>
            <li><a href="<?php echo home_url('/feature'); ?>">特集</a></li>
            <li><a href="<?php echo home_url('/case'); ?>">事例紹介</a></li>
            <li><a href="<?php echo home_url('/news'); ?>">新着情報</a></li>
            <li><a href="<?php echo home_url('/catalog'); ?>">カタログダウンロード</a></li>
            <li><a href="<?php echo home_url('/contact'); ?>?referertitle=<?php echo get_the_title();?>">お問い合わせ</a></li>
            <li><ul>
              <li><a href="<?php echo home_url('/partner'); ?>">資材購買規約・約款</a></li>
              <li><a href="<?php echo home_url('/sitemap'); ?>">サイトマップ</a></li>
              <li><a href="<?php echo home_url('/terms'); ?>">利用規約</a></li>
              <li><a href="<?php echo home_url('/privacy'); ?>">プライバシーポリシー</a></li>
              <li><a href="<?php echo home_url('/social'); ?>">ソーシャルメディアポリシー</a></li>
            </ul></li>
          </ul>
        </div>
    </section>

	</div>

<?php get_footer(); ?>