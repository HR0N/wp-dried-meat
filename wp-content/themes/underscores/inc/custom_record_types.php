<?php

add_action('init', function (){
    register_post_type('us_phone', [
        'labels' => [
            'name' => 'Телефон',
            'singular_name' => 'us_phone',
        ],
        'public' => false,
        'show_ui' => true,
    ]);
});
add_action('init', function (){
    register_post_type('us_address', [
        'labels' => [
            'name' => 'Адреса',
            'singular_name' => 'us_address',
        ],
        'public' => false,
        'show_ui' => true,
    ]);
});
add_action('init', function (){
    register_post_type('us_email', [
        'labels' => [
            'name' => 'Емейл',
            'singular_name' => 'us_email',
        ],
        'public' => false,
        'show_ui' => true,
    ]);
});
/*add_action('init', function (){
    register_post_type('gallery_grid', [
        'labels' => [
            'name' => 'Галерея Grid',
            'singular_name' => 'gallery_grid',
        ],
        'public' => false,
        'show_ui' => true,
    ]);
});*/
/*add_action('init', function (){
    register_post_type('us_prices', [
        'labels' => [
            'name' => 'Розділ \'Ціни\'',
            'singular_name' => 'us_prices',
        ],
        'public' => false,
        'show_ui' => true,
    ]);
});*/
add_action('init', function (){
    register_post_type('us_prices_v2', [
        'labels' => [
            'name' => 'Розділ \'Ціни\'',
            'singular_name' => 'us_prices_v2',
        ],
        'public' => false,
        'show_ui' => true,
    ]);
});
add_action('init', function (){
    register_post_type('us_about_product', [
        'labels' => [
            'name' => 'Про продукт',
            'singular_name' => 'us_about_product',
        ],
        'public' => false,
        'show_ui' => true,
    ]);
});
add_action('init', function (){
    register_post_type('us_why_are_we', [
        'labels' => [
            'name' => 'Чому ми?',
            'singular_name' => 'us_why_are_we',
        ],
        'public' => false,
        'show_ui' => true,
    ]);
});
add_action('init', function (){
    register_post_type('us_gallery_owl', [
        'labels' => [
            'name' => 'Галерея №2',
            'singular_name' => 'us_gallery_owl',
        ],
        'public' => false,
        'show_ui' => true,
    ]);
});
add_action('init', function (){
    register_post_type('us_faq', [
        'labels' => [
            'name' => 'FAQ',
            'singular_name' => 'us_faq',
        ],
        'public' => false,
        'show_ui' => true,
    ]);
});
add_action('init', function (){
    register_post_type('us_reviews', [
        'labels' => [
            'name' => 'Відгуки',
            'singular_name' => 'us_reviews',
        ],
        'public' => false,
        'show_ui' => true,
    ]);
});
add_action('init', function (){
    register_post_type('us_social', [
        'labels' => [
            'name' => 'Соціальні мережі',
            'singular_name' => 'us_social',
        ],
        'public' => false,
        'show_ui' => true,
    ]);
});






// T E E M P L A T E
//add_action('init', function (){
//    register_post_type('gallery_grid', [
//        'labels' => [
//            'name' => 'Продукты',
//            'singular_name' => 'Продукт',
//            'add_new' => 'Добавить продукт',
//            'add_new_item' => 'Добавить продукт',
//            'edit_item' => 'Редактировать продукт',
//            'new_item' => 'Новый продукт',
//            'all_items' => 'Все продукты',
//            'search_items' => 'Искать продукты',
//            'not_found' =>  'Продуктов по заданным критериям не найдено.',
//            'not_found_in_trash' => 'В корзине нет продуктов.',
//            'menu_name' => 'Галерея Grid'
//        ],
//        'public' => false,
//        'show_ui' => true,
//        'has_archive' => false,
//    ]);
//});