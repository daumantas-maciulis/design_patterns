<?php

declare(strict_types = 1);

namespace App\DesignPattern\AbstractFactory\Factory;

use App\DesignPattern\AbstractFactory\AreaInterface;
use App\DesignPattern\AbstractFactory\DensityInterface;
use App\DesignPattern\AbstractFactory\LithuaniaArea;
use App\DesignPattern\AbstractFactory\LithuaniaDensity;
use App\DesignPattern\AbstractFactory\LithuaniaPopulation;
use App\DesignPattern\AbstractFactory\PopulationInterface;

/**
 * Class App\DesignPattern\AbstractFactory\Factory\LithuaniaCountryFactory
 */
class LithuaniaCountryFactory implements CountryAbstractFactoryInterface
{
    public function createArea(): AreaInterface
    {
        return new LithuaniaArea();
    }

    public function createPopulation(): PopulationInterface
    {
        return new LithuaniaPopulation();
    }

    public function createDensity(int $area, int $population): DensityInterface
    {
        return new LithuaniaDensity($area, $population);
    }
}
