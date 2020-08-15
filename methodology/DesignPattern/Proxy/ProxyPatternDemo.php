<?php

namespace DesignPattern\Proxy;

class ProxyPatternDemo
{
    public static function run()
    {
        $imageFile = "test_image.png";
        $image     = new ProxyImage($imageFile);
        $image->display();
        $image->display();
    }
}
