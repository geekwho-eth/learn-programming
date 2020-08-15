<?php
namespace DesignPattern\Visitor;

class Computer implements IComputerPart
{
    public $parts = [];

    public function __construct()
    {
        $this->parts[] = new Mouse();
        $this->parts[] = new Keyboard();
        $this->parts[] = new Monitor();
    }
    public function accept($computerPartVisitor)
    {
        foreach ($this->parts as $part) {
            $part->accept($computerPartVisitor);
        }
        $computerPartVisitor->visit($this);
    }
}
