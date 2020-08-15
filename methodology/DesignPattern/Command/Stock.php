<?php

namespace DesignPattern\Command;

/**
 * Sotck请求类
 */
class Stock
{
    private $name     = "ABC";
    private $quantity = "10";

    public function buy()
    {
        echo "Stock [ Name: " . $this->name . ",Quantity: " . $this->quantity . " ] bought";
    }

    public function sell()
    {
        echo "Stock [ Name: " . $this->name . ",Quantity: " . $this->quantity . " ] sold";
    }
}
