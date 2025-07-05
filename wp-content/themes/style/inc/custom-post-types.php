<?php

add_action('init', 'register_post_landing');
function register_post_landing(){
    register_post_type('landing', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Лендинг', // основное название для типа записи
            'singular_name'      => 'Лендинг', // название для одной записи этого типа
            'add_new'            => 'Добавить лендинг', // для добавления новой записи
            'add_new_item'       => 'Добавление лендинга', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование лендинга', // для редактирования типа записи
            'new_item'           => 'Новый лендинг', // текст новой записи
            'view_item'          => 'Смотреть лендинг', // для просмотра записи этого типа.
            'search_items'       => 'Искать лендинг', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Лендинги', // название меню
        ),
        'description'         => 'Здесь публикуются лендинги',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true, // показывать ли в меню админки
        'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null,
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-clipboard',
        'capability_type'	  => 'post',
        'hierarchical'        => false,
        'supports'            => array('title','editor','thumbnail','custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(''),
        'has_archive'         => true,
        'rewrite' 			  => array('hierarchical' => false, 'slug' => 'landing', "with_front" => false),
        'query_var'           => true,
    ) );
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( array(
        'page_title'  => 'Главная страница',
        'menu_slug'   => 'front-page',
        'icon_url'     => 'dashicons-admin-home',
        'position'     => 15
    ));
}

?>