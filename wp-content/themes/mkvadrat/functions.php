<?php @ob_start();?>
<?php
/*
Theme Name: Mkvadrat
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://mkvadrat.com/
Version: 1.0
*/

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
****************************************************************************НАСТРОЙКИ ТЕМЫ*****************************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
function mk_scripts(){
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'bootstrap' );
	
	wp_register_style( 'roboto', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', false, '4.4.0' );
	wp_enqueue_style( 'roboto' );

	wp_register_style( 'reset', get_template_directory_uri() . '/css/reset.css');
  wp_enqueue_style( 'reset' );
	
	wp_register_style( 'fonts', get_template_directory_uri() . '/css/fonts.css');
  wp_enqueue_style( 'fonts' );
	
	wp_register_style( 'styles', get_template_directory_uri() . '/css/styles.css');
  wp_enqueue_style( 'styles' );
	
	wp_register_style( 'media', get_template_directory_uri() . '/css/media.css');
  wp_enqueue_style( 'media' );
	
	wp_register_style( 'owl-default', get_template_directory_uri() . '/css/owl.carousel.min.css'); 
  wp_enqueue_style( 'owl-default' );
	
	wp_register_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
  wp_enqueue_style( 'owl-theme' );
	
	wp_register_style( 'fancybox', get_template_directory_uri() . '/js/source/jquery.fancybox.css');
  wp_enqueue_style( 'fancybox' );
	
	wp_register_style( 'fancybox-buttons', get_template_directory_uri() . '/js/source/helpers/jquery.fancybox-buttons.css');
  wp_enqueue_style( 'fancybox-buttons' );
	
	wp_register_style( 'fancybox-thumbs', get_template_directory_uri() . '/js/source/helpers/jquery.fancybox-thumbs.css');
  wp_enqueue_style( 'fancybox-thumbs' );
	
	wp_register_style( 'sweetalert', get_template_directory_uri() . '/css/sweetalert.css');
  wp_enqueue_style( 'sweetalert' );
	
	if (!is_admin()) {
		wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery-2.1.1.min.js', '', '2.1.1', true );
		wp_enqueue_script( 'flip', get_template_directory_uri() . '/js/jquery.flip.min.js', '', '5.0.3', true );
		wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', '', '', true );
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/source/jquery.fancybox.pack.js', '', '', true );
		wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel-3.0.6.pack.js', '', '', true );
		wp_enqueue_script( 'fancybox-buttons', get_template_directory_uri() . '/js/source/helpers/jquery.fancybox-buttons.js', '', '', true );
		wp_enqueue_script( 'fancybox-media', get_template_directory_uri() . '/js/source/helpers/jquery.fancybox-media.js', '', '', true );
		wp_enqueue_script( 'fancybox-thumbs', get_template_directory_uri() . '/js/source/helpers/jquery.fancybox-thumbs.js', '', '', true );
		wp_enqueue_script( 'sweetalert', get_template_directory_uri() . '/js/sweetalert.min.js', '', '', true );
		wp_enqueue_script( 'common-file', get_template_directory_uri() . '/js/common.js', '', '', true );
	}
}
add_action( 'wp_enqueue_scripts', 'mk_scripts' );

//Регистрируем название сайта
function mkvadrat_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	$title .= get_bloginfo( 'name', 'display' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'ug' ), max( $paged, $page ) );
	}

	if ( is_404() ) {
        $title = '404';
    }

	return $title;
}
add_filter( 'wp_title', 'mkvadrat_wp_title', 10, 2 );

//Регистрируем меню
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array(
		  'hidden_menu' => 'Скрытое меню',
		  'main_menu'   => 'Главное меню',
		  'left_menu'   => 'Левое меню',
		  'right_menu'  => 'Правое меню',
		  'footer_menu' => 'Меню в подвале сайта',
		)
	);
}

//Изображение в шапке сайта
$args = array(
  'default-image' => get_template_directory_uri() . '/images/logo.png',
  'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

//Добавление в тему миниатюры записи и страницы
if ( function_exists( 'add_theme_support' ) ) {
     add_theme_support( 'post-thumbnails' );
}

//Удаляем ненужные пункты меню
function remove_menus(){
  remove_menu_page( 'edit-comments.php' );          //Комментарии
}
add_action( 'admin_menu', 'remove_menus' );

//Отключить редактор
add_filter('use_block_editor_for_post', '__return_false');

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
****************************************************************************МЕНЮ САЙТА*********************************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
// Добавляем свой класс для пунктов меню:
class menu extends Walker_Nav_Menu {

	// Добавляем классы к вложенным ul
	function start_lvl( &$output, $depth ) {
		// Глубина вложенных ul
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'first-drop-menu',
			( $display_depth % 2  ? 'dropdown' : '' ),
			( $display_depth >=2 ? 'dropdown' : '' ),
			''
			);
		$class_names = implode( ' ', $classes );
	
		// build html
		$output .= "\n" . $indent . '<div class="' . $class_names . '">' . "\n";
	}

	// Добавляем классы к вложенным li
	function start_el( &$output, $item, $depth, $args ) {
		global $wpdb;
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
	
		// depth dependent classes
		$depth_classes = array(
			( $depth == 0 ? 'has-sub' : '' ),
			( $depth >=2 ? '' : '' ),
			( $depth % 2 ? '' : '' ),
			'menu-item-depth-' . $depth
		);
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
	
		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
	
		$mycurrent = ( $item->current == 1 ) ? ' active' : '';
	
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
	
		//$output .= $indent . '<li>';
	
		// Добавляем атрибуты и классы к элементу a (ссылки)
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : ''; 
		$attributes .= ' class="menu-link ' . ( $depth == 0 ? 'parent' : '' ) . ( $depth == 1 ? 'child' : '' ) . ( $depth >= 2 ? 'sub-child' : '' ) . '"';
	
		if($depth == 0){
			$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
				$args->before,
				$attributes,
				$args->link_before,
				apply_filters( 'the_title', $item->title, $item->ID ),
				$args->link_after,
				$args->after
			);
		}else if($depth == 1){
			$has_children = $wpdb->get_results( $wpdb->prepare("SELECT post_id FROM $wpdb->postmeta WHERE meta_value = %s AND meta_key = '_menu_item_menu_item_parent'", $item->ID), ARRAY_A);
			
			$link  =  $item->url;
			$title = apply_filters( 'the_title', $item->title, $item->ID );
					
			if(!empty($has_children)){
				$item_output = '<a href="'. $link .'">' . $title .' <i class="fa fa-angle-right" aria-hidden="true"></i></a>';
			}else{
				$item_output = '<a href="'. $link .'">' . $title .'</a>';
			}

		}else if($depth >= 2){
			$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
				$args->before,
				$attributes,
				$args->link_before,
				apply_filters( 'the_title', $item->title, $item->ID ),
				$args->link_after,
				$args->after
			);
		}
	
		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
*********************************************************************РАБОТА С METAПОЛЯМИ*******************************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
//Вывод id категории
function getCurrentCatID(){
	global $wp_query;
	if(is_category()){
		$cat_ID = get_query_var('cat');
	}
	return $cat_ID;
}

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
********************************************************************РАЗДЕЛ "ОТЗЫВЫ" В АДМИНКЕ****************************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
//Вывод в админке раздела отзывы
function register_post_type_reviews() {
 	$labels = array(
	 'name' => 'Отзывы',
	 'singular_name' => 'Отзывы',
	 'add_new' => 'Добавить отзыв',
	 'add_new_item' => 'Добавить новый отзыв',
	 'edit_item' => 'Редактировать отзыв',
	 'new_item' => 'Новый отзыв',
	 'all_items' => 'Все отзывы',
	 'view_item' => 'Просмотр страницы отзыв на сайте',
	 'search_items' => 'Искать отзыв',
	 'not_found' => 'Отзыв не найден.',
	 'not_found_in_trash' => 'В корзине нет отзыва.',
	 'menu_name' => 'Отзывы'
	 );
	 $args = array(
		 'labels' => $labels,
		 'public' => true,
		 'exclude_from_search' => false,
		 'show_ui' => true,
		 'has_archive' => false,
		 'menu_icon' => 'dashicons-megaphone',
		 'menu_position' => 5,
		 'supports' =>  array('title','editor', 'thumbnail'),
	 );
 	register_post_type('reviews', $args);
}
add_action( 'init', 'register_post_type_reviews' );

function true_post_type_reviews( $reviews ) {
	 global $post, $post_ID;

	 $reviews['reviews'] = array(
			 0 => '',
			 1 => sprintf( 'Отзывы обновлены. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
			 2 => 'Отзыв обновлён.',
			 3 => 'Отзыв удалён.',
			 4 => 'Отзыв обновлен.',
			 5 => isset($_GET['revision']) ? sprintf( 'Отзыв восстановлен из редакции: %s', wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
			 6 => sprintf( 'Отзыв опубликован на сайте. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
			 7 => 'Отзыв сохранен.',
			 8 => sprintf( 'Отправлен на проверку. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
			 9 => sprintf( 'Запланирован на публикацию: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Просмотр</a>', date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
			 10 => sprintf( 'Черновик обновлён. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	 );
	 return $reviews;
}
add_filter( 'post_updated_messages', 'true_post_type_reviews' );

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
*****************************************************************РАЗДЕЛ "РАЗРАБОТЧИКИ" В АДМИНКЕ***********************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
//Вывод в админке раздела разработчики
function register_post_type_developers() {
 	$labels = array(
	 'name' => 'Разработчики',
	 'singular_name' => 'Разработчики',
	 'add_new' => 'Добавить статью',
	 'add_new_item' => 'Добавить новую статью',
	 'edit_item' => 'Редактировать статью',
	 'new_item' => 'Новая статью',
	 'all_items' => 'Все статьи',
	 'view_item' => 'Просмотр статей на сайте',
	 'search_items' => 'Искать статьи',
	 'not_found' => 'Статьи не найден.',
	 'not_found_in_trash' => 'В корзине нет статей.',
	 'menu_name' => 'Разработчики'
	 );
	 $args = array(
		 'labels' => $labels,
		 'public' => true,
		 'exclude_from_search' => false,
		 'show_ui' => true,
		 'has_archive' => false,
		 'menu_icon' => 'dashicons-universal-access',
		 'menu_position' => 5,
		 'supports' =>  array('title','editor', 'thumbnail'),
	 );
 	register_post_type('developers', $args);
}
add_action( 'init', 'register_post_type_developers' );

function true_post_type_developers( $developers ) {
	 global $post, $post_ID;

	 $developers['developers'] = array(
			 0 => '',
			 1 => sprintf( 'Статьи обновлены. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
			 2 => 'Статьи обновлёны.',
			 3 => 'Статья удалёна.',
			 4 => 'Статья обновлена.',
			 5 => isset($_GET['revision']) ? sprintf( 'Статья восстановлена из редакции: %s', wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
			 6 => sprintf( 'Статья опубликована на сайте. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
			 7 => 'Отзыв сохранен.',
			 8 => sprintf( 'Отправлен на проверку. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
			 9 => sprintf( 'Запланирован на публикацию: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Просмотр</a>', date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
			 10 => sprintf( 'Черновик обновлён. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	 );
	 return $developers;
}
add_filter( 'post_updated_messages', 'true_post_type_developers' );

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
************************************************************ПЕРЕИМЕНОВАВАНИЕ ЗАПИСЕЙ В ПРОДУКТЫ************************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
function change_post_menu_label() {
    global $menu, $submenu;
    $menu[5][0] = 'Проекты';
    $submenu['edit.php'][5][0] = 'Проекты';
    $submenu['edit.php'][10][0] = 'Добавить проект';
    $submenu['edit.php'][16][0] = 'Метки';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );

function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Продукты';
    $labels->singular_name = 'Проекты';
    $labels->add_new = 'Добавить проект';
    $labels->add_new_item = 'Добавить проект';
    $labels->edit_item = 'Редактировать проект';
    $labels->new_item = 'Добавить проект';
    $labels->view_item = 'Посмотреть проект';
    $labels->search_items = 'Найти проект';
    $labels->not_found = 'Не найдено';
    $labels->not_found_in_trash = 'Корзина пуста';
}
add_action( 'init', 'change_post_object_label' );

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
*****************************************************************REMOVE CATEGORY_TYPE SLUG*********************************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
//Удаление  из url таксономии
function true_remove_slug_from_category( $url, $term, $taxonomy ){

	$taxonomia_name = 'category';
	$taxonomia_slug = 'category';

	if ( strpos($url, $taxonomia_slug) === FALSE || $taxonomy != $taxonomia_name ) return $url;

	$url = str_replace('/' . $taxonomia_slug, '', $url);

	return $url;
}
add_filter( 'term_link', 'true_remove_slug_from_category', 10, 3 );

//Перенаправление url в случае удаления category
function parse_request_url_category( $query ){

	$taxonomia_name = 'category';

	if( $query['attachment'] ) :
		$condition = true;
		$main_url = $query['attachment'];
	else:
		$condition = false;
		$main_url = $query['name'];
	endif;

	$termin = get_term_by('slug', $main_url, $taxonomia_name);

	if ( isset( $main_url ) && $termin && !is_wp_error( $termin )):

		if( $condition ) {
			unset( $query['attachment'] );
			$parent = $termin->parent;
			while( $parent ) {
				$parent_term = get_term( $parent, $taxonomia_name);
				$main_url = $parent_term->slug . '/' . $main_url;
				$parent = $parent_term->parent;
			}
		} else {
			unset($query['name']);
		}

		switch( $taxonomia_name ):
			case 'category':{
				$query['category_name'] = $main_url;
				break;
			}
			case 'post_tag':{
				$query['tag'] = $main_url;
				break;
			}
			default:{
				$query[$taxonomia_name] = $main_url;
				break;
			}
		endswitch;

	endif;

	return $query;

}
add_filter('request', 'parse_request_url_category', 1, 1 );

/**********************************************************************************************************************************************************
***********************************************************************************************************************************************************
*****************************************************************REMOVE POST_TYPE SLUG*********************************************************************
***********************************************************************************************************************************************************
***********************************************************************************************************************************************************/
//Удаление sluga из url таксономии 
function remove_slug_from_post( $post_link, $post, $leavename ) {
	if ( /*'videocatalogue' != $post->post_type && 'about-us' ||*/ 'publish' != $post->post_status ) {
		return $post_link;
	}
		$post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
	return $post_link;
}
add_filter( 'post_type_link', 'remove_slug_from_post', 10, 3 );

function parse_request_url_post( $query ) {
	if ( ! $query->is_main_query() )
		return;

	if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
		return;
	}

	if ( ! empty( $query->query['name'] ) ) {
		$query->set( 'post_type', array( 'post', 'page' ) );
	}
}
add_action( 'pre_get_posts', 'parse_request_url_post' );