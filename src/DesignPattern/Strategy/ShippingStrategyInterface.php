<?php

declare(strict_types = 1);

namespace App\DesignPattern\Strategy;

/**
 * Cass App\DesignPattern\Strategy\ShippingStrategyInterface
 */
interface ShippingStrategyInterface
{
    public function configureShipping(): string;
}
