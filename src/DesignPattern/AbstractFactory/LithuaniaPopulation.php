<?php

declare(strict_types = 1);

namespace App\DesignPattern\AbstractFactory;

/**
 * Class App\DesignPattern\AbstractFactory\LithuaniaPopulation
 */
class LithuaniaPopulation implements PopulationInterface
{
    public function getPopulation(): int
    {
        return 2835988;
    }
}
