<?php
namespace App\Mail;

use App\Senders\Abstracts\MailSender;

class Mail
{
    private MailSender $mailSender;

    public function __construct(MailSender $mailSender)
    {
        $this->mailSender = $mailSender;
    }

    public function sendMessage(string $message)
    {
        $this->mailSender->send($message);
    }
}