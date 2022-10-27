<?php

declare(strict_types = 1);

namespace App\DesignPattern\AbstractFactory;

class BrazilPopulation implements PopulationInterface
{
    public function getPopulation(): int
    {
        return 217240060;
    }
}
