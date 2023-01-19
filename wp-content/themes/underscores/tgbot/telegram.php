<?php
include_once('bot.php');

$bot = new TgBot();

if(wp_doing_ajax()){
    //  json_decode - for work; json_encode - for send;
    add_action('wp_ajax_telegram_request', 'us_ajax_telegram_request');
    add_action('wp_ajax_nopriv_telegram_request', 'us_ajax_telegram_request');

    add_action('wp_ajax_telegram_application', 'us_ajax_telegram_application');
    add_action('wp_ajax_nopriv_telegram_application', 'us_ajax_telegram_application');

    add_action('wp_ajax_telegram_question', 'us_ajax_telegram_question');
    add_action('wp_ajax_nopriv_telegram_question', 'us_ajax_telegram_question');
}

function us_ajax_telegram_request(){
    global $bot;
    $response = json_encode($_POST['data']);
    $name = json_decode($response)->name;
    $phone = json_decode($response)->phone;
    $message = "<b>Замовлення дзвінка</b>\n\n📋 Ім'я: $name\n☎️ Телефон: $phone";

//    echo json_encode($message);
    $bot->sendMessage($message);
    wp_die();
}
function us_ajax_telegram_application(){
    global $bot;
    $response = json_encode($_POST['data']);
    $name = json_decode($response)->name;
    $phone = json_decode($response)->phone;
    $message = "<b>Замовлення послуги</b>\n\n📋 Ім'я: $name\n☎️ Телефон: $phone";

//    echo json_encode($message);
    $bot->sendMessage($message);
    wp_die();
}
function us_ajax_telegram_question(){
    global $bot;
    $response = json_encode($_POST['data']);
    $name = json_decode($response)->name;
    $phone = json_decode($response)->phone;
    $text = json_decode($response)->comment;
    $message = "<b>Замовлення консультації</b>\n\n📋 Ім'я: $name\n☎️ Телефон: $phone\n✍️ Коментар: $text";

//    echo json_encode($message);
    $bot->sendMessage($message);
    wp_die();
}