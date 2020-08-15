<?php

namespace DesignPattern\Command;

/**
 * 命令模式示例
 */
class CommandPatternDemo
{
    public function run()
    {
        $abcStock       = new Stock();
        $buyStockOrder  = new BuyStock($abcStock);
        $sellStockOrder = new SellStock($abcStock);

        $broker = new Broker();
        $broker->takeOrder($buyStockOrder);
        $broker->takeOrder($sellStockOrder);
        $broker->placeOrders();
    }
}
