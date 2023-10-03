<?php
function enqueue_custom_assets()
{

	// Google Fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@400;700&display=swap', false);

	// CSS
	wp_enqueue_style('custom-style', get_theme_file_uri('/assets/css/style.css'), false);

	// JavaScript
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', true);
	wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), true);
	wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', false);
	wp_enqueue_script('swiper-script', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', true);
	wp_enqueue_script('custom-script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_assets');

function my_setup()
{
	add_theme_support('post-thumbnails'); /* アイキャッチ */
	add_theme_support('automatic-feed-links'); /* RSSフィード */
	add_theme_support('title-tag'); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action('after_setup_theme', 'my_setup');

function custom_excerpt_length($length)
{
	return 85;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（maange_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */

SCF::add_options_page(
	'実績サイト',
	'実績情報',
	'manage_options',
	'work-option',
	'dashicons-admin-generic',
	11
);


