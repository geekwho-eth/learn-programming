<?php

namespace DesignPattern\Proxy;

class RealImage implements Image
{
    public $imageFile = null;
    public function __construct($imageFile)
    {
        $this->imageFile = $imageFile;
        $this->loadFromDisk($imageFile);
    }
    public function display()
    {
        echo "Displaying " . $this->imageFile;
    }

    public function loadFromDisk($imageFile)
    {
        echo "Loading " . $imageFile;
    }
}
