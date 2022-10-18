<?php


namespace App\Senders\Abstracts;


use App\Connectors\Interfaces\IMailServerConnector;

abstract class MailSender
{
    abstract public function getMailServer(): IMailServerConnector;

    public function send($content): void
    {
        $network = $this->getMailServer();
        $network->connect();
        $network->sendMessage($content);
        $network->disconnect();
    }
}
