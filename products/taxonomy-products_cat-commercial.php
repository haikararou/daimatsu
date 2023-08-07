<?php get_header(); ?>

<main class="l-main">
	<section class="l-wrapper">
		<div class="l-hero l-hero__product">
			<div class="l-hero__product---txt">
				<div class="p-breadcrumb">
					<ul class="p-breadcrumb__container">
						<li class="p-breadcrumb__item"><a a href="<?php echo home_url('/'); ?>">Home</a></li>
						<li class="p-breadcrumb__item"><a a href="<?php echo home_url('/products'); ?>">商品紹介</a></li>
						<li class="p-breadcrumb__item">業務用商品一覧</li>
					</ul>
				</div>
				<h1 class="c-text--h1">業務用商品一覧</h1>
				<p>
				季節の惣菜から通年の定番商品まで<br>
				幅広い品揃えをご覧ください。<br>
				商品開発など、お気軽にお問い合わせください。
				</p>
			</div>
			<div class="l-hero__product---ph"><figure id="ViewIn"><img src="<?php bloginfo('template_url') ?>/assets/img/dummy/product/commercial/main.jpg" alt=""></figure></div>
		</div>
	</section>
	<section class="l-wrapper2">
		<div class="p-text-box">
			<ul class="p-product__list">
			<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
				<li>
					<a href="<?php the_permalink();?>" class="expansion-img underline3">
					<figure><?php if(get_field('products_thumb')): ?><img src="<?php the_field('products_thumb'); ?>" alt=""><?php else: ?><img src="<?php bloginfo('template_url') ?>/assets/img/no_images.png" alt=""><?php endif; ?></figure>
					<h2><?php the_title(); ?></h2>
					</a>
				</li>
			<?php endwhile; endif; ?>
			</ul>
		</div>
		<div class="p-text-box">
			<?php wp_pagenavi(); ?>
		</div>
	</section>

<?php get_footer(); ?>
