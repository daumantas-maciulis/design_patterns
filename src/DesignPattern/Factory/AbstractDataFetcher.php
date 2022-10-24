<?php

declare(strict_types = 1);

namespace App\DesignPattern\Factory;

/**
 * Class App\DesignPattern\Factory\AbstractDataFetcher
 */
abstract class AbstractDataFetcher
{
    abstract public function getDataSource(): DataSourceConnectorInterface;

    public function fetch(string $contentToFetch): ?string
    {
        try {
            $connector = $this->getDataSource();

            $connector->connect();
            $fetchedData = $connector->fetchData($contentToFetch);
        } catch (\Exception $exception) {
            echo $exception;
        } finally {
            $connector->closeConnection();
        }

        return $fetchedData ?? null;
    }
}
