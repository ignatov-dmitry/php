<?php


namespace App\Connectors;


use App\Connectors\Interfaces\IMailServerConnector;

class GmailConnector implements IMailServerConnector
{
    private string $login ;

    private string $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function connect(): void
    {
        echo "Connect to gmail server! Login {$this->login} password '{$this->password}' \n";
    }

    public function disconnect(): void
    {
        echo "Disconnected \n";
    }

    public function sendMessage(string $text): void
    {
        echo "Сообщение \"{$text}\" отправлено через gmail\n";
    }
}
