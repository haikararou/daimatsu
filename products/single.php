<?php if(get_field('link')): ?>
<?php get_template_part('404'); ?>
<?php else: ?>

<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>

	<nav class="l-breadcrumbs">
		<div class="c-wrapper">
			<ul>
				<li><a property="item" typeof="WebPage" title="Go to 三菱ケミカルアクア・ソリューションズ株式会社." href="/" class="home" >Home</a><meta property="position" content="1"></li>
				<li><a property="item" typeof="WebPage" title="Go to 製品紹介." href="/products/" class="archive post-products-archive" >製品紹介</a><meta property="position" content="2"></li>
				<?php if(is_singular('products')): ?>
					<?php
					$terms = get_the_terms($post->ID, 'products_cat');
					if ($terms) :
						foreach ($terms as $term) {
							echo '<li><a href="'.home_url('/products').'#'.$term->slug.'" class="taxonomy products_cat" >'.$term->name.'</a></li>';
						}
					endif;
					?>
				<?php endif; ?>
				<li><?php the_title(); ?><meta property="url" content="<?php the_permalink();?>"><meta property="position" content="5"></li>
			</ul>
		</div>
	</nav>

	<div class="c-herohead">
		<div class="c-wrapper">
			<h1>製品紹介</h1>
		</div>
	</div>

	<main class="l-main p-products" role="main">
		<div class="l-main__wrapper">
			<?php the_content(); ?>


			<?php // 関連フィールドの表示
			$relation_objects = get_field('related');
			if( $relation_objects ):
			?>
			<ul>
			<?php foreach( $relation_objects as $relation_object): // ループの開始 ?>
			<li>
				<a href="<?php echo get_permalink($relation_object->ID); // ID指定でリンクを取得 ?>">
				<?php echo get_the_title($relation_object->ID); // ID指定でタイトルの取得 ?>
				</a>
			</li>
			<?php endforeach; // ループの終了 ?>
			</ul>
			<?php endif; ?>


			<?php
			$posts2 = get_field('related');
			if( $posts2 ):
			?>
			<!--事例紹介-->
			<section class="p-products__section p-products__case">
				<h2>関連する事例</h2>
				<div class="p-products__case__lst">
					<ul>
					<?php foreach( $posts2 as $post2 ): ?>
						<li><a href="<?php echo get_permalink($post2->ID);?>">
							<?php echo get_the_post_thumbnail( $post2->ID); ?>
							<div class="p-case__index__lst__txt">
								<h3><?php echo get_the_title($post2->ID); ?></h3>
								<?php if(get_field('sub_title')): ?><p><?php the_field('sub_title'); ?></p><?php endif; ?>
								<ul>
								<?php
								$terms_c = get_terms('case_cat');
								foreach ( $terms_c as $term ) {
									echo  '<li>'.esc_html($term->name).'</li>';
								}
								?>
								<?php
								$terms_t = get_terms('case_tag');
								foreach ( $terms_t as $term ) {
									echo  '<li>'.esc_html($term->name).'</li>';
								}
								?>
								</ul>
							</div>
						</a></li>
					<?php endforeach; ?>
					</ul>
				</div>
			</section>
			<?php endif; ?><?php wp_reset_query(); ?>


			<!--製品に関するお問い合わせ-->
			<section class="p-products__contact">
				<h2><span><?php the_title(); ?></span>に関するお問い合わせは</h2>
				<nav class="p-products__contact__nav">
					<ul>
						<?php if(get_field('tel_no')): ?><li><a href="tel:<?php the_field('tel_no'); ?>"><span>TEL. <em><?php the_field('tel_no'); ?></em></span></a><?php if(get_field('tel_txt')): ?><span>（平日9:00～17:45）</span><?php endif; ?></li><?php endif; ?>
					<?php if(is_single( array('products-526') ) ) : ?>
						<li><a href="<?php echo home_url('/contact'); ?>?referertitle=<?php echo get_the_title();?>&checked=7">メールでのお問い合わせ</a></nav></li>
					<?php else: ?>
						<?php if(is_object_in_term($post->ID,'products_cat','plant_factory')): ?>
						<li><a href="<?php echo home_url('/contact'); ?>?referertitle=<?php echo get_the_title();?>&checked=1">メールでのお問い合わせ</a></nav></li>
						<?php elseif(is_object_in_term($post->ID,'products_cat','purify')): ?>
						<li><a href="<?php echo home_url('/contact'); ?>?referertitle=<?php echo get_the_title();?>&checked=2">メールでのお問い合わせ</a></nav></li>
						<?php elseif(is_object_in_term($post->ID,'products_cat','groundwater')): ?>
						<li><a href="<?php echo home_url('/contact'); ?>?referertitle=<?php echo get_the_title();?>&checked=3">メールでのお問い合わせ</a></nav></li>
						<?php elseif(is_object_in_term($post->ID,'products_cat','filtration')): ?>
						<li><a href="<?php echo home_url('/contact'); ?>?referertitle=<?php echo get_the_title();?>&checked=4">メールでのお問い合わせ</a></nav></li>
						<?php elseif(is_object_in_term($post->ID,'products_cat','pure_water')): ?>
						<li><a href="<?php echo home_url('/contact'); ?>?referertitle=<?php echo get_the_title();?>&checked=5">メールでのお問い合わせ</a></nav></li>
						<?php elseif(is_object_in_term($post->ID,'products_cat','drainage')): ?>
						<li><a href="<?php echo home_url('/contact'); ?>?referertitle=<?php echo get_the_title();?>&checked=6">メールでのお問い合わせ</a></nav></li>
						<?php elseif(is_object_in_term($post->ID,'products_cat','cooling_tower')): ?>
						<li><a href="<?php echo home_url('/contact'); ?>?referertitle=<?php echo get_the_title();?>&checked=8">メールでのお問い合わせ</a></nav></li>
						<?php elseif(is_object_in_term($post->ID,'products_cat','medical_water')): ?>
						<li><a href="<?php echo home_url('/contact'); ?>?referertitle=<?php echo get_the_title();?>&checked=9">メールでのお問い合わせ</a></nav></li>
						<?php else: ?>
						<li><a href="<?php echo home_url('/contact'); ?>?referertitle=<?php echo get_the_title();?>">メールでのお問い合わせ</a></nav></li>
						<?php endif; ?>
					<?php endif; ?>
					</ul>
				</nav>
			</section>
		</div>

<?php get_footer(); ?>

<?php endif; ?>