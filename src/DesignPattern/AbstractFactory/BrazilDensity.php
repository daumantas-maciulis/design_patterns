<?php

declare(strict_types = 1);

namespace App\DesignPattern\AbstractFactory;

/**
 * App\DesignPattern\AbstractFactory\BrazilDensity
 */
class BrazilDensity extends AbstractDensity implements DensityInterface
{
    public function getDensity(): string
    {
        return sprintf("Brazil's density is %s", $this->density);
    }
}
