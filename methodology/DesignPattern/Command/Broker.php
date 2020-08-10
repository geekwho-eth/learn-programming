<?php

namespace DesignPattern\Command;

class Broker
{
    private $orderList = [];

    public function takeOrder($order)
    {
        $this->orderList[] = $order;
    }

    public function placeOrders()
    {
        foreach ($this->orderList as $order) {
            $order->execute();
        }
        $this->orderList = [];
    }
}
