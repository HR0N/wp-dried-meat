<?php

include('vendor/autoload.php');
use Telegram\Bot\Api;
include_once('env.php');
use env\Env as env;



class TgBot{
    public $telegram;

    public function __construct()
    {
        $this->telegram = new Api(env::$TELEGRAM_PROD_BOT_TOKEN);
    }

    function sendMessage($chat_id, $message){
        $this->telegram->sendMessage(['chat_id' => $chat_id, 'text' => $message, 'parse_mode' => 'HTML']);
    }
    function replyMessage($chat_id, $message, $message_id){
        $this->telegram->sendMessage(['chat_id' => $chat_id, 'text' => $message, 'reply_to_message_id' => $message_id, 'parse_mode' => 'HTML']);
    }
    function sendMessage_mark($chat_id, $message, $keyboard){
        $this->telegram->sendMessage(['chat_id' => $chat_id, 'text' => $message, 'reply_markup' => $keyboard,
            'parse_mode' => 'HTML']);
    }
}



//if($text == 'start'){
//    $reply = "Hello world!";
//    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply]);
//}

// composer require irazasyed/telegram-bot-sdk ^2.0
//$ composer require vlucas/phpdotenv
//https://api.telegram.org/botTOKEN/setWebHook?url=HTTPSLINK
//https://api.telegram.org/bot5480236027:AAFVSKP_ujUosykr0YlRCkmT1Hj4-HGSNmA/setWebHook?url=https://bot.help-study2021.online/index.php
