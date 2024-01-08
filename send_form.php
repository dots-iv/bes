<?php

$chat_id = '-4066489453';
$bot_token = '6661802480:AAGr8qbY72Fm0tNd9Rr2FRm7S8OVTk9-jsc';

$form = [
    'name' => $_POST['name'],
    'surname' => $_POST['surname'],
    'geo' => $_POST['geo'],
    'phone' => $_POST['phone'],
    'description' => $_POST['description']
];

$text = "📥 <strong>Новая заявка!</strong>\n\nИмя Фамилия: ".$form['name']." ".$form['surname']."\nГЕО: ".$form['geo']."\nТелефон: ".$form['phone']."\nОписание: ".$form['description'];
$text = str_replace(' ', "%20", $text);
$text = str_replace("\n", "%0A", $text);
$url = 'https://api.telegram.org/bot'.$bot_token.'/sendMessage?chat_id='.$chat_id.'&text='.$text.'&parse_mode=html';

$response = file_get_contents($url);
echo $response;