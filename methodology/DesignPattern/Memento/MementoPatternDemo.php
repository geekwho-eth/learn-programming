<?php

namespace DesignPattern\Memento;

class MementoPatternDemo
{
    public function run()
    {
        $originator = new Originator();
        $careTaker  = new CareTaker();
        $originator->setState("State #1");
        $originator->setState("State #2");
        $careTaker->add($originator->saveStateToMemento());
        $originator->setState("State #3");
        $careTaker->add($originator->saveStateToMemento());
        $originator->setState("State #4");

        echo "Current State: " . $originator->getState();
        $originator->getStateFromMemento($careTaker->get(0));
        echo "First saved State: " . $originator->getState();
        $originator->getStateFromMemento($careTaker->get(1));
        echo "Second saved State: " . $originator->getState();
    }
}
