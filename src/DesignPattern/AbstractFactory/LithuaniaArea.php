<?php

declare(strict_types = 1);

namespace App\DesignPattern\AbstractFactory;

/**
 * Class App\DesignPattern\AbstractFactory\LithuaniaArea
 */
class LithuaniaArea implements AreaInterface
{
    public function getArea(): int
    {
        return 65300;
    }
}
