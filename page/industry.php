<?php
/*
Template Name: 産業別
 */
get_header(); ?>

<nav class="l-breadcrumbs">
	<div class="c-wrapper">
		<ul>
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
		</ul>
	</div>
</nav>

<div class="c-herohead">
	<div class="c-wrapper">
		<h1><?php the_title(); ?></php></h1>
	</div>
</div>

<main class="l-main" role="main">
	<div class="l-main__wrapper">
		<div class="l-main__inner">

			<?php
			//現在のページのスラッグ名を取得
			$slug_name = basename(get_permalink());

			/*出力対象の親カテゴリをチェック*/
			$active_parent_terms = array();
			$tax_name = 'products_cat'; //タクソノミーを指定
			$terms = get_terms( $tax_name, array('parent' => 0, 'hide_empty'=>0));

			//各親カテゴリーで現在のページに表示する記事があるかチェック
			foreach($terms as $term):
				$args = array(
					'post_type' => 'products',
					'tax_query' => array(
						array(
						'taxonomy' => $tax_name,
						'terms'    => $term->term_id,
						)
					),
					'meta_query' => array(
						array(
						'key' => 'industry',
						'value' => $slug_name,
						'compare' => 'LIKE'
						)
					),
					'posts_per_page' => -1,
				);
				$pre_query = new WP_Query( $args );
				if($pre_query->have_posts()) {
					array_push($active_parent_terms, $term);
				}
				wp_reset_postdata();
			endforeach;
			?>

			<nav class="l-main__nav c-localnav">
				<?php
        //記事のあるカテゴリのみを表示
				?>
				<ul>
				<?php foreach($active_parent_terms as $term): ?>
				<?php if($term->parent == 0): ?>
				<li><a href="#<?php echo $term->slug ?>"><?php echo $term->name ?></a></li>
				<?php endif; ?>
				<?php endforeach; ?>
				</ul>
			</nav>

			<div class="l-main__cont">
				<?php
        		//記事のあるカテゴリのみを対象に処理
				foreach ( $active_parent_terms as $cat ) {
					echo '<section id="'.$cat->slug.'" class="c-section">';
					echo '<h2>'.esc_html($cat->name).'</h2>'; // 親タームタイトル
				$children = get_terms('products_cat','hierarchical=0&parent='.$cat->term_id);
				if($children){ // 子タームの有無
					foreach ( $children as $child ) {
					$catslug = $child->slug;
					$args = array(
						'post_type' => 'products',
						'products_cat' => $catslug ,
						'posts_per_page' => -1,
						'meta_key' => 'industry',
						'meta_value' => $slug_name,
						'meta_compare' => 'LIKE',
					);
					$myquery = new WP_Query( $args );
				?>
				<?php if ( $myquery->have_posts()): ?>
					<?php
						echo '<div class="c-thumbnail" id="'.$child->slug.'">';
						echo '<h3>' . esc_html($child->name) . '</h3>'; // 子タームタイトル
					?>
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
				<?php } // 子ターム終了 ?>
				</section>
				<?php } // 親ターム終了 ?>
			</div>

		</div>
	</div>

<?php get_footer(); ?>