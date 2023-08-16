<?php
/**
 * ヘッダーテンプレート
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
<?php get_template_part('assets/inc/meta'); ?>
<?php get_template_part('assets/inc/ga'); ?>
</head>

<div class="p-header__burger">
	<button class="p-header__burger---button"></button>
	<div class="p-header__burger---design">
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
<header class="l-header">
	<div class="p-header">
		<figure class="p-header__logo">
			<a href="<?php echo home_url('/'); ?>">
				<img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="株式会社ダイマツ">
			</a>
		</figure>
		<div class="p-header__nav-container">
			<nav class="p-header__nav">
				<ul class="p-header__nav-list nav-list01">
					<li class="p-header__nav-item p-header__nav-item01"><a href="<?php echo home_url('/'); ?>" class="a-effect">ホーム</a></li>
					<li class="p-header__nav-item p-header__nav-item02"><a href="<?php echo home_url('/products'); ?>" class="a-effect<?php if(is_post_type_archive('products') || is_tax('products_cat') || is_singular('products')): ?> a-active<?php endif; ?>">商品紹介</a></li>
					<li class="p-header__nav-item p-header__nav-item03"><a href="<?php echo home_url('/information'); ?>" class="a-effect<?php if(is_page('information')): ?> a-active<?php endif; ?>">工場案内</a></li>
					<li class="p-header__nav-item p-header__nav-item04"><a href="<?php echo home_url('/about'); ?>" class="a-effect<?php if(is_page('about')): ?> a-active<?php endif; ?>">会社概要</a></li>
					<li class="p-header__nav-item p-header__nav-item05"><a href="<?php echo home_url('/news'); ?>" class="a-effect<?php if(is_post_type_archive('news') || is_tax('news_cat') || is_singular('news')): ?> a-active<?php endif; ?>">お知らせ</a></li>
				</ul>
				<ul class="p-header__nav-list nav-list02">
					<li class="p-header__nav-item"><a href="<?php echo home_url('/contact'); ?>" class="a-effect<?php if(is_page('contact')): ?> a-active<?php endif; ?>"><span>お問い合わせ</span></a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>

<?php if(is_home() || is_front_page()): ?>
<body class="l-body" id="home">
<?php elseif(is_post_type_archive('news') || is_tax('news_cat')): ?>
<body class="l-body index" id="news">
<?php elseif(is_singular('news')): ?>
<body class="l-body post" id="news">
<?php elseif(is_post_type_archive('products')): ?>
<body class="l-body" id="product">
<?php elseif(is_tax('products_cat')): ?>
<body class="l-body category" id="product">
<?php elseif(is_singular('products')): ?>
<body class="l-body post" id="product">
<?php elseif(is_page('information')): ?>
<body class="l-body" id="information">
<?php elseif(is_page('about')): ?>
<body class="l-body" id="about">
<?php elseif(is_page('contact') || is_page('thanks')): ?>
<body class="l-body" id="contact">
<?php elseif(is_page('privacy')): ?>
<body class="l-body" id="privacy">
<?php elseif(is_404()): ?>
<body class="l-body" id="notfound">
<?php else: ?>
<body class="l-body" id="home">
<?php endif; ?>
