<?php


namespace App\Connectors\Interfaces;


interface IMailServerConnector
{
    public function connect(): void;

    public function disconnect(): void;

    public function sendMessage(string $text): void;
}
