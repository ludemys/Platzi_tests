<?php

interface MessageSender
{
    public function send($message);
}
interface ErrorSender
{
    public function send($message);
}

class Message implements MessageSender
{
    public function send($message)
    {
        echo "<p>$message</p>";
    }
}
class Errorr implements ErrorSender
{
    public function send($message)
    {
        echo "<h1>$message</h1>";
    }
}

class Sender
{
    public $messageSender;
    public $errorSender;

    public function __construct(MessageSender $messageSender, ErrorSender $errorSender)
    {
        $this->messageSender = $messageSender;
        $this->errorSender = $errorSender;
    }

    public function notify(int $severity, string $message)
    {
        $this->messageSender->send($message);

        if ($severity > 0)
        {
            $this->errorSender->send($message);
        }
    }
}


$sender = new Sender(new Message, new Errorr);

$sender->notify(1, 'Hi broroorororo');
