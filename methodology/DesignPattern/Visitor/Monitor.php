<?php
namespace DesignPattern\Visitor;

class Monitor implements IComputerPart
{
    public function accept($computerPartVisitor)
    {
        $computerPartVisitor->visit($this);
    }
}
