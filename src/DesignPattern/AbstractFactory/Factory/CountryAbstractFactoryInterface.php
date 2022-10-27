<?php

declare(strict_types = 1);

namespace App\DesignPattern\AbstractFactory\Factory;

use App\DesignPattern\AbstractFactory\AreaInterface;
use App\DesignPattern\AbstractFactory\DensityInterface;
use App\DesignPattern\AbstractFactory\PopulationInterface;

/**
 * Class App\DesignPattern\AbstractFactory\Factory\CountryAbstractFactoryInterface
 */
interface CountryAbstractFactoryInterface
{
    public function createArea(): AreaInterface;

    public function createPopulation(): PopulationInterface;

    public function createDensity(int $area, int $population): DensityInterface;
}
