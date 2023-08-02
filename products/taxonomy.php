<?php get_header(); ?>

<nav class="l-breadcrumbs">
	<div class="c-wrapper">
		<ul>
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
		</ul>
	</div>
</nav>

<div class="c-herohead">
	<div class="c-wrapper">
		<h1>製品紹介</h1>
	</div>
</div>

<main class="l-main" role="main">
	<div class="l-main__wrapper">
		<div class="l-main__inner">



			<div class="l-main__cont">
			<section class="c-section">
			<h2>
				<?php
					$term = array_pop(get_the_terms($post->ID, 'products_cat'));
					$term_p = $term->parent;
					if ( ! $term_p == 0 ){
						$term = array_shift(get_the_terms($post->ID, 'products_cat'));
					}
					echo esc_html($term->name);
				?>
			</h2>
			<?php // タームの親・子の一覧にタームに紐づく投稿一覧を表示する方法
			$children = get_terms('products_cat','hierarchical=0&parent='.$term->term_id);
			if($children){ // 子タームの有無
				foreach ( $children as $child ) {
				echo '<div class="c-thumbnail" id="'.$child->slug.'">';
				echo '<h3>' . esc_html($child->name) . '</h3>'; // 子タームタイトル
				$catslug = $child->slug;
				$args = array(
					'post_type' => 'products',
					'products_cat' => $catslug ,
					'posts_per_page' => -1,
				);
				$myquery = new WP_Query( $args );
			?>
			<?php if ( $myquery->have_posts()): ?>
				<ul>
			<?php while($myquery->have_posts()): $myquery->the_post(); ?>
				<li>
					<?php if(get_field('link')): ?><a target="_blank" rel="nofollow" href="<?php the_field('link'); ?>"><?php else: ?><a rel="nofollow" href="<?php the_permalink();?>"><?php endif; ?>
						<figure><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>"></figure>
						<div class="c-thumbnail__txt"><span><?php the_title(); ?></span></div>
					</a>
				</li>
			<?php endwhile; ?>
			</ul>
			</div>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			<?php } //子タームに紐づく記事一覧の表示終了 ?>
			<?php } // 親ターム終了 ?>
			</section>
		</div>

	</div>
</div>

<?php get_footer(); ?>