<?php


namespace App\Senders\Abstracts;


use App\Connectors\Interfaces\MailServerConnector;

abstract class MailSender
{
    abstract public function getMailServer(): MailServerConnector;

    public function send($content): void
    {
        $network = $this->getMailServer();
        $network->connect();
        $network->sendMessage($content);
        $network->disconnect();
    }
}