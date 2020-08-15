<?php
namespace DesignPattern\Visitor;

class Keyboard implements IComputerPart
{
    public function accept($computerPartVisitor)
    {
        $computerPartVisitor->visit($this);
    }
}
