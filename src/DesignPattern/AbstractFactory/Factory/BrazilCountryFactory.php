<?php

declare(strict_types = 1);

namespace App\DesignPattern\AbstractFactory\Factory;

use App\DesignPattern\AbstractFactory\AreaInterface;
use App\DesignPattern\AbstractFactory\BrazilArea;
use App\DesignPattern\AbstractFactory\BrazilDensity;
use App\DesignPattern\AbstractFactory\BrazilPopulation;
use App\DesignPattern\AbstractFactory\DensityInterface;
use App\DesignPattern\AbstractFactory\PopulationInterface;

/**
 * Class App\DesignPattern\AbstractFactory\Factory\BrazilCountryFactory
 */
class BrazilCountryFactory implements CountryAbstractFactoryInterface
{
    public function createArea(): AreaInterface
    {
        return new BrazilArea();
    }

    public function createPopulation(): PopulationInterface
    {
        return new BrazilPopulation();
    }

    public function createDensity(int $area, int $population): DensityInterface
    {
        return new BrazilDensity($area, $population);
    }
}
