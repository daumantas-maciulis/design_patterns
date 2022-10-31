<?php

declare(strict_types = 1);

namespace App\DesignPattern\Strategy;

/**
 * Class App\DesignPattern\Strategy\OrderController
 */
class OrderController
{
    private ShippingStrategyInterface $shippingStrategy;

    public function __construct(ShippingStrategyInterface $shippingStrategy)
    {
        $this->shippingStrategy = $shippingStrategy;
    }

    public function createOrder(string $order): string
    {
        $shippingConfiguration = $this->shippingStrategy->configureShipping();

        return sprintf('Your order %s is created and will be shipped via %s', $order, $shippingConfiguration);
    }
}
