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

			<nav class="l-main__nav c-localnav">
				<?php
				$tax_name = 'products_cat'; //タクソノミーを指定
				$terms = get_terms( $tax_name, array('parent' => 0),'hide_empty=0');
				?>
				<ul>
				<?php foreach($terms as $term): ?>
				<?php if($term->parent == 0): ?>
				<li><a href="#<?php echo $term->slug ?>"><?php echo $term->name ?></a></li>
				<?php endif; ?>
				<?php endforeach; ?>
				</ul>
			</nav>

			<div class="l-main__cont">
			<?php // タームの親・子の一覧にタームに紐づく投稿一覧を表示する方法
			$categories = get_terms('products_cat','parent=0');
			foreach ( $categories as $cat ) {
				echo '<section id="'.$cat->slug.'" class="c-section">';
				echo '<h2>'.esc_html($cat->name).'</h2>'; // 親タームタイトル
			$children = get_terms('products_cat','hierarchical=0&parent='.$cat->term_id);
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
			<?php } // 子ターム終了 ?>
			</section>
			<?php } // 親ターム終了 ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>