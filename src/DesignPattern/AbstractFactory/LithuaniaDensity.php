<?php

declare(strict_types = 1);

namespace App\DesignPattern\AbstractFactory;

/**
 * Class App\DesignPattern\AbstractFactory\LithuaniaDensity
 */
class LithuaniaDensity extends AbstractDensity implements DensityInterface
{
    public function getDensity(): string
    {
        return sprintf("Lithuania's density is %s", $this->density);
    }
}
