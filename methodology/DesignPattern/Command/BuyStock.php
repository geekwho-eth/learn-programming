<?php

namespace DesignPattern\Command;

class BuyStock implements IOrder
{
    private $abcStock;

    public function __construct($abcStock)
    {
        $this->abcStock = $abcStock;
    }

    public function execute()
    {
        $this->abcStock->buy();
    }
}
