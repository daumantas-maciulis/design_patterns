<?php

declare(strict_types = 1);

namespace App\DesignPattern\AbstractFactory;

/**
 * Class App\DesignPattern\AbstractFactory\BrazilArea
 */
class BrazilArea implements AreaInterface
{
    public function getArea(): int
    {
        return 8515767;
    }
}
