<?php
namespace DesignPattern\Visitor;

class Mouse implements IComputerPart
{
    public function accept($computerPartVisitor)
    {
        $computerPartVisitor->visit($this);
    }
}
