<?php

namespace DesignPattern\Mediator;

class ChatRoom
{
    public static function showMessage($user, $message)
    {
        echo date('Ymd H:i:s') . " [" . $user->getName() . "] : " . $message;
    }
}
