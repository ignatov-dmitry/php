<?php


namespace App\Senders;


use App\Connectors\GmailConnector;
use App\Connectors\Interfaces\IMailServerConnector;
use App\Senders\Abstracts\MailSender;

class GmailSender extends MailSender
{
    private string $login;

    private string $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getMailServer(): IMailServerConnector
    {
        return new GmailConnector($this->login, $this->password);
    }
}
