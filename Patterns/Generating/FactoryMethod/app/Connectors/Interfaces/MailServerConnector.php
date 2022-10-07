<?php


namespace App\Connectors\Interfaces;


interface MailServerConnector
{
    public function connect(): void;

    public function disconnect(): void;

    public function sendMessage(string $text): void;
}