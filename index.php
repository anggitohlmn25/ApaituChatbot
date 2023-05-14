<?php

$content = file_get_contents("php://input");
if($content){

    //persiapan token telegram
    $token = "6270972798:AAErJpl44DKWUkjlrKfrdMJfT-ExhWYt5XQ";

    //persiapan API link
    $apiLink = "https://api.telegram.org/bot$token/";
    //https://api.telegram.org/bot6270972798:AAErJpl44DKWUkjlrKfrdMJfT-ExhWYt5XQ
    
    //tes API: https://api.telegram.org/bot6270972798:AAErJpl44DKWUkjlrKfrdMJfT-ExhWYt5XQ/setwebhook?url=https://4966-2001-448a-2042-9693-45b-3c17-a81e-3077.ap.ngrok.io/chatbottele/

    $update = json_decode($content, true);

    $chat_id = $update['message']['chat']['id'];
    $text = $update['message']['text'];
    $chatName = $update['message']['chat']['first_name'];

    //persiapan kirim balasan
    file_get_contents($apiLink."sendmessage?chat_id=$chat_id&text=hai $chatName, yang kamu ketikkan ". $text);
    

}else{
    echo "Hanya Telegram yang dapat akses url ini .. !!";
}
?>