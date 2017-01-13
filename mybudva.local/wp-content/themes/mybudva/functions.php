<?php 

function load_style_scripts () 
{
	wp_enqueue_script('jquery_my', get_template_directory_uri() . '/js/jquery-3.1.1.js');
	wp_enqueue_script('jquery_ui_my', get_template_directory_uri() . '/js/jquery-ui.js');
	// wp_enqueue_script('jquery_my', get_template_directory_uri() . '/js/bootstrap.js');

	wp_enqueue_style('bootstrap_my', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('jquery_ui_css_my', get_template_directory_uri() . '/css/jquery-ui.css');
	wp_enqueue_style('jquery_ui_theme_css_my', get_template_directory_uri() . '/css/jquery-ui.theme.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'load_style_scripts');

register_sidebar(array(
	'name'          => 'menu',
	'id'            => 'menu-header',
));

register_sidebar(array(
	'name'          => 'right-page',
	'id'            => 'right-page-list',
	'before_widget' => '',
	'after_widget'  => '',
));

add_theme_support( 'post-thumbnails' );




// if ( ! function_exists( 'red_book_cp' ) ) {
 
// function red_book_cp() 
//     { 
//         $labels = array(
//             'name'                => _x( 'Красная книга', 'Post Type General Name', 'red_book' ),
//             'singular_name'       => _x( 'Красная книга', 'Post Type Singular Name', 'red_book' ),
//             'menu_name'           => __( 'Красная Книга', 'red_book' ),
//             'parent_item_colon'   => __( 'Родительский:', 'red_book' ),
//             'all_items'           => __( 'Все записи', 'red_book' ),
//             'view_item'           => __( 'Просмотреть', 'red_book' ),
//             'add_new_item'        => __( 'Добавить новую запись в Красную Книгу', 'red_book' ),
//             'add_new'             => __( 'Добавить новую', 'red_book' ),
//             'edit_item'           => __( 'Редактировать запись', 'red_book' ),
//             'update_item'         => __( 'Обновить запись', 'red_book' ),
//             'search_items'        => __( 'Найти запись', 'red_book' ),
//             'not_found'           => __( 'Не найдено', 'red_book' ),
//             'not_found_in_trash'  => __( 'Не найдено в корзине', 'red_book' ),
//         );
//         $args = array(
//             'labels'              => $labels,
//             'supports'            => array( 'title', 'editor', 'excerpt', ),
//             'taxonomies'          => array( 'red_book_tax' ), // категории, которые мы создадим ниже
//             'public'              => true,
//             'menu_position'       => 5,
//             'menu_icon'           => 'dashicons-book',
//         );
//         register_post_type( 'red_book', $args ); 
//     } 
//     add_action( 'init', 'red_book_cp', 0 ); 
// }
 
// if ( ! function_exists( 'red_book_tax' ) ) 
// {
// 	function red_book_tax() 
// 	{ 
// 		$labels = array(
// 			'name' 					=> _x( 'Категории Красной книги', 'Taxonomy General Name', 'red_book' ),
// 			'singular_name' 		=> _x( 'Категория Красной книги', 'Taxonomy Singular Name', 'red_book' ),
// 			'menu_name'     		=> __( 'Категории', 'red_book' ),
// 			'all_items'     		=> __( 'Категории', 'red_book' ),
// 			'parent_item' 			=> __( 'Родительская категория Книги', 'red_book' ),
// 			'parent_item_colon' 	=> __( 'Родительская категория Книги:', 'red_book' ),
// 			'new_item_name'     	=> __( 'Новая категория', 'red_book' ),
// 			'add_new_item'      	=> __( 'Добавить новую категорию', 'red_book' ),
// 			'edit_item' 			=> __( 'Редактировать категорию', 'red_book' ),
// 			'update_item' 			=> __( 'Обновить категорию', 'red_book' ),
// 			'search_items' 			=> __( 'Найти', 'red_book' ),
// 			'add_or_remove_items'   => __( 'Добавить или удалить категорию', 'red_book' ),
// 			'choose_from_most_used' => __( 'Поиск среди популярных', 'red_book' ),
// 			'not_found' 			=> __( 'Не найдено', 'red_book' ), 
// 			); 
// 		$args = array( 
// 			'labels' => $labels, 
// 			'hierarchical' => true,
// 			'public' => true,
//         ); 
//         register_taxonomy( 'red_book_tax', array( 'red_book' ), $args ); 
//     } 
//     add_action( 'init', 'red_book_tax', 0 ); 
// }
 









