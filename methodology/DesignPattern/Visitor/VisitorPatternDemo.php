<?php
namespace DesignPattern\Visitor;

class VisitorPatternDemo
{
    public function run()
    {
        $computer = new Computer();
        $computer->accept(new ComputerPartDisplayVisitor());
    }
}
