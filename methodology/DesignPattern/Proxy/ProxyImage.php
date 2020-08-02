<?php

namespace DesignPattern\Proxy;

class ProxyImage implements Image
{
    public $realImage = null;
    public $imageFile = null;
    public function __construct($imageFile)
    {
        $this->imageFile = $imageFile;
    }
    public function display()
    {
        if ($this->realImage == null) {
            $this->realImage = new RealImage($this->imageFile);
        }
        $this->realImage->display();
    }
}
