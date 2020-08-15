<?php

namespace DesignPattern\Iterator;

class IteratorPatternDemo
{
    public function run()
    {
        $namesRepository = new NameRepository();
        for ($iter = $namesRepository->getIterator(); $iter->hasNext($namesRepository);) {
            $name = $iter->next($namesRepository);
            echo "Name : " . $name;
        }
    }
}
