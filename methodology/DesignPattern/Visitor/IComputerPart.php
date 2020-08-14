<?php
namespace DesignPattern\Visitor;

interface IComputerPart
{
    public function accept($computerPartVisitor);
}
