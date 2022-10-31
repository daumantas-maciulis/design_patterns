<?php

declare(strict_types = 1);

namespace App\DesignPattern\Strategy;

/**
 * Class App\DesignPattern\Strategy\RoadShippingStrategy
 */
class RoadShippingStrategy implements ShippingStrategyInterface
{
    public function configureShipping(): string
    {
        return $this->selectRandomTransport();
    }

    private function selectRandomTransport(): string
    {
        $transportVariation = ['dpd', 'venipak', 'dhl', 'ups'];

        return $transportVariation[array_rand($transportVariation)];
    }
}
