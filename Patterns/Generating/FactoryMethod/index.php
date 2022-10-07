<?php
require __DIR__.'/vendor/autoload.php';


use App\Mail\Mail;
use App\Senders\GmailSender;
use App\Senders\YandexSender;


$gmail = new Mail(new GmailSender('test@gmail.com', 'gmailPassword'));
$gmail->sendMessage('Test message from gmail');

$yandex = new Mail(new YandexSender('test@yandex.com', 'yandexPassword'));
$yandex->sendMessage('Test message from yandex');