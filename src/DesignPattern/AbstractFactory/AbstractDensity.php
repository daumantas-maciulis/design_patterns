<?php

declare(strict_types = 1);

namespace App\DesignPattern\AbstractFactory;

/**
 * Class App\DesignPattern\AbstractFactory\AbstractDensity
 */
class AbstractDensity
{
    protected float $density;

    public function __construct(int $area, int $population)
    {
        $this->density = $area / $population;
    }
}
