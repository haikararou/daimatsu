<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>

<main class="l-main">
	<section class="l-wrapper">
		<div class="p-breadcrumb">
			<ul class="p-breadcrumb__container">
				<li class="p-breadcrumb__item"><a href="../">Home</a></li>
				<li class="p-breadcrumb__item"><a href="./">お知らせ</a></li>
				<li class="p-breadcrumb__item"><?php the_title(); ?></li>
			</ul>
		</div>
	</section>
	<section class="l-wrapper4">
		<h1 class="c-text--h1 news-title"><?php the_title(); ?><span><?php the_time('Y年m月d日'); ?></span></h1>
		<?php the_content(); ?>
		<div class="p-text-box"></div>
		<div class="p-text-box">
			<div class="wp-pager">
				<ul>
					<?php
					$prev = get_adjacent_post(false,'',true);
					if($prev) {
						echo '<li class="prev"><a rel="prev" aria-label="前のページ" href="'.get_permalink($prev).'" class="underline"><span>前へ</span></a></li>';
					}
					?>
					<li class="center"><a href="<?php echo home_url('/news'); ?>" class="underline">一覧を見る</a></li>
					<?php
					$next = get_adjacent_post(false,'',false);
					if($next) {
						echo '<li class="next"><a rel="next" aria-label="次のページ" href="'.get_permalink($next).'" class="underline"><span>次へ</span></a></li>';
					}
					?>
				</ul>
			</div>
		</div>
	</section>

<?php get_footer(); ?>

