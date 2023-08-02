<?php
/*
Template Name: ハブページ
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
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<main class="l-main  p-division" role="main">
	<div class="l-main__wrapper">
		<div class="l-main__inner">

			<nav class="l-main__nav c-localnav">
				<ul>
					<?php
					$products_c = get_field('products_c');
					$args = array(
					'post_type' => 'products', //投稿タイプ名
					'posts_per_page' => 100, //出力する記事の数
					'tax_query' => array(
						array(
						'taxonomy' => 'products_cat', //タクソノミー名
						'field' => 'term_id',
						'terms' => $products_c //タームのスラッグ
						)
					)
					);
					$term = get_term_by( 'term_id',$products_c,'products_cat' );
					$domestic_post = get_posts($args);
					if($domestic_post) : ?>
					<li><a href="#sec01">製品一覧</a></li>
					<?php endif;
					wp_reset_postdata(); ?>
					<?php
					$service_c = get_field('service_c');
					$args2 = array(
					'post_type' => 'service', //投稿タイプ名
					'posts_per_page' => 100, //出力する記事の数
					'tax_query' => array(
						array(
						'taxonomy' => 'service_cat', //タクソノミー名
						'field' => 'term_id',
						'terms' => $service_c //タームのスラッグ
						)
					)
					);
					$term2 = get_term_by( 'term_id',$service_c,'service_cat' );
					$domestic_post2 = get_posts($args2);
					if($domestic_post2) : ?>
					<li><a href="#sec02">サービス一覧</a></li>
					<?php endif;
					wp_reset_postdata(); ?>
				</ul>
			</nav>

			<div class="l-main__cont">
				<?php the_content(); ?>

				<?php
				if(get_field('products_c')):
				$products_c = get_field('products_c');
				echo '<section id="sec01" class="c-section">';
				echo '<h2>製品一覧</h2>';
				foreach($products_c as $prod):
				$args = array(
				'post_type' => 'products', //投稿タイプ名
				'posts_per_page' => -1, //出力する記事の数
				'tax_query' => array(
					array(
					'taxonomy' => 'products_cat', //タクソノミー名
					'field' => 'term_id',
					'terms' => $prod //タームのスラッグ
					)
				)
				);
				$term = get_term_by( 'term_id',$prod,'products_cat' );
				$domestic_post = get_posts($args);
				if($domestic_post) : ?>
				<div class="c-thumbnail">
				<?php echo '<h3>'.$term->name.'</h3>'; ?>
				<ul>
				<?php foreach($domestic_post as $post) : setup_postdata( $post ); ?>
				<li>
				<?php if(get_field('link')): ?><a target="_blank" rel="nofollow" href="<?php the_field('link'); ?>"><?php else: ?><a rel="nofollow" href="<?php the_permalink();?>"><?php endif; ?>
					<figure><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>"></figure>
					<div class="c-thumbnail__txt"><span><?php the_title(); ?></span></div>
				</a>
				</li>
				<?php endforeach; ?>
				</ul>
				</div>
				<?php endif;
				wp_reset_postdata(); ?>
				</section>
				<?php endforeach;
				echo '</section>';
				?>
				<?php endif; ?>

				<?php
				if(get_field('service_c')):
				$service_c = get_field('service_c');
				echo '<section id="sec01" class="c-section">';
				echo '<h2>サービス一覧</h2>';
				foreach($service_c as $serv):
				$args = array(
				'post_type' => 'service', //投稿タイプ名
				'posts_per_page' => -1, //出力する記事の数
				'tax_query' => array(
					array(
					'taxonomy' => 'service_cat', //タクソノミー名
					'field' => 'term_id',
					'terms' => $serv //タームのスラッグ
					)
				)
				);
				$term = get_term_by( 'term_id',$serv,'service_cat' );
				$domestic_post = get_posts($args);
				if($domestic_post) : ?>
				<div class="c-thumbnail">
				<?php echo '<h3>'.$term->name.'</h3>'; ?>
				<ul>
				<?php foreach($domestic_post as $post) : setup_postdata( $post ); ?>
				<li>
				<?php if(get_field('link')): ?><a target="_blank" rel="nofollow" href="<?php the_field('link'); ?>"><?php else: ?><a rel="nofollow" href="<?php the_permalink();?>"><?php endif; ?>
					<figure><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>"></figure>
					<div class="c-thumbnail__txt"><span><?php the_title(); ?></span></div>
				</a>
				</li>
				<?php endforeach; ?>
				</ul>
				</div>
				<?php endif;
				wp_reset_postdata(); ?>
				<?php endforeach;
				echo '</section>';
				?>
				<?php endif; ?>

			</div>

		</div>
	</div>

<?php get_footer(); ?>