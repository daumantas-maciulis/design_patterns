<?php

declare(strict_types = 1);

namespace App\DesignPattern\Strategy;

/**
 * Class App\DesignPattern\Strategy\AirShippingStrategy
 */
class AirShippingStrategy implements ShippingStrategyInterface
{
    public function configureShipping(): string
    {
        return 'airplane shipping company';
    }
}
