<?php
/* ---------------------------------------------------------------------
テーマでアイキャッチ機能を有効化
-------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

update_option( 'medium_crop',true ); // 中サイズのトリミング
update_option( 'large_crop',true ); // 大サイズのトリミング


/* ---------------------------------------------------------------------
GutenbergエディタにCSSを適用
-------------------------------------------------------------------------*/
function gutenberg_support_setup() {
  add_theme_support( 'editor-styles' );
  add_editor_style( 'assets/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'gutenberg_support_setup' );

/* ---------------------------------------------------------------------
正しいURLを入力しないとログイン画面を表示しないようにする
-------------------------------------------------------------------------*/
remove_action( 'template_redirect', 'wp_redirect_admin_locations', 1000 );

function remove_redirect_guess_404_permalink( $redirect_url ) {
    if ( is_404() )
        return false;
    return $redirect_url;
}
add_filter( 'redirect_canonical', 'remove_redirect_guess_404_permalink' );



/* ---------------------------------------------------------------------
SVGのアップロードを許可
-------------------------------------------------------------------------*/
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


/* ---------------------------------------------------------------------
CSS・JSを登録する
-------------------------------------------------------------------------*/
// function register_files() {
//   wp_register_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
//   wp_register_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
//   wp_register_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css');
// }
// function my_enqueue_files() {
//   register_files();
//   wp_enqueue_style( 'animate' );
//   wp_enqueue_style( 'slick' );
//   wp_enqueue_style( 'slick-theme' );
// }
// add_action( 'wp_enqueue_scripts', 'my_enqueue_files' );

// wp_footerにCSS・JSを書き出す
function my_load_widget_scripts() {
  wp_register_style( 'wpadminbar', get_template_directory_uri() . '/assets/css/wpadminbar.css');
  wp_enqueue_style( 'wpadminbar' );
}
add_action('wp_footer', 'my_load_widget_scripts');


/* ---------------------------------------------------------------------
JSをdeferで読み込む
-------------------------------------------------------------------------*/
// function add_defer($tag, $handle) {
//   if(is_admin()) return;
//     $targets = [

//       // theme JS
//         'animation',
//         'config',
//         'slick_home',
//         'slick_business',
//         'slick_min',
//         'easing',
//         'TweenMax',

//         // contact-form-7
//         'contact-form-7',
//         'wpcf7cf-scripts-js',
//       ];

//     if ( in_array( $handle, $targets, true ) ) {
//         $tag = str_replace( '<script ', '<script defer ', $tag );
//     }
//     return $tag;
// }

// if (!is_admin() ) {
//   add_filter('script_loader_tag', 'add_defer', 10, 2);
// }



/*--------------------------------------
適用テンプレートのパスを変更
--------------------------------------*/
function get_custom_template( $page_template ) {
global $wp_query;

//single
if(is_singular('news')) {
$page_template = dirname( __FILE__ ) . "/news/single.php";
}

//archive
else if(is_post_type_archive('news')){
$page_template = dirname( __FILE__ ) . "/news/archive.php";
}

//taxonomy
// else if(is_tax('news_cat')){
// $page_template = dirname( __FILE__ ) . "/news/taxonomy.php";
// }

return $page_template;
}
add_filter('single_template', 'get_custom_template');
add_filter('archive_template', 'get_custom_template');


/* ---------------------------------------------------------------------
その他の機能
-------------------------------------------------------------------------*/

/*初期設定*/
include_once( get_template_directory().'/functions/initial-setting.php' );

/*メタタグ類の設定*/
include_once( get_template_directory().'/functions/meta-setting.php' );

/*カスタム投稿タイプを追加*/
include_once( get_template_directory().'/functions/custompost.php' );

/*便利な関数*/
include_once( get_template_directory().'/functions/utility.php' );

/*ダッシュボードのカスタマイズ*/
//include_once( get_template_directory().'/functions/dashboard.php' );



/*-----------------------------------------
アイキャッチ画像がなかったら記事内の一番目の画像を取得し、さらに画像がなかったら定義した画像を表示する
-------------------------------------------*/
function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];

if(has_post_thumbnail()) {
$img_id = get_post_thumbnail_id();
$img_url = wp_get_attachment_image_src($img_id, 'thumbnail', true);
$first_img = $img_url[0];
}
if(empty($first_img)) {
// アイキャッチ画像があればそちらを表示する
if(has_post_thumbnail()) {
$img_id = get_post_thumbnail_id();
$img_url = wp_get_attachment_image_src($img_id, 'thumbnail', true);
$first_img = $img_url[0];
} else {
// 記事内で画像がなかった時のための画像を指定（ディレクトリ先や画像名称は任意）
$first_img = esc_url(get_template_directory_uri()) . "/assets/img/noImage.png";
}
}
return $first_img;
}




/*-----------------------------------------
* スラッグの日本語禁止
-------------------------------------------*/
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
    $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
    }
    add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );




/*-----------------------------------------
* 説明文に自動挿入されるpタグを省く
-------------------------------------------*/
remove_filter('category_description','wpautop');
remove_filter('tag_description','wpautop');
remove_filter('term_description','wpautop');




/*-----------------------------------------
* 管理画面にカテゴリーを表示
-------------------------------------------*/
function add_custom_column( $defaults ) {
$defaults['news_cat'] = 'カテゴリ';
return $defaults;
}
add_filter('manage_news_posts_columns', 'add_custom_column');
function add_custom_column_id($column_name, $id) {
$terms = get_the_terms($id, $column_name);
if ( $terms && ! is_wp_error( $terms ) ){
$news_cat_links = array();
foreach ( $terms as $term ) {
$news_cat_links[] = $term->name;
}
echo join( ", ", $news_cat_links );
}
}
add_action('manage_news_posts_custom_column', 'add_custom_column_id', 10, 2);



// カスタム投稿タイプの記事一覧に投稿者の項目を追加する
function manage_books_columns ($columns) {
  $columns['author'] = '作成者';
  return $columns;
}
function add_books_column ($column, $post_id) {
  if ('author' == $column) {
    $value = get_the_term_list($post_id, 'author');
    echo attribute_escape($value);
  }
}
add_filter('manage_posts_columns', 'manage_books_columns');
add_action('manage_posts_custom_column', 'add_books_column', 10, 2);




/*-----------------------------------------
* カスタム投稿用の検索結果ページを分ける
-------------------------------------------*/
// add_filter('template_include','custom_search_template');
// function custom_search_template($template){
// 	if ( is_search() ){
// 		$post_types = get_query_var('post_type');
// 		foreach ( (array) $post_types as $post_type )
// 		$templates[] = "search-{$post_type}.php";
// 		$templates[] = 'search.php';
// 		$template = get_query_template('search',$templates);
// 	}
// 	return $template;
// }



/*-----------------------------------------
* 概要（抜粋）の文字数調整
-------------------------------------------*/
function my_excerpt_length($length) {
return 80;
}
add_filter('excerpt_length', 'my_excerpt_length');


/*-----------------------------------------
* カスタム投稿を管理者権限以外でメニューから非表示にする
-------------------------------------------*/
// function remove_menus () {
//   if (!current_user_can('administrator','editor')) { //管理者ではない場合
//     remove_menu_page( 'edit.php?post_type=news' );  //「news」というカスタム投稿タイプを非表示
//     remove_menu_page( 'edit.php?post_type=feature' );
//   }
// }
// add_action('admin_menu', 'remove_menus');




function my_form_tag_filter($tag) {
  if (!is_array($tag)) {
    return $tag;
  }
  //チェックボックスの場合
  if (isset($_GET['checked'])) {
    if ($tag['name'] === 'contact-kinds') { // nameの値を指定
      // TODO: エラー処理を加えたほうがいい
      $tag['options'][] = 'default:' . $_GET['checked'];
    }
  }
  return $tag;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter', 10);


//Lazy Blocksのテキストエリアを改行つきで表示させる
// function my_custom_lazyblock_handlebars_helper ( $handlebars ) {
//   $handlebars->registerHelper( 'nl2br', function( $val ) {
//     return nl2br($val);
//   });
// }
// add_action( 'lzb/handlebars/object', 'my_custom_lazyblock_handlebars_helper' );