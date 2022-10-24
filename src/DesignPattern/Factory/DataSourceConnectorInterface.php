<?php

declare(strict_types = 1);

namespace App\DesignPattern\Factory;

/**
 * Class App\DesignPattern\Factory\DataSourceConnectorInterface
 */
interface DataSourceConnectorInterface
{
    public function connect(): void;

    public function fetchData(string $contentToFetch): string;

    public function closeConnection(): void;
}
