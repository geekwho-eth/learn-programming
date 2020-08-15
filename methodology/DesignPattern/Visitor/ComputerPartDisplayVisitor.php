<?php
namespace DesignPattern\Visitor;

class ComputerPartDisplayVisitor implements IComputerPartVisitor
{
    public function visit($computerPartVisitor)
    {
        $reflect = new \ReflectionClass($computerPartVisitor);
        echo "Displaying " . $reflect->getShortName();
    }
}
