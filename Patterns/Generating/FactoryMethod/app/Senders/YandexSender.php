<?php


namespace App\Senders;


use App\Connectors\Interfaces\MailServerConnector;
use App\Connectors\YandexConnector;
use App\Senders\Abstracts\MailSender;

class YandexSender extends MailSender
{
    private string $login;

    private string $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getMailServer(): MailServerConnector
    {
        return new YandexConnector($this->login, $this->password);
    }
}